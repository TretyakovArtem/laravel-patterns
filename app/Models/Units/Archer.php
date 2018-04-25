<?php

namespace App;

use App\Models\Abstracts\Unit;

class Archer extends Unit
{
    protected $table = 'archers';

    function bombardStrength()
    {
        return 4;
    }
}
