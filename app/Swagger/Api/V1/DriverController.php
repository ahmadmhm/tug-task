<?php

namespace App\Swagger\Api\V1;

interface DriverController
{
    /**
     * @OA\Get(
     *     path="/v1/drivers",
     *     summary="get driver list",
     *     description="",
     *     operationId="v1.drivers",
     *     tags={"driver"},
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
     *                          @OA\Property(property="name",type="string"),
     *                          @OA\Property(property="licenseNumber",type="string"),
     *                          @OA\Property(property="phoneNumber",type="string"),
     *                          @OA\Property(property="createdAt",type="string", default="2023-11-19T18:01:19.000000Z"),
     *
     *                      example={{
     *                                  "id": 94,
     *                                   "name": "Ali Alison",
     *                                   "licenseNumber": "jfh37465346",
     *                                   "phoneNumber": "345 - 8737453",
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
     *     path="/v1/drivers",
     *     summary="store driver data",
     *     description="",
     *     operationId="driver.save",
     *     tags={"driver"},
     *     security={ {"Bearer": {} }},
     *
     *    @OA\RequestBody(
     *
     *          @OA\MediaType(
     *              mediaType="application/json",
     *
     *              @OA\Schema(
     *
     *                  @OA\Property(property="name",description="driver name",type="string", example="John"),
     *                  @OA\Property(property="licenseNumber",type="string", example="YHY643857"),
     *                  @OA\Property(property="phoneNumber",type="string", example="98764527623"),
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
     *                          @OA\Property(property="name",description="driver name",type="string", example="John"),
     *                          @OA\Property(property="licenseNumber",type="string", example="YHY643857"),
     *                          @OA\Property(property="phoneNumber",type="string", example="98764527623"),
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
