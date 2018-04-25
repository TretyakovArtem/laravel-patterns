<?php

namespace App;

use App\Models\Abstracts\Unit;

class Archer extends Unit
{
    protected $table = 'archers';

    public function addUnit(Unit $unit)
    {
        if (in_array($unit, $this->units, true)) {
            return;
        }
        $this->units[] = $unit;
    }

    function removeUnit(Unit $unit)
    {
        $this->units = array_udiff($this->units, array($unit),
            function ($a, $b){return ($a === $b) ? 0:1;});
    }

    function bombardStrength()
    {
        return 4;
    }
}
