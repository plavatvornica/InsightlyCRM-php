<?php
/**
 * Link
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
 * Link Class Doc Comment
 *
 * @category    Class */
 // @description Information about a Link between Contacts, Organisations, Opportunities, or Projects:  Two linked object IDs should be included.
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Link implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Link';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'link_id' => 'int',
        'contact_id' => 'int',
        'opportunity_id' => 'int',
        'organisation_id' => 'int',
        'project_id' => 'int',
        'second_project_id' => 'int',
        'second_opportunity_id' => 'int',
        'role' => 'string',
        'details' => 'string'
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
        'link_id' => 'LINK_ID',
        'contact_id' => 'CONTACT_ID',
        'opportunity_id' => 'OPPORTUNITY_ID',
        'organisation_id' => 'ORGANISATION_ID',
        'project_id' => 'PROJECT_ID',
        'second_project_id' => 'SECOND_PROJECT_ID',
        'second_opportunity_id' => 'SECOND_OPPORTUNITY_ID',
        'role' => 'ROLE',
        'details' => 'DETAILS'
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
        'link_id' => 'setLinkId',
        'contact_id' => 'setContactId',
        'opportunity_id' => 'setOpportunityId',
        'organisation_id' => 'setOrganisationId',
        'project_id' => 'setProjectId',
        'second_project_id' => 'setSecondProjectId',
        'second_opportunity_id' => 'setSecondOpportunityId',
        'role' => 'setRole',
        'details' => 'setDetails'
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
        'link_id' => 'getLinkId',
        'contact_id' => 'getContactId',
        'opportunity_id' => 'getOpportunityId',
        'organisation_id' => 'getOrganisationId',
        'project_id' => 'getProjectId',
        'second_project_id' => 'getSecondProjectId',
        'second_opportunity_id' => 'getSecondOpportunityId',
        'role' => 'getRole',
        'details' => 'getDetails'
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
        $this->container['link_id'] = isset($data['link_id']) ? $data['link_id'] : null;
        $this->container['contact_id'] = isset($data['contact_id']) ? $data['contact_id'] : null;
        $this->container['opportunity_id'] = isset($data['opportunity_id']) ? $data['opportunity_id'] : null;
        $this->container['organisation_id'] = isset($data['organisation_id']) ? $data['organisation_id'] : null;
        $this->container['project_id'] = isset($data['project_id']) ? $data['project_id'] : null;
        $this->container['second_project_id'] = isset($data['second_project_id']) ? $data['second_project_id'] : null;
        $this->container['second_opportunity_id'] = isset($data['second_opportunity_id']) ? $data['second_opportunity_id'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if (!is_null($this->container['role']) && (strlen($this->container['role']) > 255)) {
            $invalid_properties[] = "invalid value for 'role', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['role']) && (strlen($this->container['role']) < 0)) {
            $invalid_properties[] = "invalid value for 'role', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['details']) && (strlen($this->container['details']) > 255)) {
            $invalid_properties[] = "invalid value for 'details', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['details']) && (strlen($this->container['details']) < 0)) {
            $invalid_properties[] = "invalid value for 'details', the character length must be bigger than or equal to 0.";
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
        if (strlen($this->container['role']) > 255) {
            return false;
        }
        if (strlen($this->container['role']) < 0) {
            return false;
        }
        if (strlen($this->container['details']) > 255) {
            return false;
        }
        if (strlen($this->container['details']) < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets link_id
     * @return int
     */
    public function getLinkId()
    {
        return $this->container['link_id'];
    }

    /**
     * Sets link_id
     * @param int $link_id Unique ID for the Link record
     * @return $this
     */
    public function setLinkId($link_id)
    {
        $this->container['link_id'] = $link_id;

        return $this;
    }

    /**
     * Gets contact_id
     * @return int
     */
    public function getContactId()
    {
        return $this->container['contact_id'];
    }

    /**
     * Sets contact_id
     * @param int $contact_id Unique ID for a Contact on one side of the Relationship, must be a CONTACT_ID
     * @return $this
     */
    public function setContactId($contact_id)
    {
        $this->container['contact_id'] = $contact_id;

        return $this;
    }

    /**
     * Gets opportunity_id
     * @return int
     */
    public function getOpportunityId()
    {
        return $this->container['opportunity_id'];
    }

    /**
     * Sets opportunity_id
     * @param int $opportunity_id Unique ID for an Opportunity on one side of the Relationship, must be an OPPORTUNITY_ID
     * @return $this
     */
    public function setOpportunityId($opportunity_id)
    {
        $this->container['opportunity_id'] = $opportunity_id;

        return $this;
    }

    /**
     * Gets organisation_id
     * @return int
     */
    public function getOrganisationId()
    {
        return $this->container['organisation_id'];
    }

    /**
     * Sets organisation_id
     * @param int $organisation_id Unique ID for an Organisation on one side of the Relationship, must be an ORGANISATION_ID
     * @return $this
     */
    public function setOrganisationId($organisation_id)
    {
        $this->container['organisation_id'] = $organisation_id;

        return $this;
    }

    /**
     * Gets project_id
     * @return int
     */
    public function getProjectId()
    {
        return $this->container['project_id'];
    }

    /**
     * Sets project_id
     * @param int $project_id Unique ID for a Project on one side of the Relationship
     * @return $this
     */
    public function setProjectId($project_id)
    {
        $this->container['project_id'] = $project_id;

        return $this;
    }

    /**
     * Gets second_project_id
     * @return int
     */
    public function getSecondProjectId()
    {
        return $this->container['second_project_id'];
    }

    /**
     * Sets second_project_id
     * @param int $second_project_id Unique ID for a second Project on one side of the Relationship
     * @return $this
     */
    public function setSecondProjectId($second_project_id)
    {
        $this->container['second_project_id'] = $second_project_id;

        return $this;
    }

    /**
     * Gets second_opportunity_id
     * @return int
     */
    public function getSecondOpportunityId()
    {
        return $this->container['second_opportunity_id'];
    }

    /**
     * Sets second_opportunity_id
     * @param int $second_opportunity_id Unique ID for a second Opportunity on one side of the Relationship
     * @return $this
     */
    public function setSecondOpportunityId($second_opportunity_id)
    {
        $this->container['second_opportunity_id'] = $second_opportunity_id;

        return $this;
    }

    /**
     * Gets role
     * @return string
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     * @param string $role Description of the Relationship between the linked objects
     * @return $this
     */
    public function setRole($role)
    {
        if (strlen($role) > 255) {
            throw new \InvalidArgumentException('invalid length for $role when calling Link., must be smaller than or equal to 255.');
        }
        if (strlen($role) < 0) {
            throw new \InvalidArgumentException('invalid length for $role when calling Link., must be bigger than or equal to 0.');
        }
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets details
     * @return string
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     * @param string $details Details of the Link
     * @return $this
     */
    public function setDetails($details)
    {
        if (strlen($details) > 255) {
            throw new \InvalidArgumentException('invalid length for $details when calling Link., must be smaller than or equal to 255.');
        }
        if (strlen($details) < 0) {
            throw new \InvalidArgumentException('invalid length for $details when calling Link., must be bigger than or equal to 0.');
        }
        $this->container['details'] = $details;

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


