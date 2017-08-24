<?php
/**
 * Created by PhpStorm.
 * User: jeght
 * Date: 2017. 06. 08.
 * Time: 16:03
 */

namespace App\Models;


class ErrorMessage implements \JsonSerializable
{
    protected $code;
    protected $description;

    /**
     * ErrorMessage constructor.
     * @param $_code integer
     * @param $_description string
     */
    public function __construct($_code, $_description)
    {
        $this->code = $_code;
        $this->description = $_description;
    }

    /**
     * @return integer
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    function jsonSerialize()
    {
        return get_object_vars($this);
    }
}