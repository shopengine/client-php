<?php
/**
 * CodepoolStatistics
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
 * CodepoolStatistics Class Doc Comment
 *
 * @category Class
 * @package  SSB\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CodepoolStatistics implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Codepool_statistics';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'grandTotal' => 'string',
        'grandTotalAverage' => 'string',
        'subTotal' => 'string',
        'subTotalAverage' => 'string',
        'subTotalWithoutTax' => 'string',
        'subTotalWithoutTaxAverage' => 'string',
        'discountedTotal' => 'string',
        'discountedTotalAverage' => 'string',
        'purchaseCount' => 'int',
        'usageCount' => 'int',
        'codeCount' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'grandTotal' => null,
        'grandTotalAverage' => null,
        'subTotal' => null,
        'subTotalAverage' => null,
        'subTotalWithoutTax' => null,
        'subTotalWithoutTaxAverage' => null,
        'discountedTotal' => null,
        'discountedTotalAverage' => null,
        'purchaseCount' => null,
        'usageCount' => null,
        'codeCount' => null
    ];
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'grandTotal' => 'grandTotal',
        'grandTotalAverage' => 'grandTotalAverage',
        'subTotal' => 'subTotal',
        'subTotalAverage' => 'subTotalAverage',
        'subTotalWithoutTax' => 'subTotalWithoutTax',
        'subTotalWithoutTaxAverage' => 'subTotalWithoutTaxAverage',
        'discountedTotal' => 'discountedTotal',
        'discountedTotalAverage' => 'discountedTotalAverage',
        'purchaseCount' => 'purchaseCount',
        'usageCount' => 'usageCount',
        'codeCount' => 'codeCount'
    ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'grandTotal' => 'setGrandTotal',
        'grandTotalAverage' => 'setGrandTotalAverage',
        'subTotal' => 'setSubTotal',
        'subTotalAverage' => 'setSubTotalAverage',
        'subTotalWithoutTax' => 'setSubTotalWithoutTax',
        'subTotalWithoutTaxAverage' => 'setSubTotalWithoutTaxAverage',
        'discountedTotal' => 'setDiscountedTotal',
        'discountedTotalAverage' => 'setDiscountedTotalAverage',
        'purchaseCount' => 'setPurchaseCount',
        'usageCount' => 'setUsageCount',
        'codeCount' => 'setCodeCount'
    ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'grandTotal' => 'getGrandTotal',
        'grandTotalAverage' => 'getGrandTotalAverage',
        'subTotal' => 'getSubTotal',
        'subTotalAverage' => 'getSubTotalAverage',
        'subTotalWithoutTax' => 'getSubTotalWithoutTax',
        'subTotalWithoutTaxAverage' => 'getSubTotalWithoutTaxAverage',
        'discountedTotal' => 'getDiscountedTotal',
        'discountedTotalAverage' => 'getDiscountedTotalAverage',
        'purchaseCount' => 'getPurchaseCount',
        'usageCount' => 'getUsageCount',
        'codeCount' => 'getCodeCount'
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
        $this->container['grandTotal'] = isset($data['grandTotal']) ? $data['grandTotal'] : null;
        $this->container['grandTotalAverage'] = isset($data['grandTotalAverage']) ? $data['grandTotalAverage'] : null;
        $this->container['subTotal'] = isset($data['subTotal']) ? $data['subTotal'] : null;
        $this->container['subTotalAverage'] = isset($data['subTotalAverage']) ? $data['subTotalAverage'] : null;
        $this->container['subTotalWithoutTax'] = isset($data['subTotalWithoutTax']) ? $data['subTotalWithoutTax'] : null;
        $this->container['subTotalWithoutTaxAverage'] = isset($data['subTotalWithoutTaxAverage']) ? $data['subTotalWithoutTaxAverage'] : null;
        $this->container['discountedTotal'] = isset($data['discountedTotal']) ? $data['discountedTotal'] : null;
        $this->container['discountedTotalAverage'] = isset($data['discountedTotalAverage']) ? $data['discountedTotalAverage'] : null;
        $this->container['purchaseCount'] = isset($data['purchaseCount']) ? $data['purchaseCount'] : null;
        $this->container['usageCount'] = isset($data['usageCount']) ? $data['usageCount'] : null;
        $this->container['codeCount'] = isset($data['codeCount']) ? $data['codeCount'] : null;
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

        return $invalidProperties;
    }

    /**
     * Gets grandTotal
     *
     * @return string
     */
    public function getGrandTotal()
    {
        return $this->container['grandTotal'];
    }

    /**
     * Sets grandTotal
     *
     * @param string $grandTotal grandTotal
     *
     * @return $this
     */
    public function setGrandTotal($grandTotal)
    {
        $this->container['grandTotal'] = $grandTotal;

        return $this;
    }

    /**
     * Gets grandTotalAverage
     *
     * @return string
     */
    public function getGrandTotalAverage()
    {
        return $this->container['grandTotalAverage'];
    }

    /**
     * Sets grandTotalAverage
     *
     * @param string $grandTotalAverage grandTotalAverage
     *
     * @return $this
     */
    public function setGrandTotalAverage($grandTotalAverage)
    {
        $this->container['grandTotalAverage'] = $grandTotalAverage;

        return $this;
    }

    /**
     * Gets subTotal
     *
     * @return string
     */
    public function getSubTotal()
    {
        return $this->container['subTotal'];
    }

    /**
     * Sets subTotal
     *
     * @param string $subTotal subTotal
     *
     * @return $this
     */
    public function setSubTotal($subTotal)
    {
        $this->container['subTotal'] = $subTotal;

        return $this;
    }

    /**
     * Gets subTotalAverage
     *
     * @return string
     */
    public function getSubTotalAverage()
    {
        return $this->container['subTotalAverage'];
    }

    /**
     * Sets subTotalAverage
     *
     * @param string $subTotalAverage subTotalAverage
     *
     * @return $this
     */
    public function setSubTotalAverage($subTotalAverage)
    {
        $this->container['subTotalAverage'] = $subTotalAverage;

        return $this;
    }

    /**
     * Gets subTotalWithoutTax
     *
     * @return string
     */
    public function getSubTotalWithoutTax()
    {
        return $this->container['subTotalWithoutTax'];
    }

    /**
     * Sets subTotalWithoutTax
     *
     * @param string $subTotalWithoutTax subTotalWithoutTax
     *
     * @return $this
     */
    public function setSubTotalWithoutTax($subTotalWithoutTax)
    {
        $this->container['subTotalWithoutTax'] = $subTotalWithoutTax;

        return $this;
    }

    /**
     * Gets subTotalWithoutTaxAverage
     *
     * @return string
     */
    public function getSubTotalWithoutTaxAverage()
    {
        return $this->container['subTotalWithoutTaxAverage'];
    }

    /**
     * Sets subTotalWithoutTaxAverage
     *
     * @param string $subTotalWithoutTaxAverage subTotalWithoutTaxAverage
     *
     * @return $this
     */
    public function setSubTotalWithoutTaxAverage($subTotalWithoutTaxAverage)
    {
        $this->container['subTotalWithoutTaxAverage'] = $subTotalWithoutTaxAverage;

        return $this;
    }

    /**
     * Gets discountedTotal
     *
     * @return string
     */
    public function getDiscountedTotal()
    {
        return $this->container['discountedTotal'];
    }

    /**
     * Sets discountedTotal
     *
     * @param string $discountedTotal discountedTotal
     *
     * @return $this
     */
    public function setDiscountedTotal($discountedTotal)
    {
        $this->container['discountedTotal'] = $discountedTotal;

        return $this;
    }

    /**
     * Gets discountedTotalAverage
     *
     * @return string
     */
    public function getDiscountedTotalAverage()
    {
        return $this->container['discountedTotalAverage'];
    }

    /**
     * Sets discountedTotalAverage
     *
     * @param string $discountedTotalAverage discountedTotalAverage
     *
     * @return $this
     */
    public function setDiscountedTotalAverage($discountedTotalAverage)
    {
        $this->container['discountedTotalAverage'] = $discountedTotalAverage;

        return $this;
    }

    /**
     * Gets purchaseCount
     *
     * @return int
     */
    public function getPurchaseCount()
    {
        return $this->container['purchaseCount'];
    }

    /**
     * Sets purchaseCount
     *
     * @param int $purchaseCount purchaseCount
     *
     * @return $this
     */
    public function setPurchaseCount($purchaseCount)
    {
        $this->container['purchaseCount'] = $purchaseCount;

        return $this;
    }

    /**
     * Gets usageCount
     *
     * @return int
     */
    public function getUsageCount()
    {
        return $this->container['usageCount'];
    }

    /**
     * Sets usageCount
     *
     * @param int $usageCount usageCount
     *
     * @return $this
     */
    public function setUsageCount($usageCount)
    {
        $this->container['usageCount'] = $usageCount;

        return $this;
    }

    /**
     * Gets codeCount
     *
     * @return string
     */
    public function getCodeCount()
    {
        return $this->container['codeCount'];
    }

    /**
     * Sets codeCount
     *
     * @param string $codeCount codeCount
     *
     * @return $this
     */
    public function setCodeCount($codeCount)
    {
        $this->container['codeCount'] = $codeCount;

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
