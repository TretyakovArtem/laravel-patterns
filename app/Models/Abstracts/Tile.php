<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 27.04.18
 * Time: 17:04
 */

namespace App\Models\Abstracts;


use Illuminate\Database\Eloquent\Model;

abstract class Tile extends Model
{
   abstract function getWealth();
}