<?php

/**
 * PeriodValidation
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
 * Swagger Codegen version: 3.0.46
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SSB\Api\Model;
use SSB\Api\ObjectSerializer;

/**
 * PeriodValidation Class Doc Comment
 *
 * @category Class
 * @package  SSB\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PeriodValidation extends ShippingCostValidation
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PeriodValidation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fromWeekDay' => 'string',
        'fromTime' => 'string',
        'toWeekDay' => 'string',
        'toTime' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fromWeekDay' => null,
        'fromTime' => null,
        'toWeekDay' => null,
        'toTime' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'fromWeekDay' => 'fromWeekDay',
        'fromTime' => 'fromTime',
        'toWeekDay' => 'toWeekDay',
        'toTime' => 'toTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fromWeekDay' => 'setFromWeekDay',
        'fromTime' => 'setFromTime',
        'toWeekDay' => 'setToWeekDay',
        'toTime' => 'setToTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fromWeekDay' => 'getFromWeekDay',
        'fromTime' => 'getFromTime',
        'toWeekDay' => 'getToWeekDay',
        'toTime' => 'getToTime'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['fromWeekDay'] = isset($data['fromWeekDay']) ? $data['fromWeekDay'] : null;
        $this->container['fromTime'] = isset($data['fromTime']) ? $data['fromTime'] : null;
        $this->container['toWeekDay'] = isset($data['toWeekDay']) ? $data['toWeekDay'] : null;
        $this->container['toTime'] = isset($data['toTime']) ? $data['toTime'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['fromWeekDay'] === null) {
            $invalidProperties[] = "'fromWeekDay' can't be null";
        }
        if ($this->container['fromTime'] === null) {
            $invalidProperties[] = "'fromTime' can't be null";
        }
        if ($this->container['toWeekDay'] === null) {
            $invalidProperties[] = "'toWeekDay' can't be null";
        }
        if ($this->container['toTime'] === null) {
            $invalidProperties[] = "'toTime' can't be null";
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
     * Gets fromWeekDay
     *
     * @return string
     */
    public function getFromWeekDay()
    {
        return $this->container['fromWeekDay'];
    }

    /**
     * Sets fromWeekDay
     *
     * @param string $fromWeekDay fromWeekDay
     *
     * @return $this
     */
    public function setFromWeekDay($fromWeekDay)
    {
        $this->container['fromWeekDay'] = $fromWeekDay;

        return $this;
    }

    /**
     * Gets fromTime
     *
     * @return string
     */
    public function getFromTime()
    {
        return $this->container['fromTime'];
    }

    /**
     * Sets fromTime
     *
     * @param string $fromTime fromTime
     *
     * @return $this
     */
    public function setFromTime($fromTime)
    {
        $this->container['fromTime'] = $fromTime;

        return $this;
    }

    /**
     * Gets toWeekDay
     *
     * @return string
     */
    public function getToWeekDay()
    {
        return $this->container['toWeekDay'];
    }

    /**
     * Sets toWeekDay
     *
     * @param string $toWeekDay toWeekDay
     *
     * @return $this
     */
    public function setToWeekDay($toWeekDay)
    {
        $this->container['toWeekDay'] = $toWeekDay;

        return $this;
    }

    /**
     * Gets toTime
     *
     * @return string
     */
    public function getToTime()
    {
        return $this->container['toTime'];
    }

    /**
     * Sets toTime
     *
     * @param string $toTime toTime
     *
     * @return $this
     */
    public function setToTime($toTime)
    {
        $this->container['toTime'] = $toTime;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
