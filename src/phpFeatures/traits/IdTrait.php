<?php

namespace OSPSB\src\phpFeatures\traits;

trait IdTrait
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @return int
     */
    public function id()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
