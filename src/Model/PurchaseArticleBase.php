<?php
/**
 * PurchaseArticleBase
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
 * Swagger Codegen version: 3.0.41
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SSB\Api\Model;

use ArrayAccess;
use ReturnTypeWillChange;
use SSB\Api\ObjectSerializer;

/**
 * PurchaseArticleBase Class Doc Comment
 *
 * @category Class
 * @package  SSB\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PurchaseArticleBase implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = 'className';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'PurchaseArticleBase';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'className' => 'string',
        'id' => 'string',
        'price' => '\SSB\Api\Model\Money',
        'name' => 'string',
        'sku' => 'string',
        'tax' => 'float',
        'quantity' => 'float',
        'custom' => 'string[]',
        'originalPrice' => '\SSB\Api\Model\Money'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'className' => null,
        'id' => null,
        'price' => null,
        'name' => null,
        'sku' => null,
        'tax' => 'float',
        'quantity' => 'int',
        'custom' => null,
        'originalPrice' => null
    ];
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'className' => 'className',
        'id' => 'id',
        'price' => 'price',
        'name' => 'name',
        'sku' => 'sku',
        'tax' => 'tax',
        'quantity' => 'quantity',
        'custom' => 'custom',
        'originalPrice' => 'originalPrice'
    ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'className' => 'setClassName',
        'id' => 'setId',
        'price' => 'setPrice',
        'name' => 'setName',
        'sku' => 'setSku',
        'tax' => 'setTax',
        'quantity' => 'setQuantity',
        'custom' => 'setCustom',
        'originalPrice' => 'setOriginalPrice'
    ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'className' => 'getClassName',
        'id' => 'getId',
        'price' => 'getPrice',
        'name' => 'getName',
        'sku' => 'getSku',
        'tax' => 'getTax',
        'quantity' => 'getQuantity',
        'custom' => 'getCustom',
        'originalPrice' => 'getOriginalPrice'
    ];
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
        $this->container['className'] = isset($data['className']) ? $data['className'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['custom'] = isset($data['custom']) ? $data['custom'] : null;
        $this->container['originalPrice'] = isset($data['originalPrice']) ? $data['originalPrice'] : null;

        // Initialize discriminator property with the model name.
        $discriminator = array_search('className', self::$attributeMap);
        $this->container[$discriminator] = static::$swaggerModelName;
    }

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
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['className'] === null) {
            $invalidProperties[] = "'className' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Gets className
     *
     * @return string
     */
    public function getClassName()
    {
        return $this->container['className'];
    }

    /**
     * Sets className
     *
     * @param string $className className
     *
     * @return $this
     */
    public function setClassName($className)
    {
        $this->container['className'] = $className;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Id of the Article
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets price
     *
     * @return Money
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param Money $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

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
     * @param string $name Name of the Article
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku Sku of the Article
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return float
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param float $tax Tax of the Article
     *
     * @return $this
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float $quantity Quantity of the Article
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets custom
     *
     * @return string[]
     */
    public function getCustom()
    {
        return $this->container['custom'];
    }

    /**
     * Sets custom
     *
     * @param string[] $custom Custom of the Article
     *
     * @return $this
     */
    public function setCustom($custom)
    {
        $this->container['custom'] = $custom;

        return $this;
    }

    /**
     * Gets originalPrice
     *
     * @return Money
     */
    public function getOriginalPrice()
    {
        return $this->container['originalPrice'];
    }

    /**
     * Sets originalPrice
     *
     * @param Money $originalPrice originalPrice
     *
     * @return $this
     */
    public function setOriginalPrice($originalPrice)
    {
        $this->container['originalPrice'] = $originalPrice;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    #[ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return mixed
     */
    #[ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int $offset Offset
     * @param mixed $value Value to be set
     *
     * @return void
     */
    #[ReturnTypeWillChange]
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
     * @param int $offset Offset
     *
     * @return void
     */
    #[ReturnTypeWillChange]
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
