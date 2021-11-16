<?php
/**
 * GiftSelectionCondition
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

use \SSB\Api\ObjectSerializer;

/**
 * GiftSelectionCondition Class Doc Comment
 *
 * @category Class
 * @package  SSB\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GiftSelectionCondition extends Condition 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GiftSelectionCondition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'numOfDisplayedCodes' => 'int',
        'giftCodes' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'numOfDisplayedCodes' => null,
        'giftCodes' => null
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
        'numOfDisplayedCodes' => 'numOfDisplayedCodes',
        'giftCodes' => 'giftCodes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'numOfDisplayedCodes' => 'setNumOfDisplayedCodes',
        'giftCodes' => 'setGiftCodes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'numOfDisplayedCodes' => 'getNumOfDisplayedCodes',
        'giftCodes' => 'getGiftCodes'
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

        $this->container['numOfDisplayedCodes'] = isset($data['numOfDisplayedCodes']) ? $data['numOfDisplayedCodes'] : null;
        $this->container['giftCodes'] = isset($data['giftCodes']) ? $data['giftCodes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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
     * Gets numOfDisplayedCodes
     *
     * @return int
     */
    public function getNumOfDisplayedCodes()
    {
        return $this->container['numOfDisplayedCodes'];
    }

    /**
     * Sets numOfDisplayedCodes
     *
     * @param int $numOfDisplayedCodes numOfDisplayedCodes
     *
     * @return $this
     */
    public function setNumOfDisplayedCodes($numOfDisplayedCodes)
    {
        $this->container['numOfDisplayedCodes'] = $numOfDisplayedCodes;

        return $this;
    }

    /**
     * Gets giftCodes
     *
     * @return string[]
     */
    public function getGiftCodes()
    {
        return $this->container['giftCodes'];
    }

    /**
     * Sets giftCodes
     *
     * @param string[] $giftCodes giftCodes
     *
     * @return $this
     */
    public function setGiftCodes($giftCodes)
    {
        $this->container['giftCodes'] = $giftCodes;

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