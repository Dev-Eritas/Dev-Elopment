<?php

namespace App\Http\Controllers\Api;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
* @OA\Info(title="API Usuarios", version="1.0")
*
* @OA\Server(url="http://127.0.0.1:8000")
*/

class UserController extends Controller
{
    /**
    * @OA\Get(
    *     path="/api/users",
    *     summary="Mostrar usuarios",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */
    
    public function index()
    {
        return \App\User::all();
    }

    
    /**
     * @OA\Post(
     *     path="/api/users",
     *     summary="Añadir un nuevo usuario",
     *     @OA\RequestBody(
     *         description="A new editor",
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="application/xml",
     *         ),
     *     ),
     *     @OA\RequestBody(
     *         description="Añadir un nuevo usuario",
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="application/xml",
     *         )
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Input inválido",
     *     ),
     *     security={{"user_auth":{"write:user", "read:user"}}}
     * )
     */
    public function addUser()
    {
    }

      /**
     * @OA\Put(
     *     path="/api/users",
     *     summary="Actualizar un usuario",
     *     description="",
     *     @OA\RequestBody(
     *         required=true,
     *         description="Actualizar un usuario",
     *         @OA\MediaType(
     *            mediaType="application/xml",
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="ID Inválido",
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Usuario no encontrado",
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception",
     *     ),
     *     security={{"user_auth":{"write:user", "read:user"}}}
     * )
     */
    public function updateUser()
    {
    }

      /**
     * @OA\Delete(
     *     path="/api/users",
     *     summary="Borrar usuario",
     *  
     *     @OA\Parameter(
     *         description="ID de usuario a borrar",
     *         in="path",
     *         name="userId",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Header(
     *         header="api_key",
     *         description="Api key header",
     *         required=false
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="ID Inválido"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Usuario no encontrado"
     *     ),
     *     security={{"user_auth":{"write:user", "read:user"}}}
     * )
     */
    public function deleteUser()
    {
    }

    /**
    * @OA\Get(
    *     path="/api/blogs",
    *     summary="Mostrar blogs",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los blogs."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */
    
    public function blog()
    {
        return \App\Blog::all();
    }

    /**
     * @OA\Post(
     *     path="/api/blog",
     *     summary="Añadir un nuevo blog",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="application/xml",
     *         ),
     *     ),
     *     @OA\RequestBody(
     *         description="Añadir un nuevo blog",
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="application/xml",
     *         )
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Input inválido",
     *     ),
     *     security={{"blog_auth":{"write:blog", "read:blog"}}}
     * )
     */
    public function addBlog()
    {
    }
}
