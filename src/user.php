<?php

class UserController
{

    /**
     * @SWG\Post(path="/user",
     *   tags={"user"},
     *   summary="Create user",
     *   description="This can only be done by the logged in user.",
     *   operationId="createUser",
     *   produces={"application/xml", "application/json"},
     *   @SWG\Parameter(
     *     in="body",
     *     name="body",
     *     description="Created user object",
     *     required=false,
     *     @SWG\Schema(ref="#/definitions/User")
     *   ),
     *   @SWG\Response(response="default", description="successful operation")
     * )
     */
    public function createUser()
    {
    }

    /**
     * @SWG\Get(path="/user/login",
     *   tags={"user"},
     *   summary="Logs user into the system",
     *   description="",
     *   operationId="loginUser",
     *   produces={"application/xml", "application/json"},
     *   @SWG\Parameter(
     *     name="username",
     *     in="query",
     *     description="The user name for login",
     *     required=false,
     *     type="string"
     *   ),
     *   @SWG\Parameter(
     *     name="password",
     *     in="query",
     *     description="The password for login in clear text",
     *     required=false,
     *     type="string"
     *   ),
     *   @SWG\Response(
     *     response=200,
     *     description="successful operation",
     *     @SWG\Schema(type="string"),
     *     @SWG\Header(
     *       header="X-Rate-Limit",
     *       type="integer",
     *       format="int32",
     *       description="calls per hour allowed by the user"
     *     ),
     *     @SWG\Header(
     *       header="X-Expires-After",
     *       type="string",
     *       format="date-time",
     *       description="date in UTC when toekn expires"
     *     )
     *   ),
     *   @SWG\Response(response=400, description="Invalid username/password supplied")
     * )
     */
    public function loginUser()
    {
    }

    /**
     * @SWG\Get(path="/user/{username}",
     *   tags={"user"},
     *   summary="Get user by user name",
     *   description="",
     *   operationId="getUserByName",
     *   produces={"application/xml", "application/json"},
     *   @SWG\Parameter(
     *     name="username",
     *     in="path",
     *     description="The name that needs to be fetched. Use user1 for testing. ",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Response(response=200, description="successful operation", @SWG\Schema(ref="#/definitions/User")),
     *   @SWG\Response(response=400, description="Invalid username supplied"),
     *   @SWG\Response(response=404, description="User not found")
     * )
     */
    public function getUserByName($username)
    {
    }

    /**
     * @SWG\Get(path="/user/{username}/followers",
     *   tags={"user"},
     *   summary="Get collections of user IDs for every user following {username}",
     *   description="",
     *   operationId="getUserFollowers",
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
     *         ref="#/definitions/User"
     *       )
     *     )
     *   ),
     *   @SWG\Response(response=400, description="Invalid username supplied"),
     *   @SWG\Response(response=404, description="User not found")
     * )
     */

    /**
     * @SWG\Get(path="/user/{username}/following",
     *   tags={"user"},
     *   summary="Get collections of user names for every users that {username} is following",
     *   description="",
     *   operationId="getUserFollowings",
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
     *         ref="#/definitions/User"
     *       )
     *     )
     *   ),
     *   @SWG\Response(response=400, description="Invalid username supplied"),
     *   @SWG\Response(response=404, description="User not found")
     * )
     */

    /**
     * @SWG\Put(path="/user/{username}",
     *   tags={"user"},
     *   summary="Updated user",
     *   description="This can only be done by the logged in user.",
     *   operationId="updateUser",
     *   produces={"application/xml", "application/json"},
     *   @SWG\Parameter(
     *     name="username",
     *     in="path",
     *     description="name that need to be deleted",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Parameter(
     *     in="body",
     *     name="body",
     *     description="Updated user object",
     *     required=false,
     *     @SWG\Schema(ref="#/definitions/User")
     *   ),
     *   @SWG\Response(response=400, description="Invalid user supplied"),
     *   @SWG\Response(response=404, description="User not found")
     * )
     */
    public function updateUser()
    {
    }

    /**
     * @SWG\Delete(path="/user/{username}",
     *   tags={"user"},
     *   summary="Delete user",
     *   description="This can only be done by the logged in user.",
     *   operationId="deleteUser",
     *   produces={"application/xml", "application/json"},
     *   @SWG\Parameter(
     *     name="username",
     *     in="path",
     *     description="The name that needs to be deleted",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Response(response=400, description="Invalid username supplied"),
     *   @SWG\Response(response=404, description="User not found")
     * )
     */
    public function deleteUser()
    {
    }

    /**
     * @SWG\Get(path="/user/{username}/feeds",
     *   tags={"user", "feeds"},
     *   summary="看 {username} 的 feeds",
     *   description="",
     *   operationId="getUserFeeds",
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
     *         ref="#/definitions/User"
     *       )
     *     )
     *   ),
     *   @SWG\Response(response=400, description="Invalid username supplied"),
     *   @SWG\Response(response=404, description="User not found")
     * )
     */

    /**
     * @SWG\Post(path="/user/{username}/feeds",
     *   tags={"user", "feeds"},
     *   summary="在 {username} 的 feeds 發佈新訊息",
     *   description="",
     *   operationId="postUserFeeds",
     *   produces={"application/xml", "application/json"},
     *   @SWG\Parameter(
     *     name="username",
     *     in="path",
     *     description="The name that needs to be fetched. Use user1 for testing. ",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Parameter(
     *     name="body",
     *     in="body",
     *     description="在 {username} 的 feed 發布的訊息內容",
     *     required=true,
     *     @SWG\Schema(ref="#/definitions/User")
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
     * @SWG\Get(path="/user/merchandise",
     *   tags={"user","merchandise"},
     *   summary="User 管理自己所有商品，包含上架中以及未上架的",
     *   description="",
     *   operationId="getUserOwnMerchandise",
     *   produces={"application/xml", "application/json"},
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
     * @SWG\Get(path="/user/{username}/merchandise",
     *   tags={"user","merchandise"},
     *   summary="查看 {username} 公開出來的商品",
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
    
}
