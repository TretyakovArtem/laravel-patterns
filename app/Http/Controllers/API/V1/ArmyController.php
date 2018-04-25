<?php

namespace App\Http\Controllers\Api\V1;

use App\Archer;
use App\Http\Controllers\Controller;
use App\Models\Units\Army;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class ArmyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return "test";
    }


    public function take($id)
    {
        $unit = Archer::find($id);
        $army = Army::find(1);

        $army->addUnit($unit);
        $unit->occupated_id = $army->id;
        $unit->save();

        $army->strength = $army->bombardStrength();
    }
}