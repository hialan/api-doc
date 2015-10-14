<?php

/**
 * @SWG\Definition(@SWG\Xml(name="Contact"))
 */
class Contact
{

    /**
     * @SWG\Property()
     * @var string
     */
    public $name;

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
}

/**
 * @SWG\Definition(@SWG\Xml(name="BrandStore"))
 */
class BrandStore
{

    /**
     * @SWG\Property(type="integer",format="int64")
     */
    public $id;

    /**
     * @SWG\Property(type="string")
     */
    public $name;

    /**
     * @SWG\Property(ref="#/definitions/Contact")
     */
    public $contact;

    /**
     * BrandStore status
     * @SWG\Property(type="integer",format="int32")
     */
    public $status;
}

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


}
