<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 25.04.18
 * Time: 16:28
 */
namespace App\Models\Abstractive;
use Illuminate\Database\Eloquent\Model;


abstract class Unit extends Model
{
    abstract function addUnit(Unit $unit);

    abstract function removeUnit(Unit $unit);

    abstract function bombardStrength();
}