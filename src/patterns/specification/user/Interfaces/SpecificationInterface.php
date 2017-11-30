<?php

namespace OSPSB\src\patterns\specification\user\Interfaces;

use OSPSB\src\patterns\specification\user\Entity\User;

interface SpecificationInterface
{
    /**
     * @param  User    $user
     *
     * @return boolean
     */
    public function isSatisfayBy(User $user) : bool;
}
