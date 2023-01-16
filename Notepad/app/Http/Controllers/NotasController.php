<?php

namespace App\Http\Controllers;

use App\Clases\Error;
use App\Models\Notas;
use App\Http\Controllers\Controller;
use App\Http\Resources\NotasResource;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class NotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return NotasResource::collection(Notas::all());;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $notas = new Notas();

        $notas->titulo = $request->input('titulo');
        $notas->texto = $request->input('texto');
        try
        {
            $notas->save();
            $response = (new NotasResource($notas))
                        ->response()
                        ->setStatusCode(201);
        } catch (QueryException $ex)
        {
            $mensaje = Error::errorMessage($ex);
            $response = \response()
                        ->json(['error' => $mensaje, 400]);
        }


        return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notas  $notas
     * @return \Illuminate\Http\Response
     */
    public function show(Notas $notas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notas  $notas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notas $notas)
    {
        $notas->titulo = $request->input('titulo');
        $notas->texto = $request->input('texto');
        try
        {
            $notas->save();
            $response = (new NotasResource($notas))
                        ->response()
                        ->setStatusCode(201);
        } catch (QueryException $ex)
        {
            $mensaje = Error::errorMessage($ex);
            $response = \response()
                        ->json(['error' => $mensaje, 400]);
        }


        return $response;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notas  $notas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notas $notas)
    {
        try
        {
            $notas->delete();
            $response = \response()
            ->json(['error' => 'Registre esborrat correctament', 200]);

        } catch (QueryException $ex) {
            $mensaje = Error::errorMessage($ex);
            $response = \response()
            ->json(['error' => $mensaje, 400]);
        }


        return $response;
    }
}
