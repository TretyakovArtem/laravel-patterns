<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 27.04.18
 * Time: 17:16
 */

namespace App\Decorators\Ambiance;


use App\Models\Abstracts\Tile;

abstract class TileDecorator extends Tile
{
    protected $tile;

    public function __construct(Tile $tile)
    {
        $this->tile = $tile;
    }
}