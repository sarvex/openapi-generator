<?php

/**
 * OpenAPI Petstore
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 * PHP version 7.1.3
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 *
 * NOTE: This class is auto generated by OpenAPI-Generator
 * https://openapi-generator.tech
 * Do not edit the class manually.
 *
 * Source files are located at:
 *
 * > https://github.com/OpenAPITools/openapi-generator/blob/master/modules/openapi-generator/src/main/resources/php-laravel/
 */


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class StoreController extends Controller
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * Operation getInventory
     *
     * Returns pet inventories by status.
     *
     *
     * @return Http response
     */
    public function getInventory()
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing getInventory as a get method ?');
    }
    /**
     * Operation placeOrder
     *
     * Place an order for a pet.
     *
     *
     * @return Http response
     */
    public function placeOrder()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['body'])) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling placeOrder');
        }
        $body = $input['body'];


        return response('How about implementing placeOrder as a post method ?');
    }
    /**
     * Operation deleteOrder
     *
     * Delete purchase order by ID.
     *
     * @param string $orderId ID of the order that needs to be deleted (required)
     *
     * @return Http response
     */
    public function deleteOrder($orderId)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing deleteOrder as a delete method ?');
    }
    /**
     * Operation getOrderById
     *
     * Find purchase order by ID.
     *
     * @param int $orderId ID of pet that needs to be fetched (required)
     *
     * @return Http response
     */
    public function getOrderById($orderId)
    {
        $input = Request::all();

        //path params validation
        if ($orderId > 5) {
            throw new \InvalidArgumentException('invalid value for $orderId when calling StoreController.getOrderById, must be smaller than or equal to 5.');
        }
        if ($orderId < 1) {
            throw new \InvalidArgumentException('invalid value for $orderId when calling StoreController.getOrderById, must be bigger than or equal to 1.');
        }


        //not path params validation

        return response('How about implementing getOrderById as a get method ?');
    }
}
