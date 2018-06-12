<?php

/**
 * Address
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
 * Address Class Doc Comment
 *
 * @category Class
 * @package  RoyalMail\Shipping\Rest\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Address implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'buildingName' => 'string',
        'buildingNumber' => 'string',
        'addressLine1' => 'string',
        'addressLine2' => 'string',
        'addressLine3' => 'string',
        'postTown' => 'string',
        'county' => 'string',
        'postCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'buildingName' => null,
        'buildingNumber' => null,
        'addressLine1' => null,
        'addressLine2' => null,
        'addressLine3' => null,
        'postTown' => null,
        'county' => null,
        'postCode' => null
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
        'buildingName' => 'buildingName',
        'buildingNumber' => 'buildingNumber',
        'addressLine1' => 'addressLine1',
        'addressLine2' => 'addressLine2',
        'addressLine3' => 'addressLine3',
        'postTown' => 'postTown',
        'county' => 'county',
        'postCode' => 'postCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'buildingName' => 'setBuildingName',
        'buildingNumber' => 'setBuildingNumber',
        'addressLine1' => 'setAddressLine1',
        'addressLine2' => 'setAddressLine2',
        'addressLine3' => 'setAddressLine3',
        'postTown' => 'setPostTown',
        'county' => 'setCounty',
        'postCode' => 'setPostCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'buildingName' => 'getBuildingName',
        'buildingNumber' => 'getBuildingNumber',
        'addressLine1' => 'getAddressLine1',
        'addressLine2' => 'getAddressLine2',
        'addressLine3' => 'getAddressLine3',
        'postTown' => 'getPostTown',
        'county' => 'getCounty',
        'postCode' => 'getPostCode'
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
        $this->container['buildingName'] = isset($data['buildingName']) ? $data['buildingName'] : null;
        $this->container['buildingNumber'] = isset($data['buildingNumber']) ? $data['buildingNumber'] : null;
        $this->container['addressLine1'] = isset($data['addressLine1']) ? $data['addressLine1'] : null;
        $this->container['addressLine2'] = isset($data['addressLine2']) ? $data['addressLine2'] : null;
        $this->container['addressLine3'] = isset($data['addressLine3']) ? $data['addressLine3'] : null;
        $this->container['postTown'] = isset($data['postTown']) ? $data['postTown'] : null;
        $this->container['county'] = isset($data['county']) ? $data['county'] : null;
        $this->container['postCode'] = isset($data['postCode']) ? $data['postCode'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['addressLine1'] === null) {
            $invalidProperties[] = "'addressLine1' can't be null";
        }
        if ($this->container['postTown'] === null) {
            $invalidProperties[] = "'postTown' can't be null";
        }
        if ($this->container['county'] === null) {
            $invalidProperties[] = "'county' can't be null";
        }
        if ($this->container['postCode'] === null) {
            $invalidProperties[] = "'postCode' can't be null";
        }
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

        if ($this->container['addressLine1'] === null) {
            return false;
        }
        if ($this->container['postTown'] === null) {
            return false;
        }
        if ($this->container['county'] === null) {
            return false;
        }
        if ($this->container['postCode'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets buildingName
     *
     * @return string
     */
    public function getBuildingName()
    {
        return $this->container['buildingName'];
    }

    /**
     * Sets buildingName
     *
     * @param string $buildingName This field will be used if supplied but is not necessary to process a shipment. It does not replace the need for a full addressLine1 input.
     *
     * @return $this
     */
    public function setBuildingName($buildingName)
    {
        $this->container['buildingName'] = $buildingName;

        return $this;
    }

    /**
     * Gets buildingNumber
     *
     * @return string
     */
    public function getBuildingNumber()
    {
        return $this->container['buildingNumber'];
    }

    /**
     * Sets buildingNumber
     *
     * @param string $buildingNumber This field will be used if supplied but is not necessary to process a shipment. It does not replace the need for a full addressLine1 input.
     *
     * @return $this
     */
    public function setBuildingNumber($buildingNumber)
    {
        $this->container['buildingNumber'] = $buildingNumber;

        return $this;
    }

    /**
     * Gets addressLine1
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->container['addressLine1'];
    }

    /**
     * Sets addressLine1
     *
     * @param string $addressLine1 First line of the address.
     *
     * @return $this
     */
    public function setAddressLine1($addressLine1)
    {
        $this->container['addressLine1'] = $addressLine1;

        return $this;
    }

    /**
     * Gets addressLine2
     *
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->container['addressLine2'];
    }

    /**
     * Sets addressLine2
     *
     * @param string $addressLine2 Second line of the address
     *
     * @return $this
     */
    public function setAddressLine2($addressLine2)
    {
        $this->container['addressLine2'] = $addressLine2;

        return $this;
    }

    /**
     * Gets addressLine3
     *
     * @return string
     */
    public function getAddressLine3()
    {
        return $this->container['addressLine3'];
    }

    /**
     * Sets addressLine3
     *
     * @param string $addressLine3 Third line of the address
     *
     * @return $this
     */
    public function setAddressLine3($addressLine3)
    {
        $this->container['addressLine3'] = $addressLine3;

        return $this;
    }

    /**
     * Gets postTown
     *
     * @return string
     */
    public function getPostTown()
    {
        return $this->container['postTown'];
    }

    /**
     * Sets postTown
     *
     * @param string $postTown Town or City. The postTown will be updated to match the postTown resolved postcode.
     *
     * @return $this
     */
    public function setPostTown($postTown)
    {
        $this->container['postTown'] = $postTown;

        return $this;
    }

    /**
     * Gets county
     *
     * @return string
     */
    public function getCounty()
    {
        return $this->container['county'];
    }

    /**
     * Sets county
     *
     * @param string $county County of address
     *
     * @return $this
     */
    public function setCounty($county)
    {
        $this->container['county'] = $county;

        return $this;
    }

    /**
     * Gets postCode
     *
     * @return string
     */
    public function getPostCode()
    {
        return $this->container['postCode'];
    }

    /**
     * Sets postCode
     *
     * @param string $postCode Mandatory for UK addresses. If the Shipment Type is “Return” then this must match the postcode of the registered return address.
     *
     * @return $this
     */
    public function setPostCode($postCode)
    {
        $this->container['postCode'] = $postCode;

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


