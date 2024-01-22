<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public readonly Car $car;

    public function __construct()
    {
        $this->car = new Car();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = $this->car->all();

        return view("cars.cars", compact("cars"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("cars.car_create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->car->create([
            "marca" => $request->input("marca"),
            "modelo" => $request->input("modelo"),
            "valor" => $request->input("valor"),
        ]);

        if ($created) {
            return redirect()->route('cars.index');
        }

        return redirect()->back()->with('message','Erro ao atualizar!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view('cars.car_show', ['car' => $car]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view("cars.car_edit", ['car' => $car]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->car->where('id', $id)->update($request->except(['_token','_method']));

        if ($updated) {
            return redirect()->route('cars.index');;
        }

        return redirect()->back()->with('message','Erro ao atualizar!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->car->where('id', $id)->delete();

        return redirect()->route('cars.index');
    }
}
