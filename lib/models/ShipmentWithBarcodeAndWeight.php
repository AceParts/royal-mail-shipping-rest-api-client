<?php

/**
 * ShipmentWithBarcodeAndWeight
 *
 * PHP version 5
 *
 * @category Class
 * @package  RoyalMail\Shipping\Rest\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Royal Mail Pro Shipping V2 REST API
 *
 * This API specification details the requirements for integrating with Royal Mail Pro Shipping V2 REST API. It specifically covers how the Royal Mail Pro Shipping API can be used by business customers to conduct shipping activity with Royal Mail and provides the technical information to build this integration. This specification must be used with the relevant accompanying specifications for customers wishing to interface their systems with Royal Mail services.  Royal Mail Pro Shipping API exposes a fully RESTful service that allows account customers to create shipments, produce labels, and produce documentation for all the tasks required to ship domestic items with Royal Mail. Built on industry standards, Royal Mail Pro Shipping V2 API provides a simple and low cost method for customers to integrate with Royal Mail, and allows them to get shipping quickly.  There are no costs to customers for using the Royal Mail Pro Shipping V2 API services, however customers’ own development costs must be covered by the customer developing the solution. Royal Mail will not accept any responsibility for these development, implementation and testing costs. Customers should address initial enquiries regarding development of systems for these purposes to their account handler.
 *
 * OpenAPI spec version: 1.0.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace RoyalMail\Shipping\Rest\Api\models;

use \ArrayAccess;
use \RoyalMail\Shipping\Rest\Api\ObjectSerializer;

/**
 * ShipmentWithBarcodeAndWeight Class Doc Comment
 *
 * @category Class
 * @package  RoyalMail\Shipping\Rest\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentWithBarcodeAndWeight implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'shipmentWithBarcodeAndWeight';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shipmentItems' => '\RoyalMail\Shipping\Rest\Api\models\ShipmentBarcodeItems',
        'weight' => '\RoyalMail\Shipping\Rest\Api\models\Measurement'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shipmentItems' => null,
        'weight' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'shipmentItems' => 'shipmentItems',
        'weight' => 'weight'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipmentItems' => 'setShipmentItems',
        'weight' => 'setWeight'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipmentItems' => 'getShipmentItems',
        'weight' => 'getWeight'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['shipmentItems'] = isset($data['shipmentItems']) ? $data['shipmentItems'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets shipmentItems
     *
     * @return \RoyalMail\Shipping\Rest\Api\models\ShipmentBarcodeItems
     */
    public function getShipmentItems()
    {
        return $this->container['shipmentItems'];
    }

    /**
     * Sets shipmentItems
     *
     * @param \RoyalMail\Shipping\Rest\Api\models\ShipmentBarcodeItems $shipmentItems shipmentItems
     *
     * @return $this
     */
    public function setShipmentItems($shipmentItems)
    {
        $this->container['shipmentItems'] = $shipmentItems;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return \RoyalMail\Shipping\Rest\Api\models\Measurement
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param \RoyalMail\Shipping\Rest\Api\models\Measurement $weight weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


