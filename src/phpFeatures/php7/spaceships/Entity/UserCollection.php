<?php

namespace OSPSB\src\phpFeatures\php7\spaceships\Entity;

use OSPSB\src\phpFeatures\php7\spaceships\Entity\User;

class UserCollection
{
    /**
     * @var array
     */
    protected $users;

    /**
     * @param array $user
     */
    public function __construct(...$user)
    {
        $this->add($user);
    }

    /**
     * @param mix $user array|User
     *
     * @return UserCollection
     */
    public function add($user) : UserCollection
    {
        if (is_array($user)) {
            array_map([$this, 'add'], $user);
        }

        if ($user instanceof User) {
            $this->users[] = $user;
        }

        return $this;
    }

    /**
     * @return array|null
     */
    public function print()
    {
        return array_map(function ($user) {
            return [$user->name() => $user->age()];
        }, $this->users);
    }

    /**
     * @param string $attribute
     *
     * @return UserCollection
     */
    public function sortBy(string $attribute) : UserCollection
    {
        usort($this->users, function ($preUser, $postUser) use ($attribute) {
            return $preUser->$attribute() <=> $postUser->$attribute();
        });

        return $this;
    }
}
