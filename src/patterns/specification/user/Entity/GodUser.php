<?php

namespace OSPSB\src\patterns\specification\user\Entity;

use OSPSB\src\patterns\specification\user\Interfaces\SpecificationInterface;

class GodUser implements SpecificationInterface
{
    /**
     * @param  User    $user
     * @return boolean
     */
    public function isSatisfayBy(User $user) : bool
    {
        return ($user->type() == 'god') ? true : false;
    }
}
