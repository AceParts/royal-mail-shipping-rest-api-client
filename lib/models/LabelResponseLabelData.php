<?php

/**
 * LabelResponseLabelData
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
 * LabelResponseLabelData Class Doc Comment
 *
 * @category Class
 * @description Label details.
 * @package  RoyalMail\Shipping\Rest\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LabelResponseLabelData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'labelResponse_labelData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'upuCode' => 'string',
        'informationTypeID' => 'string',
        'versionID' => 'string',
        'format' => 'string',
        'mailType' => 'string',
        'itemID' => 'string',
        'checkDigit' => 'string',
        'itemWeight' => 'string',
        'weightType' => 'string',
        'product' => 'string',
        'trackingNumber' => 'string',
        'destinationPostcodeDPS' => 'string',
        'returnToSenderPostcode' => 'string',
        'requiredAtDelivery' => 'string',
        'buildingNumber' => 'string',
        'buildingName' => 'string',
        'dateOfShipment' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'upuCode' => null,
        'informationTypeID' => null,
        'versionID' => null,
        'format' => null,
        'mailType' => null,
        'itemID' => null,
        'checkDigit' => null,
        'itemWeight' => null,
        'weightType' => null,
        'product' => null,
        'trackingNumber' => null,
        'destinationPostcodeDPS' => null,
        'returnToSenderPostcode' => null,
        'requiredAtDelivery' => null,
        'buildingNumber' => null,
        'buildingName' => null,
        'dateOfShipment' => null
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
        'upuCode' => 'upuCode',
        'informationTypeID' => 'informationTypeID',
        'versionID' => 'versionID',
        'format' => 'format',
        'mailType' => 'mailType',
        'itemID' => 'itemID',
        'checkDigit' => 'checkDigit',
        'itemWeight' => 'itemWeight',
        'weightType' => 'weightType',
        'product' => 'product',
        'trackingNumber' => 'trackingNumber',
        'destinationPostcodeDPS' => 'destinationPostcodeDPS',
        'returnToSenderPostcode' => 'returnToSenderPostcode',
        'requiredAtDelivery' => 'requiredAtDelivery',
        'buildingNumber' => 'buildingNumber',
        'buildingName' => 'buildingName',
        'dateOfShipment' => 'dateOfShipment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'upuCode' => 'setUpuCode',
        'informationTypeID' => 'setInformationTypeID',
        'versionID' => 'setVersionID',
        'format' => 'setFormat',
        'mailType' => 'setMailType',
        'itemID' => 'setItemID',
        'checkDigit' => 'setCheckDigit',
        'itemWeight' => 'setItemWeight',
        'weightType' => 'setWeightType',
        'product' => 'setProduct',
        'trackingNumber' => 'setTrackingNumber',
        'destinationPostcodeDPS' => 'setDestinationPostcodeDPS',
        'returnToSenderPostcode' => 'setReturnToSenderPostcode',
        'requiredAtDelivery' => 'setRequiredAtDelivery',
        'buildingNumber' => 'setBuildingNumber',
        'buildingName' => 'setBuildingName',
        'dateOfShipment' => 'setDateOfShipment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'upuCode' => 'getUpuCode',
        'informationTypeID' => 'getInformationTypeID',
        'versionID' => 'getVersionID',
        'format' => 'getFormat',
        'mailType' => 'getMailType',
        'itemID' => 'getItemID',
        'checkDigit' => 'getCheckDigit',
        'itemWeight' => 'getItemWeight',
        'weightType' => 'getWeightType',
        'product' => 'getProduct',
        'trackingNumber' => 'getTrackingNumber',
        'destinationPostcodeDPS' => 'getDestinationPostcodeDPS',
        'returnToSenderPostcode' => 'getReturnToSenderPostcode',
        'requiredAtDelivery' => 'getRequiredAtDelivery',
        'buildingNumber' => 'getBuildingNumber',
        'buildingName' => 'getBuildingName',
        'dateOfShipment' => 'getDateOfShipment'
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
        $this->container['upuCode'] = isset($data['upuCode']) ? $data['upuCode'] : null;
        $this->container['informationTypeID'] = isset($data['informationTypeID']) ? $data['informationTypeID'] : null;
        $this->container['versionID'] = isset($data['versionID']) ? $data['versionID'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['mailType'] = isset($data['mailType']) ? $data['mailType'] : null;
        $this->container['itemID'] = isset($data['itemID']) ? $data['itemID'] : null;
        $this->container['checkDigit'] = isset($data['checkDigit']) ? $data['checkDigit'] : null;
        $this->container['itemWeight'] = isset($data['itemWeight']) ? $data['itemWeight'] : null;
        $this->container['weightType'] = isset($data['weightType']) ? $data['weightType'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['trackingNumber'] = isset($data['trackingNumber']) ? $data['trackingNumber'] : null;
        $this->container['destinationPostcodeDPS'] = isset($data['destinationPostcodeDPS']) ? $data['destinationPostcodeDPS'] : null;
        $this->container['returnToSenderPostcode'] = isset($data['returnToSenderPostcode']) ? $data['returnToSenderPostcode'] : null;
        $this->container['requiredAtDelivery'] = isset($data['requiredAtDelivery']) ? $data['requiredAtDelivery'] : null;
        $this->container['buildingNumber'] = isset($data['buildingNumber']) ? $data['buildingNumber'] : null;
        $this->container['buildingName'] = isset($data['buildingName']) ? $data['buildingName'] : null;
        $this->container['dateOfShipment'] = isset($data['dateOfShipment']) ? $data['dateOfShipment'] : null;
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
     * Gets upuCode
     *
     * @return string
     */
    public function getUpuCode()
    {
        return $this->container['upuCode'];
    }

    /**
     * Sets upuCode
     *
     * @param string $upuCode Always 'JGB'
     *
     * @return $this
     */
    public function setUpuCode($upuCode)
    {
        $this->container['upuCode'] = $upuCode;

        return $this;
    }

    /**
     * Gets informationTypeID
     *
     * @return string
     */
    public function getInformationTypeID()
    {
        return $this->container['informationTypeID'];
    }

    /**
     * Sets informationTypeID
     *
     * @param string $informationTypeID Always 6
     *
     * @return $this
     */
    public function setInformationTypeID($informationTypeID)
    {
        $this->container['informationTypeID'] = $informationTypeID;

        return $this;
    }

    /**
     * Gets versionID
     *
     * @return string
     */
    public function getVersionID()
    {
        return $this->container['versionID'];
    }

    /**
     * Sets versionID
     *
     * @param string $versionID Always 1
     *
     * @return $this
     */
    public function setVersionID($versionID)
    {
        $this->container['versionID'] = $versionID;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string $format Dependant on Service Format selected
     *
     * @return $this
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets mailType
     *
     * @return string
     */
    public function getMailType()
    {
        return $this->container['mailType'];
    }

    /**
     * Sets mailType
     *
     * @param string $mailType Depends on what service was selected e.g. Inland Large Letter
     *
     * @return $this
     */
    public function setMailType($mailType)
    {
        $this->container['mailType'] = $mailType;

        return $this;
    }

    /**
     * Gets itemID
     *
     * @return string
     */
    public function getItemID()
    {
        return $this->container['itemID'];
    }

    /**
     * Sets itemID
     *
     * @param string $itemID Unique Item ID for shipment which is same as received in response to creatshipmentRequest. If customer is not using the 2D barcode returned by the API, then they must convert this number to hex and then use this hex number in the 2D barcode.
     *
     * @return $this
     */
    public function setItemID($itemID)
    {
        $this->container['itemID'] = $itemID;

        return $this;
    }

    /**
     * Gets checkDigit
     *
     * @return string
     */
    public function getCheckDigit()
    {
        return $this->container['checkDigit'];
    }

    /**
     * Sets checkDigit
     *
     * @param string $checkDigit System Calculated value
     *
     * @return $this
     */
    public function setCheckDigit($checkDigit)
    {
        $this->container['checkDigit'] = $checkDigit;

        return $this;
    }

    /**
     * Gets itemWeight
     *
     * @return string
     */
    public function getItemWeight()
    {
        return $this->container['itemWeight'];
    }

    /**
     * Sets itemWeight
     *
     * @param string $itemWeight Shipment/Item Weight
     *
     * @return $this
     */
    public function setItemWeight($itemWeight)
    {
        $this->container['itemWeight'] = $itemWeight;

        return $this;
    }

    /**
     * Gets weightType
     *
     * @return string
     */
    public function getWeightType()
    {
        return $this->container['weightType'];
    }

    /**
     * Sets weightType
     *
     * @param string $weightType Dependant on Service selected i.e. g, kg etc.
     *
     * @return $this
     */
    public function setWeightType($weightType)
    {
        $this->container['weightType'] = $weightType;

        return $this;
    }

    /**
     * Gets product
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param string $product Dependant on Service Reference selected
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets trackingNumber
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->container['trackingNumber'];
    }

    /**
     * Sets trackingNumber
     *
     * @param string $trackingNumber 1D Linear Barcode for shipment which is the same as shipment number received in response to a createShipmentRequest
     *
     * @return $this
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->container['trackingNumber'] = $trackingNumber;

        return $this;
    }

    /**
     * Gets destinationPostcodeDPS
     *
     * @return string
     */
    public function getDestinationPostcodeDPS()
    {
        return $this->container['destinationPostcodeDPS'];
    }

    /**
     * Sets destinationPostcodeDPS
     *
     * @param string $destinationPostcodeDPS The post/pin code for the destination.
     *
     * @return $this
     */
    public function setDestinationPostcodeDPS($destinationPostcodeDPS)
    {
        $this->container['destinationPostcodeDPS'] = $destinationPostcodeDPS;

        return $this;
    }

    /**
     * Gets returnToSenderPostcode
     *
     * @return string
     */
    public function getReturnToSenderPostcode()
    {
        return $this->container['returnToSenderPostcode'];
    }

    /**
     * Sets returnToSenderPostcode
     *
     * @param string $returnToSenderPostcode Post/Pin code for the sender for returns
     *
     * @return $this
     */
    public function setReturnToSenderPostcode($returnToSenderPostcode)
    {
        $this->container['returnToSenderPostcode'] = $returnToSenderPostcode;

        return $this;
    }

    /**
     * Gets requiredAtDelivery
     *
     * @return string
     */
    public function getRequiredAtDelivery()
    {
        return $this->container['requiredAtDelivery'];
    }

    /**
     * Sets requiredAtDelivery
     *
     * @param string $requiredAtDelivery If a signature is required, the value will be S, otherwise blank.
     *
     * @return $this
     */
    public function setRequiredAtDelivery($requiredAtDelivery)
    {
        $this->container['requiredAtDelivery'] = $requiredAtDelivery;

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
     * @param string $buildingNumber Building Number (Label)
     *
     * @return $this
     */
    public function setBuildingNumber($buildingNumber)
    {
        $this->container['buildingNumber'] = $buildingNumber;

        return $this;
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
     * @param string $buildingName Building Name (Label)
     *
     * @return $this
     */
    public function setBuildingName($buildingName)
    {
        $this->container['buildingName'] = $buildingName;

        return $this;
    }

    /**
     * Gets dateOfShipment
     *
     * @return string
     */
    public function getDateOfShipment()
    {
        return $this->container['dateOfShipment'];
    }

    /**
     * Sets dateOfShipment
     *
     * @param string $dateOfShipment Provisional Date Of Shipment
     *
     * @return $this
     */
    public function setDateOfShipment($dateOfShipment)
    {
        $this->container['dateOfShipment'] = $dateOfShipment;

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


