<?php
/**
 * PackagePriceInfoVas
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
 * Swagger Codegen version: 3.0.27
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
 * PackagePriceInfoVas Class Doc Comment
 *
 * @category Class
 * @description Информация о пакетах дополнительных услуг для переданного списка объявлений
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PackagePriceInfoVas implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PackagePriceInfoVas';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'quick_sale' => 'float',
'turbo_sale' => 'float',
'x10_1' => 'float',
'x10_7' => 'float',
'x2_1' => 'float',
'x2_7' => 'float',
'x5_1' => 'float',
'x5_7' => 'float'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'quick_sale' => null,
'turbo_sale' => null,
'x10_1' => null,
'x10_7' => null,
'x2_1' => null,
'x2_7' => null,
'x5_1' => null,
'x5_7' => null    ];

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
        'quick_sale' => 'quick_sale',
'turbo_sale' => 'turbo_sale',
'x10_1' => 'x10_1',
'x10_7' => 'x10_7',
'x2_1' => 'x2_1',
'x2_7' => 'x2_7',
'x5_1' => 'x5_1',
'x5_7' => 'x5_7'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'quick_sale' => 'setQuickSale',
'turbo_sale' => 'setTurboSale',
'x10_1' => 'setX101',
'x10_7' => 'setX107',
'x2_1' => 'setX21',
'x2_7' => 'setX27',
'x5_1' => 'setX51',
'x5_7' => 'setX57'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'quick_sale' => 'getQuickSale',
'turbo_sale' => 'getTurboSale',
'x10_1' => 'getX101',
'x10_7' => 'getX107',
'x2_1' => 'getX21',
'x2_7' => 'getX27',
'x5_1' => 'getX51',
'x5_7' => 'getX57'    ];

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
        $this->container['quick_sale'] = isset($data['quick_sale']) ? $data['quick_sale'] : null;
        $this->container['turbo_sale'] = isset($data['turbo_sale']) ? $data['turbo_sale'] : null;
        $this->container['x10_1'] = isset($data['x10_1']) ? $data['x10_1'] : null;
        $this->container['x10_7'] = isset($data['x10_7']) ? $data['x10_7'] : null;
        $this->container['x2_1'] = isset($data['x2_1']) ? $data['x2_1'] : null;
        $this->container['x2_7'] = isset($data['x2_7']) ? $data['x2_7'] : null;
        $this->container['x5_1'] = isset($data['x5_1']) ? $data['x5_1'] : null;
        $this->container['x5_7'] = isset($data['x5_7']) ? $data['x5_7'] : null;
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets quick_sale
     *
     * @return float
     */
    public function getQuickSale()
    {
        return $this->container['quick_sale'];
    }

    /**
     * Sets quick_sale
     *
     * @param float $quick_sale Стоимость пакета услуг \"Быстрая продажа\"
     *
     * @return $this
     */
    public function setQuickSale($quick_sale)
    {
        $this->container['quick_sale'] = $quick_sale;

        return $this;
    }

    /**
     * Gets turbo_sale
     *
     * @return float
     */
    public function getTurboSale()
    {
        return $this->container['turbo_sale'];
    }

    /**
     * Sets turbo_sale
     *
     * @param float $turbo_sale Стоимость пакета услуг \"Турбо-продажа\"
     *
     * @return $this
     */
    public function setTurboSale($turbo_sale)
    {
        $this->container['turbo_sale'] = $turbo_sale;

        return $this;
    }

    /**
     * Gets x10_1
     *
     * @return float
     */
    public function getX101()
    {
        return $this->container['x10_1'];
    }

    /**
     * Sets x10_1
     *
     * @param float $x10_1 Стоимость пакета \"До 10 раз больше просмотров на 1 день\"
     *
     * @return $this
     */
    public function setX101($x10_1)
    {
        $this->container['x10_1'] = $x10_1;

        return $this;
    }

    /**
     * Gets x10_7
     *
     * @return float
     */
    public function getX107()
    {
        return $this->container['x10_7'];
    }

    /**
     * Sets x10_7
     *
     * @param float $x10_7 Стоимость пакета \"До 10 раз больше просмотров на 7 дней\"
     *
     * @return $this
     */
    public function setX107($x10_7)
    {
        $this->container['x10_7'] = $x10_7;

        return $this;
    }

    /**
     * Gets x2_1
     *
     * @return float
     */
    public function getX21()
    {
        return $this->container['x2_1'];
    }

    /**
     * Sets x2_1
     *
     * @param float $x2_1 Стоимость пакета \"До 2 раз больше просмотров на 1 день\"
     *
     * @return $this
     */
    public function setX21($x2_1)
    {
        $this->container['x2_1'] = $x2_1;

        return $this;
    }

    /**
     * Gets x2_7
     *
     * @return float
     */
    public function getX27()
    {
        return $this->container['x2_7'];
    }

    /**
     * Sets x2_7
     *
     * @param float $x2_7 Стоимость пакета \"До 2 раз больше просмотров на 7 дней\"
     *
     * @return $this
     */
    public function setX27($x2_7)
    {
        $this->container['x2_7'] = $x2_7;

        return $this;
    }

    /**
     * Gets x5_1
     *
     * @return float
     */
    public function getX51()
    {
        return $this->container['x5_1'];
    }

    /**
     * Sets x5_1
     *
     * @param float $x5_1 Стоимость пакета \"До 5 раз больше просмотров на 1 день\"
     *
     * @return $this
     */
    public function setX51($x5_1)
    {
        $this->container['x5_1'] = $x5_1;

        return $this;
    }

    /**
     * Gets x5_7
     *
     * @return float
     */
    public function getX57()
    {
        return $this->container['x5_7'];
    }

    /**
     * Sets x5_7
     *
     * @param float $x5_7 Стоимость пакета \"До 5 раз больше просмотров на 7 дней\"
     *
     * @return $this
     */
    public function setX57($x5_7)
    {
        $this->container['x5_7'] = $x5_7;

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
