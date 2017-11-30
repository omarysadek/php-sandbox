<?php

namespace OSPSB\src\patterns\template_method\soda\Entity;

abstract class Soda
{
    /**
     * @var string
     */
    protected $mainSubstance;

    /**
     * @return string
     */
    public function getMainSubstance()
    {
        return $this->mainSubstance;
    }

    /**
     * @return Soda
     */
    public function make()
    {
        $this->createCup()
            ->addingMainSubstance()
            ->coverIT();

        return $this;
    }

    /**
     * @return Soda
     */
    public function createCup() : Soda
    {
        "The cup is created..";

        return $this;
    }

    /**
     * @return Soda
     */
    public function coverIT() : Soda
    {
        "The cup is covered..";

        return $this;
    }

    /**
     * @return Soda
     */
    abstract public function addingMainSubstance() : Soda;
}
