<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 27.04.18
 * Time: 17:11
 */

namespace App\Models\Ambiance;

use App\Models\Abstracts\Tile;

class Plain extends Tile
{
    protected $table = 'plains';

    private $wealth;

    function getWealth()
    {
        return $this->wealth;
    }
}