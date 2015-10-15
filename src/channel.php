<?php
class channelController
{
    /**
     * @SWG\Get(path="/channel/{channel_id}",
     *   tags={"channel"},
     *   summary="取得 channel 資訊",
     *   description="",
     *   operationId="getUserFeeds",
     *   produces={"application/xml", "application/json"},
     *   @SWG\Parameter(
     *     name="channel_id",
     *     in="path",
     *     description="",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Response(response=200, description="successful operation", 
     *     @SWG\Schema(
     *       type="array",
     *       @SWG\Items(
     *         ref="#/definitions/Channel"
     *       )
     *     )
     *   ),
     *   @SWG\Response(response=400, description="Invalid username supplied"),
     *   @SWG\Response(response=404, description="User not found")
     * )
     */

    /**
     * @SWG\Get(path="/channel/{channel_id}/activities",
     *   tags={"channel"},
     *   summary="看 {channel} 的 feeds",
     *   description="",
     *   operationId="getUserFeeds",
     *   produces={"application/xml", "application/json"},
     *   @SWG\Parameter(
     *     name="channel_id",
     *     in="path",
     *     description="",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Response(response=200, description="successful operation", 
     *     @SWG\Schema(
     *       type="array",
     *       @SWG\Items(
     *         ref="#/definitions/Activity"
     *       )
     *     )
     *   ),
     *   @SWG\Response(response=400, description="Invalid username supplied"),
     *   @SWG\Response(response=404, description="User not found")
     * )
     */

    /**
     * @SWG\Post(path="/channel/{channel_id}/activity",
     *   tags={"channel"},
     *   summary="在 {channel_id} 的 feeds 發佈新訊息",
     *   description="",
     *   operationId="postUserFeeds",
     *   produces={"application/xml", "application/json"},
     *   @SWG\Parameter(
     *     name="channel_id",
     *     in="path",
     *     description="",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Parameter(
     *     name="body",
     *     in="body",
     *     description="在 {channel_id} 的 feed 發布的訊息內容",
     *     required=true,
     *     @SWG\Schema(ref="#/definitions/Activity")
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
     * @SWG\Post(path="/channel/{channel_id}/activity/{activity_id}/comment",
     *   tags={"channel"},
     *   summary="對一個 activity 發表回覆",
     *   description="",
     *   operationId="postUserFeeds",
     *   produces={"application/xml", "application/json"},
     *   @SWG\Parameter(
     *     name="channel_id",
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
     * @SWG\Get(path="/channel/{channel_id}/merchandises",
     *   tags={"channel"},
     *   summary="查看 {channel_id} 公開出來的商品",
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
     * @SWG\Post(path="/channel/{channel_id}/merchandises",
     *   tags={"channel"},
     *   summary="將商品在此商店上架",
     *   description="",
     *   operationId="getBrandstoreMerchandise",
     *   produces={"application/xml", "application/json"},
     *   @SWG\Parameter(
     *     name="channel_id",
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
     * @SWG\Post(path="/channel/{channel_id}/merchandise/{merchandise_id}/placeorder",
     *   tags={"channel"},
     *   summary="購買此商品",
     *   description="",
     *   operationId="getBrandstoreMerchandise",
     *   produces={"application/xml", "application/json"},
     *   @SWG\Parameter(
     *     name="channel_id",
     *     in="path",
     *     description="",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Parameter(
     *     name="merchandise_id",
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
     *   @SWG\Response(response=200, description="successful operation")
     * )
     */

    /**
     * @SWG\Post(path="/channel/{channel_id}/merchandise/{merchandise_id}/bid",
     *   tags={"channel"},
     *   summary="下標商品(如果此 merchandise type=bid)",
     *   description="",
     *   operationId="getBrandstoreMerchandise",
     *   produces={"application/xml", "application/json"},
     *   @SWG\Parameter(
     *     name="channel_id",
     *     in="path",
     *     description="",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Parameter(
     *     name="merchandise_id",
     *     in="path",
     *     description="",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Parameter(
     *     name="body",
     *     in="body",
     *     description="出價",
     *     required=true,
     *     @SWG\Schema(type="string")
     *   ),
     *   @SWG\Response(response=200, description="successful operation")
     * )
     */

    /**
     * @SWG\Post(path="/channel/{channel_id}/merchandise/{merchandise_id}/comment",
     *   tags={"channel"},
     *   summary="回覆",
     *   description="",
     *   operationId="getBrandstoreMerchandise",
     *   produces={"application/xml", "application/json"},
     *   @SWG\Parameter(
     *     name="channel_id",
     *     in="path",
     *     description="",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Parameter(
     *     name="merchandise_id",
     *     in="path",
     *     description="",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Parameter(
     *     name="body",
     *     in="body",
     *     description="出價",
     *     required=true,
     *     @SWG\Schema(ref="#/definitions/Comment")
     *   ),
     *   @SWG\Response(response=200, description="successful operation")
     * )
     */

    /**
     * @SWG\Post(path="/channel/{channel_id}/follow",
     *   tags={"channel"},
     *   summary="follow {channel_id}",
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
     * @SWG\Post(path="/channel/{channel_id}/unfollow",
     *   tags={"channel"},
     *   summary="unfollow {channel_id}",
     *   description="",
     *   operationId="getUserFollowings",
     *   produces={"application/xml", "application/json"},
     *   @SWG\Parameter(
     *     name="channel_id",
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
     * @SWG\Get(path="/channel/{channel_id}/followers",
     *   tags={"channel"},
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
