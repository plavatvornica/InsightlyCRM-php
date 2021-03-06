<?php
/**
 * APIActivitySet
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
 * APIActivitySet Class Doc Comment
 *
 * @category    Class */
 // @description APIActivitySet
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class APIActivitySet implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'APIActivitySet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'activityset_id' => 'int',
        'name' => 'string',
        'for_contacts' => 'bool',
        'for_organisations' => 'bool',
        'for_opportunities' => 'bool',
        'for_projects' => 'bool',
        'for_leads' => 'bool',
        'owner_user_id' => 'int',
        'activities' => '\Swagger\Client\Model\APIActivity[]'
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
        'activityset_id' => 'ACTIVITYSET_ID',
        'name' => 'NAME',
        'for_contacts' => 'FOR_CONTACTS',
        'for_organisations' => 'FOR_ORGANISATIONS',
        'for_opportunities' => 'FOR_OPPORTUNITIES',
        'for_projects' => 'FOR_PROJECTS',
        'for_leads' => 'FOR_LEADS',
        'owner_user_id' => 'OWNER_USER_ID',
        'activities' => 'ACTIVITIES'
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
        'activityset_id' => 'setActivitysetId',
        'name' => 'setName',
        'for_contacts' => 'setForContacts',
        'for_organisations' => 'setForOrganisations',
        'for_opportunities' => 'setForOpportunities',
        'for_projects' => 'setForProjects',
        'for_leads' => 'setForLeads',
        'owner_user_id' => 'setOwnerUserId',
        'activities' => 'setActivities'
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
        'activityset_id' => 'getActivitysetId',
        'name' => 'getName',
        'for_contacts' => 'getForContacts',
        'for_organisations' => 'getForOrganisations',
        'for_opportunities' => 'getForOpportunities',
        'for_projects' => 'getForProjects',
        'for_leads' => 'getForLeads',
        'owner_user_id' => 'getOwnerUserId',
        'activities' => 'getActivities'
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
        $this->container['activityset_id'] = isset($data['activityset_id']) ? $data['activityset_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['for_contacts'] = isset($data['for_contacts']) ? $data['for_contacts'] : null;
        $this->container['for_organisations'] = isset($data['for_organisations']) ? $data['for_organisations'] : null;
        $this->container['for_opportunities'] = isset($data['for_opportunities']) ? $data['for_opportunities'] : null;
        $this->container['for_projects'] = isset($data['for_projects']) ? $data['for_projects'] : null;
        $this->container['for_leads'] = isset($data['for_leads']) ? $data['for_leads'] : null;
        $this->container['owner_user_id'] = isset($data['owner_user_id']) ? $data['owner_user_id'] : null;
        $this->container['activities'] = isset($data['activities']) ? $data['activities'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
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
        return true;
    }


    /**
     * Gets activityset_id
     * @return int
     */
    public function getActivitysetId()
    {
        return $this->container['activityset_id'];
    }

    /**
     * Sets activityset_id
     * @param int $activityset_id Unique ID for the Activity Set record.
     * @return $this
     */
    public function setActivitysetId($activityset_id)
    {
        $this->container['activityset_id'] = $activityset_id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name The name for the Activity Set.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets for_contacts
     * @return bool
     */
    public function getForContacts()
    {
        return $this->container['for_contacts'];
    }

    /**
     * Sets for_contacts
     * @param bool $for_contacts Whether or not the Activity Set is assignable to Contacts.
     * @return $this
     */
    public function setForContacts($for_contacts)
    {
        $this->container['for_contacts'] = $for_contacts;

        return $this;
    }

    /**
     * Gets for_organisations
     * @return bool
     */
    public function getForOrganisations()
    {
        return $this->container['for_organisations'];
    }

    /**
     * Sets for_organisations
     * @param bool $for_organisations Whether or not the Activity Set is assignable to Organisations.
     * @return $this
     */
    public function setForOrganisations($for_organisations)
    {
        $this->container['for_organisations'] = $for_organisations;

        return $this;
    }

    /**
     * Gets for_opportunities
     * @return bool
     */
    public function getForOpportunities()
    {
        return $this->container['for_opportunities'];
    }

    /**
     * Sets for_opportunities
     * @param bool $for_opportunities Whether or not the Activity Set is assignable to Opportunities.
     * @return $this
     */
    public function setForOpportunities($for_opportunities)
    {
        $this->container['for_opportunities'] = $for_opportunities;

        return $this;
    }

    /**
     * Gets for_projects
     * @return bool
     */
    public function getForProjects()
    {
        return $this->container['for_projects'];
    }

    /**
     * Sets for_projects
     * @param bool $for_projects Whether or not the Activity Set is assignable to Projects.
     * @return $this
     */
    public function setForProjects($for_projects)
    {
        $this->container['for_projects'] = $for_projects;

        return $this;
    }

    /**
     * Gets for_leads
     * @return bool
     */
    public function getForLeads()
    {
        return $this->container['for_leads'];
    }

    /**
     * Sets for_leads
     * @param bool $for_leads Whether or not the Activity Set is assignable to Leads.
     * @return $this
     */
    public function setForLeads($for_leads)
    {
        $this->container['for_leads'] = $for_leads;

        return $this;
    }

    /**
     * Gets owner_user_id
     * @return int
     */
    public function getOwnerUserId()
    {
        return $this->container['owner_user_id'];
    }

    /**
     * Sets owner_user_id
     * @param int $owner_user_id The unique ID for the Owner of the Activity.
     * @return $this
     */
    public function setOwnerUserId($owner_user_id)
    {
        $this->container['owner_user_id'] = $owner_user_id;

        return $this;
    }

    /**
     * Gets activities
     * @return \Swagger\Client\Model\APIActivity[]
     */
    public function getActivities()
    {
        return $this->container['activities'];
    }

    /**
     * Sets activities
     * @param \Swagger\Client\Model\APIActivity[] $activities The list of Activities that belong to the Activity Set.
     * @return $this
     */
    public function setActivities($activities)
    {
        $this->container['activities'] = $activities;

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


