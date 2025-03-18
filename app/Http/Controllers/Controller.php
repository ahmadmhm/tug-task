<?php

namespace App\Http\Controllers;

/**
 * @OA\OpenApi(
 *
 *     @OA\Info(
 *         version="1.0.0",
 *         title="Aftab APIs",
 *         description="Aftab Api Gateway Documentation",
 *     ),
 *
 *     @OA\Components(
 *
 *       @OA\SecurityScheme(
 *          securityScheme="Bearer",
 *          type="http",
 *            scheme="Bearer",
 *          name="Authorization",
 *          in="header"
 *        ),
 *      ),
 *
 *     @OA\Server(
 *         description="local server",
 *         url="http://localhost:8080/api"
 *     ),
 *     @OA\Server(
 *         description="Main server",
 *         url="https://api.tug.com/api"
 *     ),
 *
 * @OA\PathItem(path="/api")
 * )
 */
abstract class Controller
{
    //
}
