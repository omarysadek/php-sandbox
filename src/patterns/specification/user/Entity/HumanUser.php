<?php

namespace OSPSB\src\patterns\specification\user\Entity;

use OSPSB\src\patterns\specification\user\Interfaces\SpecificationInterface;

class HumanUser implements SpecificationInterface
{
    /**
     * @param  User    $user
     * @return boolean
     */
    public function isSatisfayBy(User $user) : bool
    {
        return ($user->type() == 'human') ? true : false;
    }
}
