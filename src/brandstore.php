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
     * @SWG\Get(path="/brandstore/{id}/merchandises",
     *   tags={"brandstore", "merchandise"},
     *   summary="get merchandise list from specified brand store {id} ",
     *   description="",
     *   operationId="getBrandstoreMerchandise",
     *   produces={"application/xml", "application/json"},
     *   @SWG\Parameter(
     *     name="id",
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
}
