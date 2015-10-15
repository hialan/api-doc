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
     * @SWG\Get(path="/brandstore/{brandstore_id}",
     *   tags={"brandstore"},
     *   summary="取得 {brandstore_id} 的基本資訊",
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
     *         ref="#/definitions/BrandStore"
     *       )
     *     )
     *   ),
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
     * @SWG\Get(path="/brandstore/{brandstore_id}/orders",
     *   tags={"brandstore"},
     *   summary="取得 {brandstore_id} 的訂單清單",
     *   description="",
     *   operationId="getUserMerchandise",
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
     *         ref="#/definitions/Order"
     *       )
     *     )
     *   ),
     *   @SWG\Response(response=400, description="Invalid username supplied"),
     *   @SWG\Response(response=404, description="User not found")
     * )
     */

    /**
     * @SWG\Get(path="/brandstore/{brandstore_id}/order/{order_id}",
     *   tags={"brandstore"},
     *   summary="取得 {brandstore_id} 的訂單明細",
     *   description="",
     *   operationId="getUserMerchandise",
     *   produces={"application/xml", "application/json"},
     *   @SWG\Parameter(
     *     name="brandstore",
     *     in="path",
     *     description="",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Parameter(
     *     name="order_id",
     *     in="path",
     *     description="",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Response(response=200, description="successful operation", 
     *     @SWG\Schema(
     *       ref="#/definitions/Order"
     *     )
     *   ),
     *   @SWG\Response(response=400, description="Invalid username supplied"),
     *   @SWG\Response(response=404, description="User not found")
     * )
     */

    /**
     * @SWG\Put(path="/brandstore/{brandstore_id}/order/{order_id}",
     *   tags={"brandstore"},
     *   summary="更新訂單明細",
     *   description="",
     *   operationId="getUserMerchandise",
     *   produces={"application/xml", "application/json"},
     *   @SWG\Parameter(
     *     name="brandstore_id",
     *     in="path",
     *     description="",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Parameter(
     *     name="order_id",
     *     in="path",
     *     description="",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Parameter(
     *     name="body",
     *     in="body",
     *     description="",
     *     required=true,
     *     @SWG\Schema(ref="#/definitions/Order")
     *   ),
     *   @SWG\Response(response=200, description="successful operation"),
     *   @SWG\Response(response=400, description="Invalid username supplied"),
     *   @SWG\Response(response=404, description="User not found")
     * )
     */

    /**
     * @SWG\Post(path="/brandstore/{brandstore_id}/order/{order_id}/comment",
     *   tags={"brandstore"},
     *   summary="新增訂單留言",
     *   description="",
     *   operationId="getUserMerchandise",
     *   produces={"application/xml", "application/json"},
     *   @SWG\Parameter(
     *     name="brandstore_id",
     *     in="path",
     *     description="",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Parameter(
     *     name="order_id",
     *     in="path",
     *     description="",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Parameter(
     *     name="body",
     *     in="body",
     *     description="",
     *     required=true,
     *     ref="#/definitions/Comment"
     *   ),
     *   @SWG\Response(response=200, description="successful operation"),
     *   @SWG\Response(response=400, description="Invalid username supplied"),
     *   @SWG\Response(response=404, description="User not found")
     * )
     */
}
