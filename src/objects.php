<?php

/**
 * @SWG\Definition(@SWG\Xml(name="User"))
 */
class User
{
    /**
     * @SWG\Property(type="string")
     */
    public $id;

    /**
     * @SWG\Property(type="string")
     */
    public $username;

    /**
     * User Status
     * @var int
     * @SWG\Property(format="int32")
     */
    public $status;

    /**
     * @SWG\Property
     * @var string
     */
    public $first_name;

    /**
     * @SWG\Property()
     * @var string
     */
    public $last_name;

    /**
     * @var string
     * @SWG\Property()
     */
    public $email;

    /**
     * @var string
     * @SWG\Property()
     */
    public $phone;

    /**
     * @SWG\Property(type="string")
     */
    public $picture;

    /**
     * @SWG\Property(type="string")
     */
    public $channel_id;

    /**
     * @SWG\Property(type="string",format="date-time")
     */
    public $created_time;
}

/**
 * @SWG\Definition(@SWG\Xml(name="BrandStore"))
 */
class BrandStore
{

    /**
     * @SWG\Property(type="string")
     */
    public $id;

    /**
     * @SWG\Property(type="string")
     */
    public $name;

    /**
     * BrandStore status
     * @SWG\Property(type="integer",format="int32")
     */
    public $status;

    /**
     * BrandStore follower_count
     * @SWG\Property(type="integer",format="int32")
     */
    public $follower_count;

    /**
     * @SWG\Property(type="string")
     */
    public $email;

    /**
     * @SWG\Property(type="string")
     */
    public $phone;

    /**
     * @SWG\Property(type="string")
     */
    public $channel_id;
}

/**
 * @SWG\Definition(@SWG\Xml(name="Comment"))
 */
class Comment
{
    /**
     * BrandStore status
     * @SWG\Property(type="integer",format="int32")
     */
    public $id;

    /**
     * @SWG\Property(type="string")
     */
    public $user_id; 

    /**
     * @SWG\Property(type="string")
     */
    public $message;

    /**
     * message create time
     * @SWG\Property(type="string",format="date-time")
     */
    public $created_time;

}

/**
 * @SWG\Definition(@SWG\Xml(name="Activity"))
 */
class Activity
{
    /**
     * @SWG\Property(type="integer",format="int64")
     */
    public $id;

    /**
     * @SWG\Property(type="string")
     */
    public $message;

    /**
     * @SWG\Property(type="string",enum={"url","merchandise","activity"})
     */
    public $share_type;

    /**
     * @SWG\Property(type="string")
     */
    public $share_data;

    /**
     * replies of the comment
     * @SWG\Property(type="array",@SWG\Items(ref="#/definitions/Comment"))
     */
    public $comments;

    /**
     * message create time
     * @SWG\Property(type="string",format="date-time")
     */
    public $created_time;
}

/**
 * @SWG\Definition(@SWG\Xml(name="Merchandise"))
 */
class Merchandise
{

    /**
     * @SWG\Property(type="integer",format="int64")
     */
    public $id;

    /**
     * @SWG\Property(
     *   type="string",
     *   enum={"online","offline"}
     * )
     */
    public $status;

    /**
     * @SWG\Property(
     *   type="string",
     *   enum={"user","brandstore"}
     * )
     */
    public $owner_type; 

    /**
     * @SWG\Property(type="string")
     */
    public $owner_id;

    /**
     * product name
     * 
     * @SWG\Property(type="string")
     */
    public $name; 

    /**
     * product description
     * 
     * @SWG\Property(type="string")
     */
    public $description;

    /**
     * Initial price, for bid
     * 
     * @SWG\Property(type="string")
     */
    public $initial_price;

    /**
     * Initial price, for bid
     * 
     * @SWG\Property(type="string")
     */
    public $buynow_price;

    /**
     * currency, follow ISO 4217
     * https://en.wikipedia.org/wiki/ISO_4217
     * 
     * @SWG\Property(type="string")
     */
    public $currency;

    /**
     * quantity
     * 
     * @SWG\Property(type="integer")
     */
    public $quantity;

    /**
     * comments belongs to the merchandise
     * 
     * @SWG\Property(type="array",@SWG\Items(ref="#/definitions/Comment"))
     */
    public $comments;
}

/**
 * @SWG\Definition(@SWG\Xml(name="Order"))
 */
class Order
{

    /**
     * @SWG\Property(type="integer",format="int64")
     */
    public $id;

    /**
     * @SWG\Property(
     *   type="string",
     *   enum={"open","closed"}
     * )
     */
    public $status;

    /**
     * @SWG\Property(
     *   type="string",
     *   enum={"user","brandstore"}
     * )
     */
    public $seller_type;

    /**
     * @SWG\Property(type="string")
     */
    public $seller_id;

    /**
     * @SWG\Property(type="string")
     */
    public $buyer_id;

    /**
     * @SWG\Property(type="string")
     */
    public $merchandise_id;

    /**
     * @SWG\Property(type="string")
     */
    public $checkout_price;

    /**
     * @SWG\Property(type="string")
     */
    public $currency;

    /**
     * replies of the comment
     * @SWG\Property(type="array",@SWG\Items(ref="#/definitions/Comment"))
     */
    public $comments;

    /**
     * @SWG\Property(type="string",format="date-time")
     */
    public $created_time;

    /**
     * @SWG\Property(type="string",format="date-time")
     */
    public $closed_time;
}

/**
 * @SWG\Definition(@SWG\Xml(name="Channel"))
 */
class Channel
{

    /**
     * @SWG\Property(type="string")
     */
    public $id;

    /**
     * channel name
     * @SWG\Property(type="string")
     */
    public $name;
    /**
     * @SWG\Property(type="string",format="date-time")
     */
    public $closed_time;
}
