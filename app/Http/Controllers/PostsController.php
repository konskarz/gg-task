<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

/**
 * @OA\Info(
 *     description="Create, Read, Update, Delete Posts",
 *     version="1.0.0",
 *     title="Posts API"
 * )
 */

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
         * @OA\Get(
         *     path="/api/posts",
         *     summary="Get all posts",
         *     description="Display a listing of the resource.",
         *     @OA\Response(
         *         response=200,
         *         description="Everything OK"
         *     ),
         * )
    */
    public function index()
    {
        return $this->http->get('posts')->json();
    }

    /**
         * @OA\Post(
         *     path="/api/posts",
         *     summary="Create a new post",
         *     description="Store a newly created resource in storage.",
         *     @OA\Response(
         *         response=200,
         *         description="Everything OK"
         *     ),
         * )
    */
    public function store(Request $request)
    {
        return $this->http->post('posts', $request->json())->json();
    }

    /**
         * @OA\Get(
         *     path="/api/posts/:id",
         *     summary="Get specific post",
         *     description="Display the specified resource.",
         *     @OA\Response(
         *         response=200,
         *         description="Everything OK"
         *     ),
         * )
    */
    public function show(string $id)
    {
        return $this->http->get("posts/{$id}")->json();
    }

    /**
         * @OA\Put(
         *     path="/api/posts/:id",
         *     summary="Update specific post",
         *     description="Update the specified resource in storage.",
         *     @OA\Response(
         *         response=200,
         *         description="Everything OK"
         *     ),
         * )
    */
    public function update(Request $request, string $id)
    {
        return $this->http->put("posts/{$id}", $request->json())->json();
    }

    /**
         * @OA\Delete(
         *     path="/api/posts/:id",
         *     summary="Delete specific post",
         *     description="Remove the specified resource from storage.",
         *     @OA\Response(
         *         response=200,
         *         description="Everything OK"
         *     ),
         * )
    */
    public function destroy(string $id)
    {
        return $this->http->delete("posts/{$id}")->json();
    }

    public function view() {
        $posts = $this->index();
        return view('posts', compact('posts'));
    }
}
