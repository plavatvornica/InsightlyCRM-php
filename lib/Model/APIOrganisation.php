<?php
/**
 * APIOrganisation
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
 * APIOrganisation Class Doc Comment
 *
 * @category    Class */
 // @description APIOrganisation
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class APIOrganisation implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'APIOrganisation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'organisation_id' => 'int',
        'organisation_name' => 'string',
        'background' => 'string',
        'image_url' => 'string',
        'owner_user_id' => 'int',
        'date_created_utc' => '\DateTime',
        'date_updated_utc' => '\DateTime',
        'visible_to' => 'string',
        'visible_team_id' => 'int',
        'visible_user_ids' => 'string',
        'customfields' => '\Swagger\Client\Model\APICustomField[]',
        'addresses' => '\Swagger\Client\Model\APIAddress[]',
        'contactinfos' => '\Swagger\Client\Model\APIContactInfo[]',
        'dates' => '\Swagger\Client\Model\APIOrganisationDate[]',
        'tags' => '\Swagger\Client\Model\APITag[]',
        'links' => '\Swagger\Client\Model\APILink[]',
        'organisationlinks' => '\Swagger\Client\Model\APIOrganisationLink[]'
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
        'organisation_id' => 'ORGANISATION_ID',
        'organisation_name' => 'ORGANISATION_NAME',
        'background' => 'BACKGROUND',
        'image_url' => 'IMAGE_URL',
        'owner_user_id' => 'OWNER_USER_ID',
        'date_created_utc' => 'DATE_CREATED_UTC',
        'date_updated_utc' => 'DATE_UPDATED_UTC',
        'visible_to' => 'VISIBLE_TO',
        'visible_team_id' => 'VISIBLE_TEAM_ID',
        'visible_user_ids' => 'VISIBLE_USER_IDS',
        'customfields' => 'CUSTOMFIELDS',
        'addresses' => 'ADDRESSES',
        'contactinfos' => 'CONTACTINFOS',
        'dates' => 'DATES',
        'tags' => 'TAGS',
        'links' => 'LINKS',
        'organisationlinks' => 'ORGANISATIONLINKS'
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
        'organisation_id' => 'setOrganisationId',
        'organisation_name' => 'setOrganisationName',
        'background' => 'setBackground',
        'image_url' => 'setImageUrl',
        'owner_user_id' => 'setOwnerUserId',
        'date_created_utc' => 'setDateCreatedUtc',
        'date_updated_utc' => 'setDateUpdatedUtc',
        'visible_to' => 'setVisibleTo',
        'visible_team_id' => 'setVisibleTeamId',
        'visible_user_ids' => 'setVisibleUserIds',
        'customfields' => 'setCustomfields',
        'addresses' => 'setAddresses',
        'contactinfos' => 'setContactinfos',
        'dates' => 'setDates',
        'tags' => 'setTags',
        'links' => 'setLinks',
        'organisationlinks' => 'setOrganisationlinks'
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
        'organisation_id' => 'getOrganisationId',
        'organisation_name' => 'getOrganisationName',
        'background' => 'getBackground',
        'image_url' => 'getImageUrl',
        'owner_user_id' => 'getOwnerUserId',
        'date_created_utc' => 'getDateCreatedUtc',
        'date_updated_utc' => 'getDateUpdatedUtc',
        'visible_to' => 'getVisibleTo',
        'visible_team_id' => 'getVisibleTeamId',
        'visible_user_ids' => 'getVisibleUserIds',
        'customfields' => 'getCustomfields',
        'addresses' => 'getAddresses',
        'contactinfos' => 'getContactinfos',
        'dates' => 'getDates',
        'tags' => 'getTags',
        'links' => 'getLinks',
        'organisationlinks' => 'getOrganisationlinks'
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
        $this->container['organisation_id'] = isset($data['organisation_id']) ? $data['organisation_id'] : null;
        $this->container['organisation_name'] = isset($data['organisation_name']) ? $data['organisation_name'] : null;
        $this->container['background'] = isset($data['background']) ? $data['background'] : null;
        $this->container['image_url'] = isset($data['image_url']) ? $data['image_url'] : null;
        $this->container['owner_user_id'] = isset($data['owner_user_id']) ? $data['owner_user_id'] : null;
        $this->container['date_created_utc'] = isset($data['date_created_utc']) ? $data['date_created_utc'] : null;
        $this->container['date_updated_utc'] = isset($data['date_updated_utc']) ? $data['date_updated_utc'] : null;
        $this->container['visible_to'] = isset($data['visible_to']) ? $data['visible_to'] : null;
        $this->container['visible_team_id'] = isset($data['visible_team_id']) ? $data['visible_team_id'] : null;
        $this->container['visible_user_ids'] = isset($data['visible_user_ids']) ? $data['visible_user_ids'] : null;
        $this->container['customfields'] = isset($data['customfields']) ? $data['customfields'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['contactinfos'] = isset($data['contactinfos']) ? $data['contactinfos'] : null;
        $this->container['dates'] = isset($data['dates']) ? $data['dates'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['organisationlinks'] = isset($data['organisationlinks']) ? $data['organisationlinks'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['organisation_name'] === null) {
            $invalid_properties[] = "'organisation_name' can't be null";
        }
        if ((strlen($this->container['organisation_name']) > 255)) {
            $invalid_properties[] = "invalid value for 'organisation_name', the character length must be smaller than or equal to 255.";
        }

        if ((strlen($this->container['organisation_name']) < 0)) {
            $invalid_properties[] = "invalid value for 'organisation_name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['background']) && (strlen($this->container['background']) > 4000)) {
            $invalid_properties[] = "invalid value for 'background', the character length must be smaller than or equal to 4000.";
        }

        if (!is_null($this->container['background']) && (strlen($this->container['background']) < 0)) {
            $invalid_properties[] = "invalid value for 'background', the character length must be bigger than or equal to 0.";
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
        if ($this->container['organisation_name'] === null) {
            return false;
        }
        if (strlen($this->container['organisation_name']) > 255) {
            return false;
        }
        if (strlen($this->container['organisation_name']) < 0) {
            return false;
        }
        if (strlen($this->container['background']) > 4000) {
            return false;
        }
        if (strlen($this->container['background']) < 0) {
            return false;
        }
        return true;
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
     * @param int $organisation_id Unique ID for the Organisation record
     * @return $this
     */
    public function setOrganisationId($organisation_id)
    {
        $this->container['organisation_id'] = $organisation_id;

        return $this;
    }

    /**
     * Gets organisation_name
     * @return string
     */
    public function getOrganisationName()
    {
        return $this->container['organisation_name'];
    }

    /**
     * Sets organisation_name
     * @param string $organisation_name Name of the Organisation (required)
     * @return $this
     */
    public function setOrganisationName($organisation_name)
    {
        if (strlen($organisation_name) > 255) {
            throw new \InvalidArgumentException('invalid length for $organisation_name when calling APIOrganisation., must be smaller than or equal to 255.');
        }
        if (strlen($organisation_name) < 0) {
            throw new \InvalidArgumentException('invalid length for $organisation_name when calling APIOrganisation., must be bigger than or equal to 0.');
        }
        $this->container['organisation_name'] = $organisation_name;

        return $this;
    }

    /**
     * Gets background
     * @return string
     */
    public function getBackground()
    {
        return $this->container['background'];
    }

    /**
     * Sets background
     * @param string $background Additional background information
     * @return $this
     */
    public function setBackground($background)
    {
        if (strlen($background) > 4000) {
            throw new \InvalidArgumentException('invalid length for $background when calling APIOrganisation., must be smaller than or equal to 4000.');
        }
        if (strlen($background) < 0) {
            throw new \InvalidArgumentException('invalid length for $background when calling APIOrganisation., must be bigger than or equal to 0.');
        }
        $this->container['background'] = $background;

        return $this;
    }

    /**
     * Gets image_url
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     * @param string $image_url URL of the Image for the Organisation
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

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
     * @param int $owner_user_id User ID of the Organisation record owner
     * @return $this
     */
    public function setOwnerUserId($owner_user_id)
    {
        $this->container['owner_user_id'] = $owner_user_id;

        return $this;
    }

    /**
     * Gets date_created_utc
     * @return \DateTime
     */
    public function getDateCreatedUtc()
    {
        return $this->container['date_created_utc'];
    }

    /**
     * Sets date_created_utc
     * @param \DateTime $date_created_utc Date and time Organisation record created, as Coordinated Universal Time
     * @return $this
     */
    public function setDateCreatedUtc($date_created_utc)
    {
        $this->container['date_created_utc'] = $date_created_utc;

        return $this;
    }

    /**
     * Gets date_updated_utc
     * @return \DateTime
     */
    public function getDateUpdatedUtc()
    {
        return $this->container['date_updated_utc'];
    }

    /**
     * Sets date_updated_utc
     * @param \DateTime $date_updated_utc Date and time Organisation record updated, as Coordinated Universal Time
     * @return $this
     */
    public function setDateUpdatedUtc($date_updated_utc)
    {
        $this->container['date_updated_utc'] = $date_updated_utc;

        return $this;
    }

    /**
     * Gets visible_to
     * @return string
     */
    public function getVisibleTo()
    {
        return $this->container['visible_to'];
    }

    /**
     * Sets visible_to
     * @param string $visible_to Visible To: Everyone, Owner, Team or Individuals
     * @return $this
     */
    public function setVisibleTo($visible_to)
    {
        $this->container['visible_to'] = $visible_to;

        return $this;
    }

    /**
     * Gets visible_team_id
     * @return int
     */
    public function getVisibleTeamId()
    {
        return $this->container['visible_team_id'];
    }

    /**
     * Sets visible_team_id
     * @param int $visible_team_id If VISIBLE_TO is 'Team', the TEAM_ID
     * @return $this
     */
    public function setVisibleTeamId($visible_team_id)
    {
        $this->container['visible_team_id'] = $visible_team_id;

        return $this;
    }

    /**
     * Gets visible_user_ids
     * @return string
     */
    public function getVisibleUserIds()
    {
        return $this->container['visible_user_ids'];
    }

    /**
     * Sets visible_user_ids
     * @param string $visible_user_ids If VISIBLE_TO is 'Individuals', a comma separated list of User IDs
     * @return $this
     */
    public function setVisibleUserIds($visible_user_ids)
    {
        $this->container['visible_user_ids'] = $visible_user_ids;

        return $this;
    }

    /**
     * Gets customfields
     * @return \Swagger\Client\Model\APICustomField[]
     */
    public function getCustomfields()
    {
        return $this->container['customfields'];
    }

    /**
     * Sets customfields
     * @param \Swagger\Client\Model\APICustomField[] $customfields Set of Custom Fields atttached to the Organisation
     * @return $this
     */
    public function setCustomfields($customfields)
    {
        $this->container['customfields'] = $customfields;

        return $this;
    }

    /**
     * Gets addresses
     * @return \Swagger\Client\Model\APIAddress[]
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     * @param \Swagger\Client\Model\APIAddress[] $addresses Set of Addresses attached to the Organisation
     * @return $this
     */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets contactinfos
     * @return \Swagger\Client\Model\APIContactInfo[]
     */
    public function getContactinfos()
    {
        return $this->container['contactinfos'];
    }

    /**
     * Sets contactinfos
     * @param \Swagger\Client\Model\APIContactInfo[] $contactinfos Set of Contact Infos attached to the Organisation
     * @return $this
     */
    public function setContactinfos($contactinfos)
    {
        $this->container['contactinfos'] = $contactinfos;

        return $this;
    }

    /**
     * Gets dates
     * @return \Swagger\Client\Model\APIOrganisationDate[]
     */
    public function getDates()
    {
        return $this->container['dates'];
    }

    /**
     * Sets dates
     * @param \Swagger\Client\Model\APIOrganisationDate[] $dates Set of Dates to Remember attached to the Organisation
     * @return $this
     */
    public function setDates($dates)
    {
        $this->container['dates'] = $dates;

        return $this;
    }

    /**
     * Gets tags
     * @return \Swagger\Client\Model\APITag[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     * @param \Swagger\Client\Model\APITag[] $tags Set of Tags attached to the Organisation
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets links
     * @return \Swagger\Client\Model\APILink[]
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \Swagger\Client\Model\APILink[] $links Set of Links attached to the Organisation
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets organisationlinks
     * @return \Swagger\Client\Model\APIOrganisationLink[]
     */
    public function getOrganisationlinks()
    {
        return $this->container['organisationlinks'];
    }

    /**
     * Sets organisationlinks
     * @param \Swagger\Client\Model\APIOrganisationLink[] $organisationlinks Set of Links to other Organisations attached to the Organisation
     * @return $this
     */
    public function setOrganisationlinks($organisationlinks)
    {
        $this->container['organisationlinks'] = $organisationlinks;

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

