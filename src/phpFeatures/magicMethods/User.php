<?php

namespace OSPSB\src\phpFeatures\magicMethods;

class User
{
    const SALT = 'azerty';

    /**
     * @var string
     */
    protected $login;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var int
     */
    protected $age;

    /**
     * This contructor is too lazy to setup your attributes, so do it by your self!
     */
    public function __construct()
    {
    }

    /**
     * @param string
     * @param string
     *
     * @return User
     */
    public function __set($attribute, $value)
    {
        switch ($attribute) {
            case 'login':
                $this->login = $value;
                break;
            case 'password':
                $this->password = crypt($value, self::SALT);
                break;
            case 'age':
                $this->age = $value;
                break;
        }

        return $this;
    }

    /**
     * @param string
     *
     * @return mix
     */
    public function __get($attribute)
    {
        if (property_exists($this, $attribute)) {
            return $this->$attribute;
        }
    }
}
