<?php

namespace App\Swagger\Api\V1;

interface VehicleController
{
    /**
     * @OA\Get(
     *     path="/v1/vehicles",
     *     summary="get vehicle list",
     *     description="",
     *     operationId="v1.vehicles",
     *     tags={"Vehicle"},
     *     security={ {"Bearer": {} }},
     *
     *     @OA\Response(
     *         response=500,
     *         description="Internal server error",
     *
     *         @OA\JsonContent(
     *
     *             @OA\Property(property="message", type="string", example="Sorry, internal server error. Please try again")
     *         )
     *     ),
     *
     *     @OA\Response(
     *         response=401,
     *         description="Unauthorized",
     *
     *         @OA\JsonContent(
     *
     *             @OA\Property(property="message", type="string", example="You are not authorized!")
     *         )
     *     ),
     *
     *     @OA\Response(
     *         response=200,
     *         description="Success",
     *
     *       @OA\MediaType(
     *          mediaType="application/json",
     *
     *          @OA\Schema(
     *
     *               @OA\Property(
     *                      property="message",
     *                      type="string",
     *                      description="response message",
     *               ),
     *               @OA\Property(
     *                      property="data",
     *                      type="object",
     *                      description="response data",
     *                          @OA\Property(property="id",type="integer", default="345"),
     *                          @OA\Property(property="plateNumber",type="string"),
     *                          @OA\Property(property="brand",type="string"),
     *                          @OA\Property(property="model",type="string"),
     *                          @OA\Property(property="year",type="string"),
     *                          @OA\Property(property="createdAt",type="string", default="2023-11-19T18:01:19.000000Z"),
     *
     *                      example={{
     *                                  "id": 94,
     *                                   "plateNumber": "jvhdfj-5679833549",
     *                                   "brand": "MyCar",
     *                                   "model": "Porche",
     *                                   "year": 2003,
     *                                   "createdAt": "2025-03-18T15:15:35.000000Z"
     *                                }},
     *               ),
     *          ),
     * ),
     *
     *  )
     *
     *
     *     )
     * )
     */
    public function index();

    /**
     * @OA\Post(
     *     path="/v1/vehicles",
     *     summary="store vehicle data",
     *     description="",
     *     operationId="vehicle.save",
     *     tags={"Vehicle"},
     *     security={ {"Bearer": {} }},
     *
     *    @OA\RequestBody(
     *
     *          @OA\MediaType(
     *              mediaType="application/json",
     *
     *              @OA\Schema(
     *
     *                  @OA\Property(property="plateNumber",description="vehicle plate number",type="string", example="John"),
     *                  @OA\Property(property="brand",type="string", example="Porche"),
     *                  @OA\Property(property="model",type="string", example="Porche"),
     *                  @OA\Property(property="year",type="integre", example="2012"),
     *              )
     *          )
     * ),
     *
     *     @OA\Response(
     *         response=500,
     *         description="Internal server error",
     *
     *         @OA\JsonContent(
     *
     *             @OA\Property(property="message", type="string", example="Sorry, internal server error. Please try again")
     *         )
     *     ),
     *
     *     @OA\Response(
     *         response=401,
     *         description="Unauthorized",
     *
     *         @OA\JsonContent(
     *
     *             @OA\Property(property="message", type="string", example="You are not authorized!")
     *         )
     *     ),
     *
     *     @OA\Response(
     *         response=200,
     *         description="Success",
     *
     *       @OA\MediaType(
     *          mediaType="application/json",
     *
     *          @OA\Schema(
     *
     *               @OA\Property(
     *                      property="message",
     *                      type="string",
     *                      description="response message",
     *               ),
     *               @OA\Property(
     *                      property="data",
     *                      type="object",
     *                      description="response data",
     *                          @OA\Property(property="plateNumber",description="vehicle plate number",type="string", example="John"),
     *                          @OA\Property(property="brand",type="string", example="Porche"),
     *                          @OA\Property(property="model",type="string", example="Porche"),
     *                          @OA\Property(property="year",type="integre", example="2012"),
     *               ),
     *          ),
     * ),
     *
     *  )
     *
     *
     *     )
     * )
     */
    public function store();
}
