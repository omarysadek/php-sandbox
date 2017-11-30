<?php

namespace OSPSB\src\patterns\template_method\soda\Entity;

class CocaCola extends Soda
{
    const SUBSTANCE = 'coca';

    /**
     * @return Soda
     */
    public function addingMainSubstance() : Soda
    {
        "Adding coca cola..";
        $this->mainSubstance = self::SUBSTANCE;

        return $this;
    }
}
