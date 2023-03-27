<?php
/**
 * Purchase
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
use DateTime;
use InvalidArgumentException;
use ReturnTypeWillChange;
use SSB\Api\ObjectSerializer;

/**
 * Purchase Class Doc Comment
 *
 * @category Class
 * @package  SSB\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Purchase implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;
    public const ORIGIN_STATUS_EMPTY = '';
    public const ORIGIN_STATUS_READY_TO_IMPORT = 'ready_to_import';
    public const ORIGIN_STATUS_IMPORTED = 'imported';
    public const ORIGIN_STATUS_ERROR_IN_IMPORT = 'error_in_import';
    public const ORIGIN_STATUS_WAIT_FOR_MANUAL = 'wait_for_manual';
    public const STATUS__NEW = 'new';
    public const STATUS_PLACED = 'placed';
    public const STATUS_PAYMENT_FAILED = 'payment_failed';
    public const STATUS_PAYMENT_PENDING = 'payment_pending';
    public const STATUS_PAYMENT_DONE = 'payment_done';
    public const STATUS_SHIPPED = 'shipped';
    public const STATUS_CANCELED = 'canceled';
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Purchase';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'purchaseArticles' => '\SSB\Api\Model\PurchaseArticleBase[]',
        'codes' => '\SSB\Api\Model\Code[]',
        'shippingAddress' => '\SSB\Api\Model\Address',
        'billingAddress' => '\SSB\Api\Model\Address',
        'email' => 'string',
        'paymentMethod' => 'string',
        'user' => 'string',
        'originStatus' => 'string',
        'status' => 'string',
        'paymentInformation' => '\SSB\Api\Model\PaymentInformation',
        'shippingMethod' => 'string',
        'purchaseEvents' => '\SSB\Api\Model\EventSourceEvent[]',
        'grandTotal' => '\SSB\Api\Model\Money',
        'subTotal' => '\SSB\Api\Model\Money',
        'taxTotal' => '\SSB\Api\Model\Money',
        'discountedTotal' => '\SSB\Api\Model\Money',
        'shipping' => '\SSB\Api\Model\Money',
        'shippingTax' => '\SSB\Api\Model\Money',
        'orderId' => 'string',
        'codelessVersionId' => 'int',
        'codeless' => '\SSB\Api\Model\Codeless',
        'orderDate' => '\DateTime',
        'trackingCodes' => 'string[]',
        'versionId' => 'int',
        'aggregateId' => 'string'
    ];
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'purchaseArticles' => null,
        'codes' => null,
        'shippingAddress' => null,
        'billingAddress' => null,
        'email' => null,
        'paymentMethod' => null,
        'user' => null,
        'originStatus' => null,
        'status' => null,
        'paymentInformation' => null,
        'shippingMethod' => null,
        'purchaseEvents' => null,
        'grandTotal' => null,
        'subTotal' => null,
        'taxTotal' => null,
        'discountedTotal' => null,
        'shipping' => null,
        'shippingTax' => null,
        'orderId' => null,
        'codelessVersionId' => null,
        'codeless' => null,
        'orderDate' => 'date-time',
        'trackingCodes' => null,
        'versionId' => null,
        'aggregateId' => null
    ];
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'purchaseArticles' => 'purchaseArticles',
        'codes' => 'codes',
        'shippingAddress' => 'shippingAddress',
        'billingAddress' => 'billingAddress',
        'email' => 'email',
        'paymentMethod' => 'paymentMethod',
        'user' => 'user',
        'originStatus' => 'originStatus',
        'status' => 'status',
        'paymentInformation' => 'paymentInformation',
        'shippingMethod' => 'shippingMethod',
        'purchaseEvents' => 'purchaseEvents',
        'grandTotal' => 'grandTotal',
        'subTotal' => 'subTotal',
        'taxTotal' => 'taxTotal',
        'discountedTotal' => 'discountedTotal',
        'shipping' => 'shipping',
        'shippingTax' => 'shippingTax',
        'orderId' => 'orderId',
        'codelessVersionId' => 'codelessVersionId',
        'codeless' => 'codeless',
        'orderDate' => 'orderDate',
        'trackingCodes' => 'trackingCodes',
        'versionId' => 'versionId',
        'aggregateId' => 'aggregateId'
    ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'purchaseArticles' => 'setPurchaseArticles',
        'codes' => 'setCodes',
        'shippingAddress' => 'setShippingAddress',
        'billingAddress' => 'setBillingAddress',
        'email' => 'setEmail',
        'paymentMethod' => 'setPaymentMethod',
        'user' => 'setUser',
        'originStatus' => 'setOriginStatus',
        'status' => 'setStatus',
        'paymentInformation' => 'setPaymentInformation',
        'shippingMethod' => 'setShippingMethod',
        'purchaseEvents' => 'setPurchaseEvents',
        'grandTotal' => 'setGrandTotal',
        'subTotal' => 'setSubTotal',
        'taxTotal' => 'setTaxTotal',
        'discountedTotal' => 'setDiscountedTotal',
        'shipping' => 'setShipping',
        'shippingTax' => 'setShippingTax',
        'orderId' => 'setOrderId',
        'codelessVersionId' => 'setCodelessVersionId',
        'codeless' => 'setCodeless',
        'orderDate' => 'setOrderDate',
        'trackingCodes' => 'setTrackingCodes',
        'versionId' => 'setVersionId',
        'aggregateId' => 'setAggregateId'
    ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'purchaseArticles' => 'getPurchaseArticles',
        'codes' => 'getCodes',
        'shippingAddress' => 'getShippingAddress',
        'billingAddress' => 'getBillingAddress',
        'email' => 'getEmail',
        'paymentMethod' => 'getPaymentMethod',
        'user' => 'getUser',
        'originStatus' => 'getOriginStatus',
        'status' => 'getStatus',
        'paymentInformation' => 'getPaymentInformation',
        'shippingMethod' => 'getShippingMethod',
        'purchaseEvents' => 'getPurchaseEvents',
        'grandTotal' => 'getGrandTotal',
        'subTotal' => 'getSubTotal',
        'taxTotal' => 'getTaxTotal',
        'discountedTotal' => 'getDiscountedTotal',
        'shipping' => 'getShipping',
        'shippingTax' => 'getShippingTax',
        'orderId' => 'getOrderId',
        'codelessVersionId' => 'getCodelessVersionId',
        'codeless' => 'getCodeless',
        'orderDate' => 'getOrderDate',
        'trackingCodes' => 'getTrackingCodes',
        'versionId' => 'getVersionId',
        'aggregateId' => 'getAggregateId'
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
        $this->container['purchaseArticles'] = isset($data['purchaseArticles']) ? $data['purchaseArticles'] : null;
        $this->container['codes'] = isset($data['codes']) ? $data['codes'] : null;
        $this->container['shippingAddress'] = isset($data['shippingAddress']) ? $data['shippingAddress'] : null;
        $this->container['billingAddress'] = isset($data['billingAddress']) ? $data['billingAddress'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['paymentMethod'] = isset($data['paymentMethod']) ? $data['paymentMethod'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['originStatus'] = isset($data['originStatus']) ? $data['originStatus'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['paymentInformation'] = isset($data['paymentInformation']) ? $data['paymentInformation'] : null;
        $this->container['shippingMethod'] = isset($data['shippingMethod']) ? $data['shippingMethod'] : null;
        $this->container['purchaseEvents'] = isset($data['purchaseEvents']) ? $data['purchaseEvents'] : null;
        $this->container['grandTotal'] = isset($data['grandTotal']) ? $data['grandTotal'] : null;
        $this->container['subTotal'] = isset($data['subTotal']) ? $data['subTotal'] : null;
        $this->container['taxTotal'] = isset($data['taxTotal']) ? $data['taxTotal'] : null;
        $this->container['discountedTotal'] = isset($data['discountedTotal']) ? $data['discountedTotal'] : null;
        $this->container['shipping'] = isset($data['shipping']) ? $data['shipping'] : null;
        $this->container['shippingTax'] = isset($data['shippingTax']) ? $data['shippingTax'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['codelessVersionId'] = isset($data['codelessVersionId']) ? $data['codelessVersionId'] : null;
        $this->container['codeless'] = isset($data['codeless']) ? $data['codeless'] : null;
        $this->container['orderDate'] = isset($data['orderDate']) ? $data['orderDate'] : null;
        $this->container['trackingCodes'] = isset($data['trackingCodes']) ? $data['trackingCodes'] : null;
        $this->container['versionId'] = isset($data['versionId']) ? $data['versionId'] : null;
        $this->container['aggregateId'] = isset($data['aggregateId']) ? $data['aggregateId'] : null;
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

        $allowedValues = $this->getOriginStatusAllowableValues();
        if (!is_null($this->container['originStatus']) && !in_array(
                $this->container['originStatus'],
                $allowedValues,
                true
            )) {
            $invalidProperties[] = sprintf(
                "invalid value for 'originStatus', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOriginStatusAllowableValues()
    {
        return [
            self::ORIGIN_STATUS_EMPTY,
            self::ORIGIN_STATUS_READY_TO_IMPORT,
            self::ORIGIN_STATUS_IMPORTED,
            self::ORIGIN_STATUS_ERROR_IN_IMPORT,
            self::ORIGIN_STATUS_WAIT_FOR_MANUAL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS__NEW,
            self::STATUS_PLACED,
            self::STATUS_PAYMENT_FAILED,
            self::STATUS_PAYMENT_PENDING,
            self::STATUS_PAYMENT_DONE,
            self::STATUS_SHIPPED,
            self::STATUS_CANCELED,
        ];
    }

    /**
     * Gets purchaseArticles
     *
     * @return PurchaseArticleBase[]
     */
    public function getPurchaseArticles()
    {
        return $this->container['purchaseArticles'];
    }

    /**
     * Sets purchaseArticles
     *
     * @param PurchaseArticleBase[] $purchaseArticles purchaseArticles
     *
     * @return $this
     */
    public function setPurchaseArticles($purchaseArticles)
    {
        $this->container['purchaseArticles'] = $purchaseArticles;

        return $this;
    }

    /**
     * Gets codes
     *
     * @return Code[]
     */
    public function getCodes()
    {
        return $this->container['codes'];
    }

    /**
     * Sets codes
     *
     * @param Code[] $codes codes
     *
     * @return $this
     */
    public function setCodes($codes)
    {
        $this->container['codes'] = $codes;

        return $this;
    }

    /**
     * Gets shippingAddress
     *
     * @return Address
     */
    public function getShippingAddress()
    {
        return $this->container['shippingAddress'];
    }

    /**
     * Sets shippingAddress
     *
     * @param Address $shippingAddress shippingAddress
     *
     * @return $this
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->container['shippingAddress'] = $shippingAddress;

        return $this;
    }

    /**
     * Gets billingAddress
     *
     * @return Address
     */
    public function getBillingAddress()
    {
        return $this->container['billingAddress'];
    }

    /**
     * Sets billingAddress
     *
     * @param Address $billingAddress billingAddress
     *
     * @return $this
     */
    public function setBillingAddress($billingAddress)
    {
        $this->container['billingAddress'] = $billingAddress;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets paymentMethod
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->container['paymentMethod'];
    }

    /**
     * Sets paymentMethod
     *
     * @param string $paymentMethod paymentMethod
     *
     * @return $this
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->container['paymentMethod'] = $paymentMethod;

        return $this;
    }

    /**
     * Gets user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param string $user user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets originStatus
     *
     * @return string
     */
    public function getOriginStatus()
    {
        return $this->container['originStatus'];
    }

    /**
     * Sets originStatus
     *
     * @param string $originStatus originStatus
     *
     * @return $this
     */
    public function setOriginStatus($originStatus)
    {
        $allowedValues = $this->getOriginStatusAllowableValues();
        if (!is_null($originStatus) && !in_array($originStatus, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value for 'originStatus', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['originStatus'] = $originStatus;

        return $this;
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
     * @param string $status The status of the Purchase
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new InvalidArgumentException(
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
     * Gets paymentInformation
     *
     * @return PaymentInformation
     */
    public function getPaymentInformation()
    {
        return $this->container['paymentInformation'];
    }

    /**
     * Sets paymentInformation
     *
     * @param PaymentInformation $paymentInformation paymentInformation
     *
     * @return $this
     */
    public function setPaymentInformation($paymentInformation)
    {
        $this->container['paymentInformation'] = $paymentInformation;

        return $this;
    }

    /**
     * Gets shippingMethod
     *
     * @return string
     */
    public function getShippingMethod()
    {
        return $this->container['shippingMethod'];
    }

    /**
     * Sets shippingMethod
     *
     * @param string $shippingMethod shippingMethod
     *
     * @return $this
     */
    public function setShippingMethod($shippingMethod)
    {
        $this->container['shippingMethod'] = $shippingMethod;

        return $this;
    }

    /**
     * Gets purchaseEvents
     *
     * @return EventSourceEvent[]
     */
    public function getPurchaseEvents()
    {
        return $this->container['purchaseEvents'];
    }

    /**
     * Sets purchaseEvents
     *
     * @param EventSourceEvent[] $purchaseEvents purchaseEvents
     *
     * @return $this
     */
    public function setPurchaseEvents($purchaseEvents)
    {
        $this->container['purchaseEvents'] = $purchaseEvents;

        return $this;
    }

    /**
     * Gets grandTotal
     *
     * @return Money
     */
    public function getGrandTotal()
    {
        return $this->container['grandTotal'];
    }

    /**
     * Sets grandTotal
     *
     * @param Money $grandTotal grandTotal
     *
     * @return $this
     */
    public function setGrandTotal($grandTotal)
    {
        $this->container['grandTotal'] = $grandTotal;

        return $this;
    }

    /**
     * Gets subTotal
     *
     * @return Money
     */
    public function getSubTotal()
    {
        return $this->container['subTotal'];
    }

    /**
     * Sets subTotal
     *
     * @param Money $subTotal subTotal
     *
     * @return $this
     */
    public function setSubTotal($subTotal)
    {
        $this->container['subTotal'] = $subTotal;

        return $this;
    }

    /**
     * Gets taxTotal
     *
     * @return Money
     */
    public function getTaxTotal()
    {
        return $this->container['taxTotal'];
    }

    /**
     * Sets taxTotal
     *
     * @param Money $taxTotal taxTotal
     *
     * @return $this
     */
    public function setTaxTotal($taxTotal)
    {
        $this->container['taxTotal'] = $taxTotal;

        return $this;
    }

    /**
     * Gets discountedTotal
     *
     * @return Money
     */
    public function getDiscountedTotal()
    {
        return $this->container['discountedTotal'];
    }

    /**
     * Sets discountedTotal
     *
     * @param Money $discountedTotal discountedTotal
     *
     * @return $this
     */
    public function setDiscountedTotal($discountedTotal)
    {
        $this->container['discountedTotal'] = $discountedTotal;

        return $this;
    }

    /**
     * Gets shipping
     *
     * @return Money
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param Money $shipping shipping
     *
     * @return $this
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets shippingTax
     *
     * @return Money
     */
    public function getShippingTax()
    {
        return $this->container['shippingTax'];
    }

    /**
     * Sets shippingTax
     *
     * @param Money $shippingTax shippingTax
     *
     * @return $this
     */
    public function setShippingTax($shippingTax)
    {
        $this->container['shippingTax'] = $shippingTax;

        return $this;
    }

    /**
     * Gets orderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     *
     * @param string $orderId orderId
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;

        return $this;
    }

    /**
     * Gets codelessVersionId
     *
     * @return int
     */
    public function getCodelessVersionId()
    {
        return $this->container['codelessVersionId'];
    }

    /**
     * Sets codelessVersionId
     *
     * @param int $codelessVersionId codelessVersionId
     *
     * @return $this
     */
    public function setCodelessVersionId($codelessVersionId)
    {
        $this->container['codelessVersionId'] = $codelessVersionId;

        return $this;
    }

    /**
     * Gets codeless
     *
     * @return Codeless
     */
    public function getCodeless()
    {
        return $this->container['codeless'];
    }

    /**
     * Sets codeless
     *
     * @param Codeless $codeless codeless
     *
     * @return $this
     */
    public function setCodeless($codeless)
    {
        $this->container['codeless'] = $codeless;

        return $this;
    }

    /**
     * Gets orderDate
     *
     * @return DateTime
     */
    public function getOrderDate()
    {
        return $this->container['orderDate'];
    }

    /**
     * Sets orderDate
     *
     * @param DateTime $orderDate orderDate
     *
     * @return $this
     */
    public function setOrderDate($orderDate)
    {
        $this->container['orderDate'] = $orderDate;

        return $this;
    }

    /**
     * Gets trackingCodes
     *
     * @return string[]
     */
    public function getTrackingCodes()
    {
        return $this->container['trackingCodes'];
    }

    /**
     * Sets trackingCodes
     *
     * @param string[] $trackingCodes trackingCodes
     *
     * @return $this
     */
    public function setTrackingCodes($trackingCodes)
    {
        $this->container['trackingCodes'] = $trackingCodes;

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
