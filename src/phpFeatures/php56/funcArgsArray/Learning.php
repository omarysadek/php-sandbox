<?php

namespace OSPSB\src\phpFeatures\php56\funcArgsArray;

abstract class Learning
{
    /**
     * @param array $args
     *
     * @return array
     */
    public static function getAnyArg(...$args)
    {
        return $args;
    }

    /**
     * @return array
     */
    public static function getAnyArgOld()
    {
        return func_get_args();
    }
}
