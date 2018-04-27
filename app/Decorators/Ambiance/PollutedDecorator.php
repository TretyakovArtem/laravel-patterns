<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 27.04.18
 * Time: 17:20
 */

namespace App\Decorators\Ambiance;


class PollutedDecorator extends TileDecorator
{
    function getWealth()
    {
        return $this->tile->getWealth() - 2;
    }
}