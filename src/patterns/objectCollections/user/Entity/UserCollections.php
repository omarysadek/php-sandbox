<?php

namespace OSPSB\src\patterns\objectCollections\user\Entity;

class UserCollections
{
    /**
     * @var array array collection of User
     */
    protected $users;

    /**
     * @param mix $user array|User
     *
     * @return UserCollections
     */
    public function add($user)
    {
        if (is_array($user)) {
            array_map([$this, 'add'], $user);
        }

        if ($user instanceof USER) {
            $this->users[] = $user;
        }

        return $this;
    }

    /**
     * @return array an array contain every names of users
     */
    public function names()
    {
        return array_map(function ($user) {
            return $user->name();
        }, $this->users);
    }
}
