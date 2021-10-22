<?php

namespace App\Http\Controllers;

use App\Http\Requests\clients\storeUserClientsRequest;
use App\Models\Client;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request):JsonResponse
    {

        $clients = Client::where('deleted', false)->get();
        return response()->json([
            'data' => $clients,
            'message' => 'clientes obtenidos con éxito'
        ]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   /* función para crear los datos de un cliente */

   public function store(storeUserClientsRequest $request): JsonResponse
   {
       $user = $request->user();

       $client = new Client();
       $client->name = $request->input('name');
       $client->email = $request->input('email');
       $client->phone = $request->input('phone');
       $client->address = $request->input('address');

       $client->save();

       return response()->json([
           'message' => 'cliente creado con exito'
       ], 201);
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->deleted = true;
        $client->save();

        return response()->json([
            'message' => 'Cliente eliminado con exito'
        ], 200);
    }
}
