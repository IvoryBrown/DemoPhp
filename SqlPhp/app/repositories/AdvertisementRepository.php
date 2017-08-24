<?php namespace App\Repositories;

use App\Model\Advertisement;

class AdvertisementRepository extends Repository {

    /**
     * @return Advertisement[]
     * @throws \Exception
     */
    public function getAll()
    {
        $result = [];
        //Connect to the Db
        if(!$this->db->real_connect(self::$dbHost, self::$dbUser, self::$dbPassword, self::$dbName,  self::$dbPort )){
            throw new \Exception("DB Connection failed");
        }


        $sql = "SELECT * FROM advertisements";

        $sqlStmt = $this->db->prepare($sql);

        if($sqlStmt->execute()){
            $sqlResult = $sqlStmt->get_result();
        }

        if($sqlResult !== false){
            while( $obj = $sqlResult->fetch_object(Advertisement::class)){
                $userService = new UserRepository();
                $user = $userService->getById($obj->getUserId());
                $obj->setUser($user);
                $result[] = $obj;
            }
        }
        $this->db->close();
        return $result;
    }

    public function getById($id)
    {
        // TODO: Implement getById() method.
    }

    /**
     * @param int $userId
     * @return Advertisement[]
     * @throws \Exception
     */
    public function getByUserId($userId)
    {
        $result = [];
        //Connect to the Db
        if(!$this->db->real_connect(self::$dbHost, self::$dbUser, self::$dbPassword, self::$dbName,  self::$dbPort )){
            throw new \Exception("DB Connection failed");
        }


        $sql = "SELECT * FROM advertisements where userId=?";

        $sqlStmt = $this->db->prepare($sql);

        $sqlStmt->bind_param("i", $userId);
        if($sqlStmt->execute()){
            $sqlResult = $sqlStmt->get_result();
        }

        if($sqlResult !== false){
            while( $obj = $sqlResult->fetch_object(Advertisement::class)){
                $result[] = $obj;
            }
        }
        $this->db->close();
        return $result;
    }
}