<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostsController extends Controller
{
    private $http;

    public function __construct()
    {
        $this->http = Http::withOptions([
            'base_uri' => 'https://jsonplaceholder.typicode.com/'
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->http->get('posts')->json();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->http->post('posts', $request->json())->json();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->http->get("posts/{$id}")->json();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return $this->http->put("posts/{$id}", $request->json())->json();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->http->delete("posts/{$id}")->json();
    }
}
