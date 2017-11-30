<?php

namespace OSPSB\src\patterns\specification\user\Repository;

use OSPSB\src\patterns\specification\user\Interfaces\SpecificationInterface;

class UserRepository
{
    /**
     * @var array array of User
     */
    protected $users;

    /**
     * @param array $users
     */
    public function __construct(array $users)
    {
        $this->users = $users;
    }

    /**
     * @param  SpecificationInterface $specification
     *
     * @return mix
     */
    public function getBy(SpecificationInterface $specification)
    {
        return array_filter($this->users, function ($user) use ($specification) {
            if ($specification->isSatisfayBy($user)) {
                return $user;
            }
        });
    }
}
