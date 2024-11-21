<?php

namespace NexaMerchant\Apps\Docs\V1\Apps\Controllers;

class AppsController extends Controller
{
    /**
     * @OA\Post(
     *     path="/api/v1/apps/publish",
     *     summary="Publish an app",
     *     description="Upload a zip file and publish the app",
     *     operationId="publishApp",
     *     tags={"Apps"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="file",
     *                     type="string",
     *                     format="binary",
     *                     description="Zip file to upload"
     *                 ),
     *                 @OA\Property(
     *                     property="name",
     *                     type="string",
     *                     description="Name of the app"
     *                 ),
     *                 @OA\Property(
     *                     property="version",
     *                     type="string",
     *                     description="Version of the app"
     *                 ),
     *                 @OA\Property(
     *                     property="token",
     *                     type="string",
     *                     description="Authentication token"
     *                 ),
     *                 required={"file", "name", "version", "token"}
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="App published successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean"),
     *             @OA\Property(property="message", type="string")
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Bad request"
     *     )
     * )
     */
    public function public(){}
}