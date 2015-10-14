<?php

/**
 * @SWG\Definition(@SWG\Xml(name="User"))
 */
class User
{

    /**
     * @SWG\Property(format="int64")
     * @var int
     */
    public $id;

    /**
     * @SWG\Property()
     * @var string
     */
    public $username;

    /**
     * @SWG\Property
     * @var string
     */
    public $firstName;

    /**
     * @SWG\Property()
     * @var string
     */
    public $lastName;

    /**
     * @var string
     * @SWG\Property()
     */
    public $email;

    /**
     * @var string
     * @SWG\Property()
     */
    public $password;

    /**
     * @var string
     * @SWG\Property()
     */
    public $phone;

    /**
     * User Status
     * @var int
     * @SWG\Property(format="int32")
     */
    public $userStatus;
}

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
     public function getUserFeeds() { }

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
}
