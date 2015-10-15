<?php
class marketController
{
    /**
     * @SWG\Get(path="/market/{market_id}",
     *   tags={"market"},
     *   summary="取得 market 資訊",
     *   description="",
     *   operationId="getUserFeeds",
     *   produces={"application/xml", "application/json"},
     *   @SWG\Parameter(
     *     name="market_id",
     *     in="path",
     *     description="",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Response(response=200, description="successful operation", 
     *     @SWG\Schema(
     *       type="array",
     *       @SWG\Items(
     *         ref="#/definitions/Market"
     *       )
     *     )
     *   ),
     *   @SWG\Response(response=400, description="Invalid username supplied"),
     *   @SWG\Response(response=404, description="User not found")
     * )
     */

    /**
     * @SWG\Get(path="/market/{market_id}/feeds",
     *   tags={"market"},
     *   summary="看 {market} 的 feeds",
     *   description="",
     *   operationId="getUserFeeds",
     *   produces={"application/xml", "application/json"},
     *   @SWG\Parameter(
     *     name="market_id",
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
     * @SWG\Post(path="/market/{market_id}/feeds",
     *   tags={"market"},
     *   summary="在 {market_id} 的 feeds 發佈新訊息",
     *   description="",
     *   operationId="postUserFeeds",
     *   produces={"application/xml", "application/json"},
     *   @SWG\Parameter(
     *     name="market_id",
     *     in="path",
     *     description="",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Parameter(
     *     name="body",
     *     in="body",
     *     description="在 {market_id} 的 feed 發布的訊息內容",
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
     * @SWG\Get(path="/market/{market_id}/merchandises",
     *   tags={"market"},
     *   summary="查看 {market_id} 公開出來的商品",
     *   description="",
     *   operationId="getUserMerchandise",
     *   produces={"application/xml", "application/json"},
     *   @SWG\Parameter(
     *     name="username",
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
     * @SWG\Post(path="/market/{market_id}/merchandises",
     *   tags={"market"},
     *   summary="將商品在此商店上架",
     *   description="",
     *   operationId="getBrandstoreMerchandise",
     *   produces={"application/xml", "application/json"},
     *   @SWG\Parameter(
     *     name="market_id",
     *     in="path",
     *     description="",
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

    /**
     * @SWG\Post(path="/market/{market_id}/follow",
     *   tags={"market"},
     *   summary="follow {market_id}",
     *   description="",
     *   operationId="getUserFollowings",
     *   produces={"application/xml", "application/json"},
     *   @SWG\Parameter(
     *     name="username",
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
     * @SWG\Post(path="/market/{market_id}/unfollow",
     *   tags={"market"},
     *   summary="unfollow {market_id}",
     *   description="",
     *   operationId="getUserFollowings",
     *   produces={"application/xml", "application/json"},
     *   @SWG\Parameter(
     *     name="market_id",
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
     * @SWG\Get(path="/market/{market_id}/followers",
     *   tags={"market"},
     *   summary="Get collections of user IDs for every user following {username}",
     *   description="",
     *   operationId="getUserFollowers",
     *   produces={"application/xml", "application/json"},
     *   @SWG\Parameter(
     *     name="merket_id",
     *     in="path",
     *     description="",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Response(response=200, description="successful operation", 
     *     @SWG\Schema(
     *       type="array",
     *       @SWG\Items(
     *         ref="#/definitions/User"
     *       )
     *     )
     *   ),
     *   @SWG\Response(response=400, description="Invalid username supplied"),
     *   @SWG\Response(response=404, description="User not found")
     * )
     */
}
