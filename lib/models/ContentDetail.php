<?php
/**
 * ContentDetail
 *
 * PHP version 5
 *
 * @category Class
 * @package  RoyalMail\Shipping\Rest\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Royal Mail API Shipping V2 (REST)
 *
 * This API specification details the requirements for integrating with Royal Mail API Shipping V2 (REST). It specifically covers how the Royal Mail API Shipping V2 (REST) can be used by business customers to conduct shipping activity with Royal Mail and provides the technical information to build this integration. This specification must be used with the relevant accompanying specifications for customers wishing to interface their systems with Royal Mail services.  Royal Mail API Shipping V2 (REST) exposes a fully RESTful service that allows account customers to create shipments, produce labels, and produce documentation for all the tasks required to ship domestic items with Royal Mail. Built on industry standards, Royal Mail API Shipping V2 (REST) provides a simple and low cost method for customers to integrate with Royal Mail, and allows them to get shipping quickly. The API offers data streaming and offline barcoding to allow customers greater flexibility when generating their labels.  There are no costs to customers for using the Royal Mail API Shipping V2 (REST) services, however customers’ own development costs must be covered by the customer developing the solution. Royal Mail will not accept any responsibility for these development, implementation and testing costs. Customers should address initial enquiries regarding development of systems for these purposes to their account handler.  This API can be used in conjunction with Royal Mail Pro Shipping, a GUI based shipping platform. For more details on Royal Mail Pro Shipping, including videos on and briefs on updating cancelling a shipment and manifesting click here&#58; www.royalmail.com/pro-shipping-help
 *
 * OpenAPI spec version: 1.0.21
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.7
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
 * ContentDetail Class Doc Comment
 *
 * @category Class
 * @package  RoyalMail\Shipping\Rest\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContentDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'contentDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'countryOfManufactureCode' => 'string',
        'manufacturersName' => 'string',
        'description' => 'string',
        'unitWeight' => '\RoyalMail\Shipping\Rest\Api\models\Measurement',
        'unitQuantity' => 'int',
        'unitValue' => 'BigDecimal',
        'currencyCode' => 'string',
        'tariffCode' => 'BigDecimal',
        'tariffDescription' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'countryOfManufactureCode' => null,
        'manufacturersName' => null,
        'description' => null,
        'unitWeight' => null,
        'unitQuantity' => null,
        'unitValue' => null,
        'currencyCode' => null,
        'tariffCode' => null,
        'tariffDescription' => null
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
        'countryOfManufactureCode' => 'countryOfManufactureCode',
        'manufacturersName' => 'manufacturersName',
        'description' => 'description',
        'unitWeight' => 'unitWeight',
        'unitQuantity' => 'unitQuantity',
        'unitValue' => 'unitValue',
        'currencyCode' => 'currencyCode',
        'tariffCode' => 'tariffCode',
        'tariffDescription' => 'tariffDescription'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'countryOfManufactureCode' => 'setCountryOfManufactureCode',
        'manufacturersName' => 'setManufacturersName',
        'description' => 'setDescription',
        'unitWeight' => 'setUnitWeight',
        'unitQuantity' => 'setUnitQuantity',
        'unitValue' => 'setUnitValue',
        'currencyCode' => 'setCurrencyCode',
        'tariffCode' => 'setTariffCode',
        'tariffDescription' => 'setTariffDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'countryOfManufactureCode' => 'getCountryOfManufactureCode',
        'manufacturersName' => 'getManufacturersName',
        'description' => 'getDescription',
        'unitWeight' => 'getUnitWeight',
        'unitQuantity' => 'getUnitQuantity',
        'unitValue' => 'getUnitValue',
        'currencyCode' => 'getCurrencyCode',
        'tariffCode' => 'getTariffCode',
        'tariffDescription' => 'getTariffDescription'
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
        $this->container['countryOfManufactureCode'] = isset($data['countryOfManufactureCode']) ? $data['countryOfManufactureCode'] : null;
        $this->container['manufacturersName'] = isset($data['manufacturersName']) ? $data['manufacturersName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['unitWeight'] = isset($data['unitWeight']) ? $data['unitWeight'] : null;
        $this->container['unitQuantity'] = isset($data['unitQuantity']) ? $data['unitQuantity'] : null;
        $this->container['unitValue'] = isset($data['unitValue']) ? $data['unitValue'] : null;
        $this->container['currencyCode'] = isset($data['currencyCode']) ? $data['currencyCode'] : null;
        $this->container['tariffCode'] = isset($data['tariffCode']) ? $data['tariffCode'] : null;
        $this->container['tariffDescription'] = isset($data['tariffDescription']) ? $data['tariffDescription'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['countryOfManufactureCode'] === null) {
            $invalidProperties[] = "'countryOfManufactureCode' can't be null";
        }
        if ($this->container['unitQuantity'] === null) {
            $invalidProperties[] = "'unitQuantity' can't be null";
        }
        if ($this->container['unitValue'] === null) {
            $invalidProperties[] = "'unitValue' can't be null";
        }
        if ($this->container['currencyCode'] === null) {
            $invalidProperties[] = "'currencyCode' can't be null";
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets countryOfManufactureCode
     *
     * @return string
     */
    public function getCountryOfManufactureCode()
    {
        return $this->container['countryOfManufactureCode'];
    }

    /**
     * Sets countryOfManufactureCode
     *
     * @param string $countryOfManufactureCode 2-digit country ISO code representing the country in which the goods where manufactured. Note that this field is case sensitive. For the list of allowable values, please go to API Shipping V2 page on the Royal Mail API (Developer) Portal and refer to API Shipping Reference Data.
     *
     * @return $this
     */
    public function setCountryOfManufactureCode($countryOfManufactureCode)
    {
        $this->container['countryOfManufactureCode'] = $countryOfManufactureCode;

        return $this;
    }

    /**
     * Gets manufacturersName
     *
     * @return string
     */
    public function getManufacturersName()
    {
        return $this->container['manufacturersName'];
    }

    /**
     * Sets manufacturersName
     *
     * @param string $manufacturersName Name of manufacturer of goods in the shipment.
     *
     * @return $this
     */
    public function setManufacturersName($manufacturersName)
    {
        $this->container['manufacturersName'] = $manufacturersName;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description of goods being delivered.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets unitWeight
     *
     * @return \RoyalMail\Shipping\Rest\Api\models\Measurement
     */
    public function getUnitWeight()
    {
        return $this->container['unitWeight'];
    }

    /**
     * Sets unitWeight
     *
     * @param \RoyalMail\Shipping\Rest\Api\models\Measurement $unitWeight unitWeight
     *
     * @return $this
     */
    public function setUnitWeight($unitWeight)
    {
        $this->container['unitWeight'] = $unitWeight;

        return $this;
    }

    /**
     * Gets unitQuantity
     *
     * @return int
     */
    public function getUnitQuantity()
    {
        return $this->container['unitQuantity'];
    }

    /**
     * Sets unitQuantity
     *
     * @param int $unitQuantity Quantity of content items within the shipment.
     *
     * @return $this
     */
    public function setUnitQuantity($unitQuantity)
    {
        $this->container['unitQuantity'] = $unitQuantity;

        return $this;
    }

    /**
     * Gets unitValue
     *
     * @return BigDecimal
     */
    public function getUnitValue()
    {
        return $this->container['unitValue'];
    }

    /**
     * Sets unitValue
     *
     * @param BigDecimal $unitValue Value of content items within the shipment.
     *
     * @return $this
     */
    public function setUnitValue($unitValue)
    {
        $this->container['unitValue'] = $unitValue;

        return $this;
    }

    /**
     * Gets currencyCode
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currencyCode'];
    }

    /**
     * Sets currencyCode
     *
     * @param string $currencyCode 3-digit ISO currency code for value of content item within the shipment.
     *
     * @return $this
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->container['currencyCode'] = $currencyCode;

        return $this;
    }

    /**
     * Gets tariffCode
     *
     * @return BigDecimal
     */
    public function getTariffCode()
    {
        return $this->container['tariffCode'];
    }

    /**
     * Sets tariffCode
     *
     * @param BigDecimal $tariffCode Tariff code for content item within the shipment. See https&#58;//www.gov.uk/trade-tariff.
     *
     * @return $this
     */
    public function setTariffCode($tariffCode)
    {
        $this->container['tariffCode'] = $tariffCode;

        return $this;
    }

    /**
     * Gets tariffDescription
     *
     * @return string
     */
    public function getTariffDescription()
    {
        return $this->container['tariffDescription'];
    }

    /**
     * Sets tariffDescription
     *
     * @param string $tariffDescription Description that compliments the tariff code supplied.
     *
     * @return $this
     */
    public function setTariffDescription($tariffDescription)
    {
        $this->container['tariffDescription'] = $tariffDescription;

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
