<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;
use App\Http\Requests\TareaRequest;
use App\Http\Resources\TareaResource;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tareas = Tarea::all();
        return TareaResource::collection($tareas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TareaRequest $request)
    {
        $tarea = Tarea::create($request->all());
        return new TareaResource($tarea);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tarea=Tarea::find($id);
        return new TareaResource($tarea);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tarea $tarea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TareaRequest $request, Tarea $tarea)
    {
        $tarea->update($request->all());
        return new TareaResource($tarea);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tarea $tarea)
    {
        $tarea->delete();
        return response()->json(null, 204);
    }
}
