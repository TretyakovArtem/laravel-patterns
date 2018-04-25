<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 25.04.18
 * Time: 16:28
 */
namespace App\Models\Abstracts;
use Exception;
use Illuminate\Database\Eloquent\Model;


abstract class Unit extends Model
{
    /**
     * @param Unit $unit
     * @throws Exception
     */
    function addUnit(Unit $unit)
    {
        throw new Exception('Класс '.get_class($this).' не поддерживает операции добавления');
    }

    /**
     * @param Unit $unit
     * @throws Exception
     */
    function removeUnit(Unit $unit)
    {
        throw new Exception('Класс '.get_class($this).' не поддерживает операции удаления');
    }

    abstract function bombardStrength();
}