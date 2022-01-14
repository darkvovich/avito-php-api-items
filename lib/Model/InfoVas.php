<?php
/**
 * InfoVas
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Объявления
 *
 * API для получение статистики по объявлениям, применения дополнительных услуг, а также просмотр статусов объявлений  **Авито API для бизнеса предоставляется согласно [Условиям   использования](https://api.avito.ru/docs/public/APITermsOfServiceV1.pdf).**
 *
 * OpenAPI spec version: 1
 * Contact: supportautoload@avito.ru
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.32
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * InfoVas Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InfoVas implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InfoVas';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'finish_time' => '\DateTime',
'schedule' => '\DateTime[]',
'vas_id' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'finish_time' => 'date-time',
'schedule' => 'date-time',
'vas_id' => null    ];

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
        'finish_time' => 'finish_time',
'schedule' => 'schedule',
'vas_id' => 'vas_id'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'finish_time' => 'setFinishTime',
'schedule' => 'setSchedule',
'vas_id' => 'setVasId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'finish_time' => 'getFinishTime',
'schedule' => 'getSchedule',
'vas_id' => 'getVasId'    ];

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

    const VAS_ID_VIP = 'vip';
const VAS_ID_HIGHLIGHT = 'highlight';
const VAS_ID_PUSHUP = 'pushup';
const VAS_ID_PREMIUM = 'premium';
const VAS_ID_XL = 'xl';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVasIdAllowableValues()
    {
        return [
            self::VAS_ID_VIP,
self::VAS_ID_HIGHLIGHT,
self::VAS_ID_PUSHUP,
self::VAS_ID_PREMIUM,
self::VAS_ID_XL,        ];
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
        $this->container['finish_time'] = isset($data['finish_time']) ? $data['finish_time'] : null;
        $this->container['schedule'] = isset($data['schedule']) ? $data['schedule'] : null;
        $this->container['vas_id'] = isset($data['vas_id']) ? $data['vas_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getVasIdAllowableValues();
        if (!is_null($this->container['vas_id']) && !in_array($this->container['vas_id'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'vas_id', must be one of '%s'",
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
     * Gets finish_time
     *
     * @return \DateTime
     */
    public function getFinishTime()
    {
        return $this->container['finish_time'];
    }

    /**
     * Sets finish_time
     *
     * @param \DateTime $finish_time Дата завершения услуги
     *
     * @return $this
     */
    public function setFinishTime($finish_time)
    {
        $this->container['finish_time'] = $finish_time;

        return $this;
    }

    /**
     * Gets schedule
     *
     * @return \DateTime[]
     */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
     * Sets schedule
     *
     * @param \DateTime[] $schedule Информация о следующих применениях услуги
     *
     * @return $this
     */
    public function setSchedule($schedule)
    {
        $this->container['schedule'] = $schedule;

        return $this;
    }

    /**
     * Gets vas_id
     *
     * @return string
     */
    public function getVasId()
    {
        return $this->container['vas_id'];
    }

    /**
     * Sets vas_id
     *
     * @param string $vas_id Идентификатор услуги
     *
     * @return $this
     */
    public function setVasId($vas_id)
    {
        $allowedValues = $this->getVasIdAllowableValues();
        if (!is_null($vas_id) && !in_array($vas_id, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'vas_id', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['vas_id'] = $vas_id;

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
