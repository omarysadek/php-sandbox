<?php

namespace OSPSB\src\patterns\template_method\soda\Entity;

class Fanta extends Soda
{
    const SUBSTANCE = 'fanta';

    /**
     * @return Soda
     */
    public function addingMainSubstance() : Soda
    {
        "Adding fanta..";
        $this->mainSubstance = self::SUBSTANCE;

        return $this;
    }
}
