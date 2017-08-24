<?php namespace App\Repositories;

use App\Model\User;

class UserRepository extends Repository
{

    /**
     * @return User[]
     */
    public function getAll()
    {
        $result = [];
        //Connect to the Db
        if(!$this->db->real_connect(self::$dbHost, self::$dbUser, self::$dbPassword, self::$dbName,  self::$dbPort )){
            throw new \Exception("DB Connection failed");
        }


        $sql = "SELECT * FROM users";

        $sqlStmt = $this->db->prepare($sql);

        if($sqlStmt->execute()){
            $sqlResult = $sqlStmt->get_result();
        }

        if($sqlResult !== false){
            while( $obj = $sqlResult->fetch_object(User::class)){
                $result[] = $obj;
            }
        }
        $this->db->close();
        return $result;
    }

    /**
     * @return User
     */
    public function getById($id)
    {
        $result = null;
        if(!$this->db->real_connect(self::$dbHost, self::$dbUser, self::$dbPassword, self::$dbName,  self::$dbPort )){
            throw new \Exception("DB Connection failed");
        }


        $sql = "SELECT * FROM users WHERE id=? LIMIT 1";

        $sqlStmt = $this->db->prepare($sql);
        $sqlStmt->bind_param("i", $id);
        if($sqlStmt->execute()){
            $sqlResult = $sqlStmt->get_result();
        }

        if($sqlResult !== false){
            $obj = $sqlResult->fetch_object(User::class);
            $result = $obj;
        }
        $this->db->close();
        return $result;
    }
}
