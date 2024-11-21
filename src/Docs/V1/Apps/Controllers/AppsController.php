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

    /**
     * @OA\Post(
     *     path="/api/v1/apps",
     *     summary="Create an app",
     *     description="Create an app",
     *     operationId="createApp",
     *     tags={"Apps"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="name", type="string"),
     *             @OA\Property(property="version", type="string"),
     *             @OA\Property(property="token", type="string"),
     *             @OA\Property(property="status", type="string"),
     *             @OA\Property(property="description", type="string"),
     *             @OA\Property(property="author", type="string"),
     *             @OA\Property(property="email", type="string"),
     *             @OA\Property(property="url", type="string"),
     *             @OA\Property(property="category", type="string"),
     *             @OA\Property(property="tags", type="string"),
     *             @OA\Property(property="price", type="number")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="App created successfully",
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
    public function createApp(){}


    /**
     * @OA\Get(
     *     path="/api/v1/apps/search",
     *     summary="Search apps",
     *     description="Search apps by name, author, category, tags, etc.",
     *     operationId="searchApps",
     *     tags={"Apps"},
     *     @OA\Parameter(
     *         name="q",
     *         in="query",
     *         description="Search query",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="List of apps",
     *         @OA\JsonContent(
     *             @OA\Property(property="apps", type="array", @OA\Items(type="object"))
     *         )
     *     )
     * )
     */
    public function search(){}

    /**
     * @OA\Get(
     *     path="/api/v1/apps/categories",
     *     summary="Get all categories",
     *     description="Get a list of all categories",
     *     operationId="getCategories",
     *     tags={"Apps"},
     *     @OA\Response(
     *         response=200,
     *         description="List of categories",
     *         @OA\JsonContent(
     *             @OA\Property(property="categories", type="array", @OA\Items(type="object"))
     *         )
     *     )
     * )
     */
    public function category(){}

    /**
     * @OA\Get(
     *     path="/api/v1/apps/types",
     *     summary="Get all types",
     *     description="Get a list of all types",
     *     operationId="getTypes",
     *     tags={"Apps"},
     *     @OA\Response(
     *         response=200,
     *         description="List of types",
     *         @OA\JsonContent(
     *             @OA\Property(property="types", type="array", @OA\Items(type="object"))
     *         )
     *     )
     * )
     */
    public function types(){}

    /**
     * @OA\Get(
     *     path="/api/v1/apps",
     *     summary="Get all apps",
     *     description="Get a list of all apps",
     *     operationId="getApps",
     *     tags={"Apps"},
     *     @OA\Response(
     *         response=200,
     *         description="List of apps",
     *         @OA\JsonContent(
     *             @OA\Property(property="apps", type="array", @OA\Items(type="object"))
     *         )
     *     )
     * )
     */
    public function getApps(){}

    /**
     * @OA\Get(
     *     path="/api/v1/apps/{id}",
     *     summary="Get an app",
     *     description="Get an app by ID",
     *     operationId="getApp",
     *     tags={"Apps"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="App details",
     *         @OA\JsonContent(
     *             @OA\Property(property="app", type="object")
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="App not found"
     *     )
     * )
     */
    public function getApp($id){}

    /**
     * @OA\Put(
     *     path="/api/v1/apps/{id}",
     *     summary="Update an app",
     *     description="Update an app by ID",
     *     operationId="updateApp",
     *     tags={"Apps"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="name", type="string"),
     *             @OA\Property(property="version", type="string"),
     *             @OA\Property(property="token", type="string"),
     *             @OA\Property(property="status", type="string"),
     *             @OA\Property(property="description", type="string"),
     *             @OA\Property(property="author", type="string"),
     *             @OA\Property(property="email", type="string"),
     *             @OA\Property(property="url", type="string"),
     *             @OA\Property(property="category", type="string"),
     *             @OA\Property(property="tags", type="string"),
     *             @OA\Property(property="price", type="number")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="App updated successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean"),
     *             @OA\Property(property="message", type="string")
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Bad request"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="App not found"
     *     )
     * )
     */
    public function updateApp($id){}

    /**
     * @OA\Delete(
     *     path="/api/v1/apps/{id}",
     *     summary="Delete an app",
     *     description="Delete an app by ID",
     *     operationId="deleteApp",
     *     tags={"Apps"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="App deleted successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean"),
     *             @OA\Property(property="message", type="string")
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="App not found"
     *     )
     * )
     */
    public function deleteApp($id){}

    /**
     * @OA\Get(
     *     path="/api/v1/apps/{id}/versions",
     *     summary="Get all versions of an app",
     *     description="Get a list of all versions of an app by ID",
     *     operationId="getAppVersions",
     *     tags={"Apps"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="List of app versions",
     *         @OA\JsonContent(
     *             @OA\Property(property="versions", type="array", @OA\Items(type="object"))
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="App not found"
     *     )
     * )
     */
    public function getAppVersions($id){}

    /**
     * @OA\Get(
     *     path="/api/v1/apps/{id}/versions/{version}",
     *     summary="Get a version of an app",
     *     description="Get a version of an app by ID and version",
     *     operationId="getAppVersion",
     *     tags={"Apps"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="version",
     *         in="path",
     *         description="Version of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="App version details",
     *         @OA\JsonContent(
     *             @OA\Property(property="version", type="object")
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="App version not found"
     *     )
     * )
     */
    public function getAppVersion($id, $version){}

    /**
     * @OA\Put(
     *     path="/api/v1/apps/{id}/versions/{version}",
     *     summary="Update a version of an app",
     *     description="Update a version of an app by ID and version",
     *     operationId="updateAppVersion",
     *     tags={"Apps"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="version",
     *         in="path",
     *         description="Version of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="description", type="string"),
     *             @OA\Property(property="status", type="string")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="App version updated successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean"),
     *             @OA\Property(property="message", type="string")
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Bad request"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="App version not found"
     *     )
     * )
     */
    public function updateAppVersion($id, $version){}

    /**
     * @OA\Delete(
     *     path="/api/v1/apps/{id}/versions/{version}",
     *     summary="Delete a version of an app",
     *     description="Delete a version of an app by ID and version",
     *     operationId="deleteAppVersion",
     *     tags={"Apps"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="version",
     *         in="path",
     *         description="Version of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="App version deleted successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean"),
     *             @OA\Property(property="message", type="string")
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="App version not found"
     *     )
     * )
     */
    public function deleteAppVersion($id, $version){}

    /**
     * @OA\Get(
     *     path="/api/v1/apps/{id}/versions/{version}/download",
     *     summary="Download a version of an app",
     *     description="Download a version of an app by ID and version",
     *     operationId="downloadAppVersion",
     *     tags={"Apps"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="version",
     *         in="path",
     *         description="Version of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="App version downloaded successfully"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="App version not found"
     *     )
     * )
     */
    public function downloadAppVersion($id, $version){}

    /**
     * @OA\Get(
     *     path="/api/v1/apps/{id}/versions/{version}/install",
     *     summary="Install a version of an app",
     *     description="Install a version of an app by ID and version",
     *     operationId="installAppVersion",
     *     tags={"Apps"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="version",
     *         in="path",
     *         description="Version of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="App version installed successfully"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="App version not found"
     *     )
     * )
     */
    public function installAppVersion($id, $version){}

    /**
     * @OA\Get(
     *     path="/api/v1/apps/{id}/versions/{version}/uninstall",
     *     summary="Uninstall a version of an app",
     *     description="Uninstall a version of an app by ID and version",
     *     operationId="uninstallAppVersion",
     *     tags={"Apps"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="version",
     *         in="path",
     *         description="Version of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="App version uninstalled successfully"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="App version not found"
     *     )
     * )
     */
    public function uninstallAppVersion($id, $version){}

    /**
     * @OA\Get(
     *     path="/api/v1/apps/{id}/versions/{version}/activate",
     *     summary="Activate a version of an app",
     *     description="Activate a version of an app by ID and version",
     *     operationId="activateAppVersion",
     *     tags={"Apps"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="version",
     *         in="path",
     *         description="Version of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="App version activated successfully"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="App version not found"
     *     )
     * )
     */
    public function activateAppVersion($id, $version){}

    /**
     * @OA\Get(
     *     path="/api/v1/apps/{id}/versions/{version}/deactivate",
     *     summary="Deactivate a version of an app",
     *     description="Deactivate a version of an app by ID and version",
     *     operationId="deactivateAppVersion",
     *     tags={"Apps"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="version",
     *         in="path",
     *         description="Version of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="App version deactivated successfully"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="App version not found"
     *     )
     * )
     */
    public function deactivateAppVersion($id, $version){}

    /**
     * @OA\Get(
     *     path="/api/v1/apps/{id}/versions/{version}/upgrade",
     *     summary="Upgrade a version of an app",
     *     description="Upgrade a version of an app by ID and version",
     *     operationId="upgradeAppVersion",
     *     tags={"Apps"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="version",
     *         in="path",
     *         description="Version of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="App version upgraded successfully"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="App version not found"
     *     )
     * )
     */
    public function upgradeAppVersion($id, $version){}

    /**
     * @OA\Get(
     *     path="/api/v1/apps/{id}/versions/{version}/downgrade",
     *     summary="Downgrade a version of an app",
     *     description="Downgrade a version of an app by ID and version",
     *     operationId="downgradeAppVersion",
     *     tags={"Apps"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="version",
     *         in="path",
     *         description="Version of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="App version downgraded successfully"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="App version not found"
     *     )
     * )
     */
    public function downgradeAppVersion($id, $version){}

    /**
     * @OA\Get(
     *     path="/api/v1/apps/{id}/versions/{version}/rollback",
     *     summary="Rollback a version of an app",
     *     description="Rollback a version of an app by ID and version",
     *     operationId="rollbackAppVersion",
     *     tags={"Apps"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="version",
     *         in="path",
     *         description="Version of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="App version rolled back successfully"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="App version not found"
     *     )
     * )
     */
    public function rollbackAppVersion($id, $version){}

    /**
     * @OA\Get(
     *     path="/api/v1/apps/{id}/versions/{version}/publish",
     *     summary="Publish a version of an app",
     *     description="Publish a version of an app by ID and version",
     *     operationId="publishAppVersion",
     *     tags={"Apps"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="version",
     *         in="path",
     *         description="Version of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="App version published successfully"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="App version not found"
     *     )
     * )
     */
    public function publishAppVersion($id, $version){}

    /**
     * @OA\Get(
     *     path="/api/v1/apps/{id}/versions/{version}/unpublish",
     *     summary="Unpublish a version of an app",
     *     description="Unpublish a version of an app by ID and version",
     *     operationId="unpublishAppVersion",
     *     tags={"Apps"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="version",
     *         in="path",
     *         description="Version of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="App version unpublished successfully"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="App version not found"
     *     )
     * )
     */
    public function unpublishAppVersion($id, $version){}

    /**
     * @OA\Get(
     *     path="/api/v1/apps/{id}/versions/{version}/approve",
     *     summary="Approve a version of an app",
     *     description="Approve a version of an app by ID and version",
     *     operationId="approveAppVersion",
     *     tags={"Apps"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="version",
     *         in="path",
     *         description="Version of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="App version approved successfully"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="App version not found"
     *     )
     * )
     */
    public function approveAppVersion($id, $version){}

    /**
     * @OA\Get(
     *     path="/api/v1/apps/{id}/versions/{version}/reject",
     *     summary="Reject a version of an app",
     *     description="Reject a version of an app by ID and version",
     *     operationId="rejectAppVersion",
     *     tags={"Apps"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="version",
     *         in="path",
     *         description="Version of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="App version rejected successfully"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="App version not found"
     *     )
     * )
     */
    public function rejectAppVersion($id, $version){}

    /**
     * @OA\Get(
     *     path="/api/v1/apps/{id}/versions/{version}/suspend",
     *     summary="Suspend a version of an app",
     *     description="Suspend a version of an app by ID and version",
     *     operationId="suspendAppVersion",
     *     tags={"Apps"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="version",
     *         in="path",
     *         description="Version of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="App version suspended successfully"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="App version not found"
     *     )
     * )
     */
    public function suspendAppVersion($id, $version){}

    /**
     * @OA\Get(
     *     path="/api/v1/apps/{id}/versions/{version}/unsuspend",
     *     summary="Unsuspend a version of an app",
     *     description="Unsuspend a version of an app by ID and version",
     *     operationId="unsuspendAppVersion",
     *     tags={"Apps"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="version",
     *         in="path",
     *         description="Version of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="App version unsuspended successfully"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="App version not found"
     *     )
     * )
     */
    public function unsuspendAppVersion($id, $version){}

    /**
     * @OA\Get(
     *     path="/api/v1/apps/{id}/versions/{version}/enable",
     *     summary="Enable a version of an app",
     *     description="Enable a version of an app by ID and version",
     *     operationId="enableAppVersion",
     *     tags={"Apps"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="version",
     *         in="path",
     *         description="Version of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="App version enabled successfully"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="App version not found"
     *     )
     * )
     */
    public function enableAppVersion($id, $version){}

    /**
     * @OA\Get(
     *     path="/api/v1/apps/{id}/versions/{version}/disable",
     *     summary="Disable a version of an app",
     *     description="Disable a version of an app by ID and version",
     *     operationId="disableAppVersion",
     *     tags={"Apps"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="version",
     *         in="path",
     *         description="Version of the app",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="App version disabled successfully"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="App version not found"
     *     )
     * )
     */
    public function disableAppVersion($id, $version){}
}