<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 27.04.18
 * Time: 17:20
 */

namespace App\Decorators\Ambiance;


class DiamondDecorator extends TileDecorator
{
    function getWealth()
    {
        return $this->tile->getWealth() + 4;
    }
}