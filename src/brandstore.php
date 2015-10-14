<?php

class BrandStoreController
{
    /**
     * @SWG\Post(path="/brandstore",
     *   tags={"brandstore"},
     *   summary="Create brandstore",
     *   description="This can only be done by the logged in user.",
     *   operationId="createBrandStore",
     *   produces={"application/xml", "application/json"},
     *   @SWG\Parameter(
     *     in="body",
     *     name="body",
     *     description="Created brand storeobject",
     *     required=false,
     *     @SWG\Schema(ref="#/definitions/BrandStore")
     *   ),
     *   @SWG\Response(response="default", description="successful operation")
     * )
     */

    /**
     * @SWG\Get(path="/brandstore/{brandstore_id}/feeds",
     *   tags={"brandstore"},
     *   summary="看 {brandstore_id} 的 feeds",
     *   description="",
     *   operationId="getUserFeeds",
     *   produces={"application/xml", "application/json"},
     *   @SWG\Parameter(
     *     name="brandstore_id",
     *     in="path",
     *     description="",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Response(response=200, description="successful operation", 
     *     @SWG\Schema(
     *       type="array",
     *       @SWG\Items(
     *         ref="#/definitions/Comment"
     *       )
     *     )
     *   ),
     *   @SWG\Response(response=400, description="Invalid username supplied"),
     *   @SWG\Response(response=404, description="User not found")
     * )
     */

    /**
     * @SWG\Post(path="/brandstore/{brandstore_id}/feeds",
     *   tags={"brandstore"},
     *   summary="在 {brandstore_id} 的 feeds 發佈新訊息",
     *   description="",
     *   operationId="postUserFeeds",
     *   produces={"application/xml", "application/json"},
     *   @SWG\Parameter(
     *     name="brandstore_id",
     *     in="path",
     *     description="",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Parameter(
     *     name="body",
     *     in="body",
     *     description="在 {username} 的 feed 發布的訊息內容",
     *     required=true,
     *     @SWG\Schema(ref="#/definitions/Comment")
     *   ),
     *   @SWG\Response(response=200, description="successful operation", 
     *     @SWG\Schema(
     *       type="array",
     *       @SWG\Items(
     *         ref="#/definitions/ApiResponse"
     *       )
     *     )
     *   ),
     *   @SWG\Response(response=400, description="Invalid username supplied"),
     *   @SWG\Response(response=404, description="User not found")
     * )
     */

    /**
     * @SWG\Post(path="/brandstore/{brandstore_id}/follow",
     *   tags={"brandstore"},
     *   summary="follow {brandstore_id}",
     *   description="",
     *   operationId="getUserFollowings",
     *   produces={"application/xml", "application/json"},
     *   @SWG\Parameter(
     *     name="brandstore_id",
     *     in="path",
     *     description="",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Response(response=200, description="successful operation"),
     *   @SWG\Response(response=400, description="Invalid username supplied"),
     *   @SWG\Response(response=404, description="User not found")
     * )
     */

    /**
     * @SWG\Post(path="/brandstore/{brandstore_id}/unfollow",
     *   tags={"brandstore"},
     *   summary="unfollow {brandstore_id}",
     *   description="",
     *   operationId="getUserFollowings",
     *   produces={"application/xml", "application/json"},
     *   @SWG\Parameter(
     *     name="brandstore_id",
     *     in="path",
     *     description="",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Response(response=200, description="successful operation"),
     *   @SWG\Response(response=400, description="Invalid username supplied"),
     *   @SWG\Response(response=404, description="User not found")
     * )
     */

    /**
     * @SWG\Get(path="/brandstore/{brandstore_id}/merchandises",
     *   tags={"brandstore"},
     *   summary="取得屬於商店 {brandstore_id} 的所有商品，包含上架中以及未上架的",
     *   description="",
     *   operationId="getBrandStoreOwnMerchandise",
     *   produces={"application/xml", "application/json"},
     *   @SWG\Parameter(
     *     name="brandstore_id",
     *     in="path",
     *     description="The name that needs to be fetched. Use user1 for testing. ",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Response(response=200, description="successful operation", 
     *     @SWG\Schema(
     *       type="array",
     *       @SWG\Items(
     *         ref="#/definitions/Merchandise"
     *       )
     *     )
     *   ),
     *   @SWG\Response(response=400, description="Invalid username supplied"),
     *   @SWG\Response(response=404, description="User not found")
     * )
     */

    /**
     * @SWG\Get(path="/brandstore/{bradnstore_id}/market/merchandises",
     *   tags={"brandstore"},
     *   summary="get merchandise list from specified brand store {id} ",
     *   description="",
     *   operationId="getBrandstoreMerchandise",
     *   produces={"application/xml", "application/json"},
     *   @SWG\Parameter(
     *     name="brandstore_id",
     *     in="path",
     *     description="brandstore id",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Response(response=200, description="successful operation",
     *     @SWG\Schema(
     *       type="array",
     *       @SWG\Items(
     *         ref="#/definitions/Merchandise"
     *       )
     *     )
     *   )
     * )
     */

    /**
     * @SWG\Post(path="/brandstore/{bradnstore_id}/market/merchandises",
     *   tags={"brandstore"},
     *   summary="將商品在 brandstore 上架",
     *   description="",
     *   operationId="getBrandstoreMerchandise",
     *   produces={"application/xml", "application/json"},
     *   @SWG\Parameter(
     *     name="brandstore_id",
     *     in="path",
     *     description="brandstore id",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Parameter(
     *     name="body",
     *     in="body",
     *     description="欲上架的商品",
     *     required=true,
     *     @SWG\Schema(
     *       type="array",
     *       @SWG\Items(ref="#/definitions/Merchandise")
     *     )
     *   ),
     *   @SWG\Response(response=200, description="successful operation")
     * )
     */
}
