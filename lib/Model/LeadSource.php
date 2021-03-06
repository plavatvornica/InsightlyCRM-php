<?php
/**
 * LeadSource
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Insightly API v2.2
 *
 * No descripton provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v2.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * LeadSource Class Doc Comment
 *
 * @category    Class */
 // @description APICategory
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LeadSource implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LeadSource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'lead_source_id' => 'int',
        'lead_source' => 'string',
        'default_value' => 'bool',
        'field_order' => 'int'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'lead_source_id' => 'LEAD_SOURCE_ID',
        'lead_source' => 'LEAD_SOURCE',
        'default_value' => 'DEFAULT_VALUE',
        'field_order' => 'FIELD_ORDER'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'lead_source_id' => 'setLeadSourceId',
        'lead_source' => 'setLeadSource',
        'default_value' => 'setDefaultValue',
        'field_order' => 'setFieldOrder'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'lead_source_id' => 'getLeadSourceId',
        'lead_source' => 'getLeadSource',
        'default_value' => 'getDefaultValue',
        'field_order' => 'getFieldOrder'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['lead_source_id'] = isset($data['lead_source_id']) ? $data['lead_source_id'] : null;
        $this->container['lead_source'] = isset($data['lead_source']) ? $data['lead_source'] : null;
        $this->container['default_value'] = isset($data['default_value']) ? $data['default_value'] : null;
        $this->container['field_order'] = isset($data['field_order']) ? $data['field_order'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['lead_source'] === null) {
            $invalid_properties[] = "'lead_source' can't be null";
        }
        if ((strlen($this->container['lead_source']) > 255)) {
            $invalid_properties[] = "invalid value for 'lead_source', the character length must be smaller than or equal to 255.";
        }

        if ((strlen($this->container['lead_source']) < 0)) {
            $invalid_properties[] = "invalid value for 'lead_source', the character length must be bigger than or equal to 0.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['lead_source'] === null) {
            return false;
        }
        if (strlen($this->container['lead_source']) > 255) {
            return false;
        }
        if (strlen($this->container['lead_source']) < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets lead_source_id
     * @return int
     */
    public function getLeadSourceId()
    {
        return $this->container['lead_source_id'];
    }

    /**
     * Sets lead_source_id
     * @param int $lead_source_id Unique ID for the current Lead Source
     * @return $this
     */
    public function setLeadSourceId($lead_source_id)
    {
        $this->container['lead_source_id'] = $lead_source_id;

        return $this;
    }

    /**
     * Gets lead_source
     * @return string
     */
    public function getLeadSource()
    {
        return $this->container['lead_source'];
    }

    /**
     * Sets lead_source
     * @param string $lead_source Lead Source value
     * @return $this
     */
    public function setLeadSource($lead_source)
    {
        if (strlen($lead_source) > 255) {
            throw new \InvalidArgumentException('invalid length for $lead_source when calling LeadSource., must be smaller than or equal to 255.');
        }
        if (strlen($lead_source) < 0) {
            throw new \InvalidArgumentException('invalid length for $lead_source when calling LeadSource., must be bigger than or equal to 0.');
        }
        $this->container['lead_source'] = $lead_source;

        return $this;
    }

    /**
     * Gets default_value
     * @return bool
     */
    public function getDefaultValue()
    {
        return $this->container['default_value'];
    }

    /**
     * Sets default_value
     * @param bool $default_value checks or sets the current Lead source for being the default value
     * @return $this
     */
    public function setDefaultValue($default_value)
    {
        $this->container['default_value'] = $default_value;

        return $this;
    }

    /**
     * Gets field_order
     * @return int
     */
    public function getFieldOrder()
    {
        return $this->container['field_order'];
    }

    /**
     * Sets field_order
     * @param int $field_order Field Order used to retrive list sorted
     * @return $this
     */
    public function setFieldOrder($field_order)
    {
        $this->container['field_order'] = $field_order;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


