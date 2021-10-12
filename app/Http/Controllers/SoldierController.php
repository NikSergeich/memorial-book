<?php

namespace App\Http\Controllers;

use App\Models\Soldier;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SoldierController extends Controller
{
    public function index()
    {
        return Inertia::render('Soldiers/Index', [
            'soldiers' => Soldier::all(
                'id',
                'last_name',
                'first_name',
                'patronymic',
                'birthday',
                'month_of_birth',
                'year_of_birth',
                'death_date',
                'death_month',
                'year_of_death',
                'photo'
            )
        ]);
    }

    public function create()
    {
        return Inertia::render('Soldiers/Create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
//         $soldier = Soldier::with('user','events','awards','galleries')->findOrFail($id);
//        return $soldier;
         return Inertia::render('Soldiers/Show', [
             'soldier' => Soldier::with('user','events','awards','galleries')->findOrFail($id),
         ]);
    }

    public function edit(Soldier $soldier)
    {
        //
    }

    public function update(Request $request, Soldier $soldier)
    {
        //
    }

    public function destroy(Soldier $soldier)
    {
        //
    }
}
