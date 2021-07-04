<?php
/**
 * ShippingCost
 *
 * PHP version 5
 *
 * @category Class
 * @package  SSB\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ShopShopBox
 *
 * ShopShopBox API Documentation ## You can filter the results with following filters:  *       'eq' => '=',  *       'ne' => '!=',  *       'like' => 'like',  *        'gt' => '>',  *        'lt' => '<',  *        'ge' => '>=',  *        'le' => '<=', ### example ```php $articles = $client->get('article',['name-eq' => 'mckenzie.com']); ``` Will response with an json-object with all articles named 'mckenzie.com'
 *
 * OpenAPI spec version: 1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.22
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SSB\Api\Model;

use \ArrayAccess;
use \SSB\Api\ObjectSerializer;

/**
 * ShippingCost Class Doc Comment
 *
 * @category Class
 * @package  SSB\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShippingCost implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShippingCost';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'status' => 'string',
'time' => 'int',
'timeMax' => 'int',
'country' => 'string',
'name' => 'string',
'price' => '\SSB\Api\Model\Money',
'options' => '\SSB\Api\Model\ShippingCostOption[]',
'orderDeadline' => 'string',
'validation' => '\SSB\Api\Model\ShippingCostValidation[]',
'originIdentification' => 'string',
'sortWeight' => 'int',
'versionId' => 'int',
'aggregateId' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'status' => null,
'time' => null,
'timeMax' => null,
'country' => null,
'name' => null,
'price' => null,
'options' => null,
'orderDeadline' => null,
'validation' => null,
'originIdentification' => null,
'sortWeight' => null,
'versionId' => null,
'aggregateId' => null    ];

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
        'status' => 'status',
'time' => 'time',
'timeMax' => 'timeMax',
'country' => 'country',
'name' => 'name',
'price' => 'price',
'options' => 'options',
'orderDeadline' => 'orderDeadline',
'validation' => 'validation',
'originIdentification' => 'originIdentification',
'sortWeight' => 'sortWeight',
'versionId' => 'versionId',
'aggregateId' => 'aggregateId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
'time' => 'setTime',
'timeMax' => 'setTimeMax',
'country' => 'setCountry',
'name' => 'setName',
'price' => 'setPrice',
'options' => 'setOptions',
'orderDeadline' => 'setOrderDeadline',
'validation' => 'setValidation',
'originIdentification' => 'setOriginIdentification',
'sortWeight' => 'setSortWeight',
'versionId' => 'setVersionId',
'aggregateId' => 'setAggregateId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
'time' => 'getTime',
'timeMax' => 'getTimeMax',
'country' => 'getCountry',
'name' => 'getName',
'price' => 'getPrice',
'options' => 'getOptions',
'orderDeadline' => 'getOrderDeadline',
'validation' => 'getValidation',
'originIdentification' => 'getOriginIdentification',
'sortWeight' => 'getSortWeight',
'versionId' => 'getVersionId',
'aggregateId' => 'getAggregateId'    ];

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

    const STATUS_ENABLED = 'enabled';
const STATUS_DISABLED = 'disabled';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ENABLED,
self::STATUS_DISABLED,        ];
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['timeMax'] = isset($data['timeMax']) ? $data['timeMax'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['orderDeadline'] = isset($data['orderDeadline']) ? $data['orderDeadline'] : null;
        $this->container['validation'] = isset($data['validation']) ? $data['validation'] : null;
        $this->container['originIdentification'] = isset($data['originIdentification']) ? $data['originIdentification'] : null;
        $this->container['sortWeight'] = isset($data['sortWeight']) ? $data['sortWeight'] : null;
        $this->container['versionId'] = isset($data['versionId']) ? $data['versionId'] : null;
        $this->container['aggregateId'] = isset($data['aggregateId']) ? $data['aggregateId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets time
     *
     * @return int
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param int $time time
     *
     * @return $this
     */
    public function setTime($time)
    {
        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets timeMax
     *
     * @return int
     */
    public function getTimeMax()
    {
        return $this->container['timeMax'];
    }

    /**
     * Sets timeMax
     *
     * @param int $timeMax timeMax
     *
     * @return $this
     */
    public function setTimeMax($timeMax)
    {
        $this->container['timeMax'] = $timeMax;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country The code of the code
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets price
     *
     * @return \SSB\Api\Model\Money
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \SSB\Api\Model\Money $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \SSB\Api\Model\ShippingCostOption[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \SSB\Api\Model\ShippingCostOption[] $options options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets orderDeadline
     *
     * @return string
     */
    public function getOrderDeadline()
    {
        return $this->container['orderDeadline'];
    }

    /**
     * Sets orderDeadline
     *
     * @param string $orderDeadline orderDeadline
     *
     * @return $this
     */
    public function setOrderDeadline($orderDeadline)
    {
        $this->container['orderDeadline'] = $orderDeadline;

        return $this;
    }

    /**
     * Gets validation
     *
     * @return \SSB\Api\Model\ShippingCostValidation[]
     */
    public function getValidation()
    {
        return $this->container['validation'];
    }

    /**
     * Sets validation
     *
     * @param \SSB\Api\Model\ShippingCostValidation[] $validation validation
     *
     * @return $this
     */
    public function setValidation($validation)
    {
        $this->container['validation'] = $validation;

        return $this;
    }

    /**
     * Gets originIdentification
     *
     * @return string
     */
    public function getOriginIdentification()
    {
        return $this->container['originIdentification'];
    }

    /**
     * Sets originIdentification
     *
     * @param string $originIdentification originIdentification
     *
     * @return $this
     */
    public function setOriginIdentification($originIdentification)
    {
        $this->container['originIdentification'] = $originIdentification;

        return $this;
    }

    /**
     * Gets sortWeight
     *
     * @return int
     */
    public function getSortWeight()
    {
        return $this->container['sortWeight'];
    }

    /**
     * Sets sortWeight
     *
     * @param int $sortWeight sortWeight
     *
     * @return $this
     */
    public function setSortWeight($sortWeight)
    {
        $this->container['sortWeight'] = $sortWeight;

        return $this;
    }

    /**
     * Gets versionId
     *
     * @return int
     */
    public function getVersionId()
    {
        return $this->container['versionId'];
    }

    /**
     * Sets versionId
     *
     * @param int $versionId The version id of the object
     *
     * @return $this
     */
    public function setVersionId($versionId)
    {
        $this->container['versionId'] = $versionId;

        return $this;
    }

    /**
     * Gets aggregateId
     *
     * @return string
     */
    public function getAggregateId()
    {
        return $this->container['aggregateId'];
    }

    /**
     * Sets aggregateId
     *
     * @param string $aggregateId The uuid v4 of the object
     *
     * @return $this
     */
    public function setAggregateId($aggregateId)
    {
        $this->container['aggregateId'] = $aggregateId;

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
