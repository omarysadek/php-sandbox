<?php

namespace OSPSB\src\exo\arrayDif;

class ArrayDiff
{
    /**
     * @var array
     */
    protected $dataX;

    /**
     * @var array
     */
    protected $dataY;

    /**
     * @var array content of both array with similar value
     */
    protected $dataXAndY = [];

    /**
     * @param array $dataX
     * @param array $dataY
     */
    public function __construct($dataX, $dataY)
    {
        $this->dataX = $dataX;
        $this->dataY = $dataY;

        $this->fire();
    }

    public function fire()
    {
        foreach ($this->dataX as $xKey => $xValue) {
            if (isset($this->dataY[$xKey])) {
                unset($this->dataX[$xKey]);
                unset($this->dataY[$xKey]);
                $this->dataXAndY[$xKey] = $xValue;
                continue;
            }
        }
    }

    /**
     * @return array
     */
    public function getOnlyX()
    {
        return $this->dataX;
    }

    /**
     * @return array
     */
    public function getOnlyY()
    {
        return $this->dataY;
    }

    /**
     * @return array
     */
    public function getXAndY()
    {
        return $this->dataXAndY;
    }
}
