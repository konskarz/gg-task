<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PassengerController extends Controller
{
    private $http;

    public function __construct()
    {
        $this->http = Http::withOptions([
            'base_uri' => 'https://api.instantwebtools.net/v1/'
        ]);
    }

    /**
         * @OA\Get(
         *     path="/api/passenger",
         *     summary="Get all passengers",
         *     description="Display a listing of the resource.",
         *     @OA\Response(
         *         response=200,
         *         description="Everything OK"
         *     ),
         * )
    */
    public function index(Request $request)
    {
        return $this->http->get('passenger?' . $request->getQueryString())->json();
    }

    /**
         * @OA\Post(
         *     path="/api/passenger",
         *     summary="Create a new passenger",
         *     description="Store a newly created resource in storage.",
         *     @OA\Response(
         *         response=200,
         *         description="Everything OK"
         *     ),
         * )
    */
    public function store(Request $request)
    {
        return $this->http->post('passenger', $request->json())->json();
    }

    /**
         * @OA\Get(
         *     path="/api/passenger/:id",
         *     summary="Get specific passenger",
         *     description="Display the specified resource.",
         *     @OA\Response(
         *         response=200,
         *         description="Everything OK"
         *     ),
         * )
    */
    public function show(string $id)
    {
        return $this->http->get("passenger/{$id}")->json();
    }

    /**
         * @OA\Put(
         *     path="/api/passenger/:id",
         *     summary="Update specific passenger",
         *     description="Update the specified resource in storage.",
         *     @OA\Response(
         *         response=200,
         *         description="Everything OK"
         *     ),
         * )
    */
    public function update(Request $request, string $id)
    {
        return $this->http->put("passenger/{$id}", $request->json())->json();
    }

    /**
         * @OA\Delete(
         *     path="/api/passenger/:id",
         *     summary="Delete specific passenger",
         *     description="Remove the specified resource from storage.",
         *     @OA\Response(
         *         response=200,
         *         description="Everything OK"
         *     ),
         * )
    */
    public function destroy(string $id)
    {
        return $this->http->delete("passenger/{$id}")->json();
    }
}
