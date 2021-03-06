<?php
/**
 * APIOpportunity
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
 * APIOpportunity Class Doc Comment
 *
 * @category    Class */
 // @description APIOpportunity
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class APIOpportunity implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'APIOpportunity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'opportunity_id' => 'int',
        'opportunity_name' => 'string',
        'opportunity_details' => 'string',
        'probability' => 'int',
        'bid_currency' => 'string',
        'bid_amount' => 'int',
        'bid_type' => 'string',
        'bid_duration' => 'int',
        'opportunity_value' => 'int',
        'forecast_close_date' => '\DateTime',
        'actual_close_date' => '\DateTime',
        'category_id' => 'int',
        'pipeline_id' => 'int',
        'stage_id' => 'int',
        'opportunity_state' => 'string',
        'opportunity_state_reason_id' => 'int',
        'image_url' => 'string',
        'responsible_user_id' => 'int',
        'owner_user_id' => 'int',
        'date_created_utc' => '\DateTime',
        'date_updated_utc' => '\DateTime',
        'visible_to' => 'string',
        'visible_team_id' => 'int',
        'visible_user_ids' => 'string',
        'customfields' => '\Swagger\Client\Model\APICustomField[]',
        'tags' => '\Swagger\Client\Model\APITag[]',
        'links' => '\Swagger\Client\Model\APILink[]'
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
        'opportunity_id' => 'OPPORTUNITY_ID',
        'opportunity_name' => 'OPPORTUNITY_NAME',
        'opportunity_details' => 'OPPORTUNITY_DETAILS',
        'probability' => 'PROBABILITY',
        'bid_currency' => 'BID_CURRENCY',
        'bid_amount' => 'BID_AMOUNT',
        'bid_type' => 'BID_TYPE',
        'bid_duration' => 'BID_DURATION',
        'opportunity_value' => 'OPPORTUNITY_VALUE',
        'forecast_close_date' => 'FORECAST_CLOSE_DATE',
        'actual_close_date' => 'ACTUAL_CLOSE_DATE',
        'category_id' => 'CATEGORY_ID',
        'pipeline_id' => 'PIPELINE_ID',
        'stage_id' => 'STAGE_ID',
        'opportunity_state' => 'OPPORTUNITY_STATE',
        'opportunity_state_reason_id' => 'OPPORTUNITY_STATE_REASON_ID',
        'image_url' => 'IMAGE_URL',
        'responsible_user_id' => 'RESPONSIBLE_USER_ID',
        'owner_user_id' => 'OWNER_USER_ID',
        'date_created_utc' => 'DATE_CREATED_UTC',
        'date_updated_utc' => 'DATE_UPDATED_UTC',
        'visible_to' => 'VISIBLE_TO',
        'visible_team_id' => 'VISIBLE_TEAM_ID',
        'visible_user_ids' => 'VISIBLE_USER_IDS',
        'customfields' => 'CUSTOMFIELDS',
        'tags' => 'TAGS',
        'links' => 'LINKS'
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
        'opportunity_id' => 'setOpportunityId',
        'opportunity_name' => 'setOpportunityName',
        'opportunity_details' => 'setOpportunityDetails',
        'probability' => 'setProbability',
        'bid_currency' => 'setBidCurrency',
        'bid_amount' => 'setBidAmount',
        'bid_type' => 'setBidType',
        'bid_duration' => 'setBidDuration',
        'opportunity_value' => 'setOpportunityValue',
        'forecast_close_date' => 'setForecastCloseDate',
        'actual_close_date' => 'setActualCloseDate',
        'category_id' => 'setCategoryId',
        'pipeline_id' => 'setPipelineId',
        'stage_id' => 'setStageId',
        'opportunity_state' => 'setOpportunityState',
        'opportunity_state_reason_id' => 'setOpportunityStateReasonId',
        'image_url' => 'setImageUrl',
        'responsible_user_id' => 'setResponsibleUserId',
        'owner_user_id' => 'setOwnerUserId',
        'date_created_utc' => 'setDateCreatedUtc',
        'date_updated_utc' => 'setDateUpdatedUtc',
        'visible_to' => 'setVisibleTo',
        'visible_team_id' => 'setVisibleTeamId',
        'visible_user_ids' => 'setVisibleUserIds',
        'customfields' => 'setCustomfields',
        'tags' => 'setTags',
        'links' => 'setLinks'
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
        'opportunity_id' => 'getOpportunityId',
        'opportunity_name' => 'getOpportunityName',
        'opportunity_details' => 'getOpportunityDetails',
        'probability' => 'getProbability',
        'bid_currency' => 'getBidCurrency',
        'bid_amount' => 'getBidAmount',
        'bid_type' => 'getBidType',
        'bid_duration' => 'getBidDuration',
        'opportunity_value' => 'getOpportunityValue',
        'forecast_close_date' => 'getForecastCloseDate',
        'actual_close_date' => 'getActualCloseDate',
        'category_id' => 'getCategoryId',
        'pipeline_id' => 'getPipelineId',
        'stage_id' => 'getStageId',
        'opportunity_state' => 'getOpportunityState',
        'opportunity_state_reason_id' => 'getOpportunityStateReasonId',
        'image_url' => 'getImageUrl',
        'responsible_user_id' => 'getResponsibleUserId',
        'owner_user_id' => 'getOwnerUserId',
        'date_created_utc' => 'getDateCreatedUtc',
        'date_updated_utc' => 'getDateUpdatedUtc',
        'visible_to' => 'getVisibleTo',
        'visible_team_id' => 'getVisibleTeamId',
        'visible_user_ids' => 'getVisibleUserIds',
        'customfields' => 'getCustomfields',
        'tags' => 'getTags',
        'links' => 'getLinks'
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
        $this->container['opportunity_id'] = isset($data['opportunity_id']) ? $data['opportunity_id'] : null;
        $this->container['opportunity_name'] = isset($data['opportunity_name']) ? $data['opportunity_name'] : null;
        $this->container['opportunity_details'] = isset($data['opportunity_details']) ? $data['opportunity_details'] : null;
        $this->container['probability'] = isset($data['probability']) ? $data['probability'] : null;
        $this->container['bid_currency'] = isset($data['bid_currency']) ? $data['bid_currency'] : null;
        $this->container['bid_amount'] = isset($data['bid_amount']) ? $data['bid_amount'] : null;
        $this->container['bid_type'] = isset($data['bid_type']) ? $data['bid_type'] : null;
        $this->container['bid_duration'] = isset($data['bid_duration']) ? $data['bid_duration'] : null;
        $this->container['opportunity_value'] = isset($data['opportunity_value']) ? $data['opportunity_value'] : null;
        $this->container['forecast_close_date'] = isset($data['forecast_close_date']) ? $data['forecast_close_date'] : null;
        $this->container['actual_close_date'] = isset($data['actual_close_date']) ? $data['actual_close_date'] : null;
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['pipeline_id'] = isset($data['pipeline_id']) ? $data['pipeline_id'] : null;
        $this->container['stage_id'] = isset($data['stage_id']) ? $data['stage_id'] : null;
        $this->container['opportunity_state'] = isset($data['opportunity_state']) ? $data['opportunity_state'] : null;
        $this->container['opportunity_state_reason_id'] = isset($data['opportunity_state_reason_id']) ? $data['opportunity_state_reason_id'] : null;
        $this->container['image_url'] = isset($data['image_url']) ? $data['image_url'] : null;
        $this->container['responsible_user_id'] = isset($data['responsible_user_id']) ? $data['responsible_user_id'] : null;
        $this->container['owner_user_id'] = isset($data['owner_user_id']) ? $data['owner_user_id'] : null;
        $this->container['date_created_utc'] = isset($data['date_created_utc']) ? $data['date_created_utc'] : null;
        $this->container['date_updated_utc'] = isset($data['date_updated_utc']) ? $data['date_updated_utc'] : null;
        $this->container['visible_to'] = isset($data['visible_to']) ? $data['visible_to'] : null;
        $this->container['visible_team_id'] = isset($data['visible_team_id']) ? $data['visible_team_id'] : null;
        $this->container['visible_user_ids'] = isset($data['visible_user_ids']) ? $data['visible_user_ids'] : null;
        $this->container['customfields'] = isset($data['customfields']) ? $data['customfields'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if (!is_null($this->container['opportunity_name']) && (strlen($this->container['opportunity_name']) > 255)) {
            $invalid_properties[] = "invalid value for 'opportunity_name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['opportunity_name']) && (strlen($this->container['opportunity_name']) < 0)) {
            $invalid_properties[] = "invalid value for 'opportunity_name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['opportunity_details']) && (strlen($this->container['opportunity_details']) > 4000)) {
            $invalid_properties[] = "invalid value for 'opportunity_details', the character length must be smaller than or equal to 4000.";
        }

        if (!is_null($this->container['opportunity_details']) && (strlen($this->container['opportunity_details']) < 0)) {
            $invalid_properties[] = "invalid value for 'opportunity_details', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['opportunity_state'] === null) {
            $invalid_properties[] = "'opportunity_state' can't be null";
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
        if (strlen($this->container['opportunity_name']) > 255) {
            return false;
        }
        if (strlen($this->container['opportunity_name']) < 0) {
            return false;
        }
        if (strlen($this->container['opportunity_details']) > 4000) {
            return false;
        }
        if (strlen($this->container['opportunity_details']) < 0) {
            return false;
        }
        if ($this->container['opportunity_state'] === null) {
            return false;
        }
        return true;
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
     * @param int $opportunity_id Unique ID for the Opportunity record
     * @return $this
     */
    public function setOpportunityId($opportunity_id)
    {
        $this->container['opportunity_id'] = $opportunity_id;

        return $this;
    }

    /**
     * Gets opportunity_name
     * @return string
     */
    public function getOpportunityName()
    {
        return $this->container['opportunity_name'];
    }

    /**
     * Sets opportunity_name
     * @param string $opportunity_name Name of the Opportunity
     * @return $this
     */
    public function setOpportunityName($opportunity_name)
    {
        if (strlen($opportunity_name) > 255) {
            throw new \InvalidArgumentException('invalid length for $opportunity_name when calling APIOpportunity., must be smaller than or equal to 255.');
        }
        if (strlen($opportunity_name) < 0) {
            throw new \InvalidArgumentException('invalid length for $opportunity_name when calling APIOpportunity., must be bigger than or equal to 0.');
        }
        $this->container['opportunity_name'] = $opportunity_name;

        return $this;
    }

    /**
     * Gets opportunity_details
     * @return string
     */
    public function getOpportunityDetails()
    {
        return $this->container['opportunity_details'];
    }

    /**
     * Sets opportunity_details
     * @param string $opportunity_details Opportunity details
     * @return $this
     */
    public function setOpportunityDetails($opportunity_details)
    {
        if (strlen($opportunity_details) > 4000) {
            throw new \InvalidArgumentException('invalid length for $opportunity_details when calling APIOpportunity., must be smaller than or equal to 4000.');
        }
        if (strlen($opportunity_details) < 0) {
            throw new \InvalidArgumentException('invalid length for $opportunity_details when calling APIOpportunity., must be bigger than or equal to 0.');
        }
        $this->container['opportunity_details'] = $opportunity_details;

        return $this;
    }

    /**
     * Gets probability
     * @return int
     */
    public function getProbability()
    {
        return $this->container['probability'];
    }

    /**
     * Sets probability
     * @param int $probability Percentage probability of winning the Opportunity, as an integer value from 0 to 100
     * @return $this
     */
    public function setProbability($probability)
    {
        $this->container['probability'] = $probability;

        return $this;
    }

    /**
     * Gets bid_currency
     * @return string
     */
    public function getBidCurrency()
    {
        return $this->container['bid_currency'];
    }

    /**
     * Sets bid_currency
     * @param string $bid_currency Three character code for a currency
     * @return $this
     */
    public function setBidCurrency($bid_currency)
    {
        $this->container['bid_currency'] = $bid_currency;

        return $this;
    }

    /**
     * Gets bid_amount
     * @return int
     */
    public function getBidAmount()
    {
        return $this->container['bid_amount'];
    }

    /**
     * Sets bid_amount
     * @param int $bid_amount Potential value of the Opportunity, as an integer value
     * @return $this
     */
    public function setBidAmount($bid_amount)
    {
        $this->container['bid_amount'] = $bid_amount;

        return $this;
    }

    /**
     * Gets bid_type
     * @return string
     */
    public function getBidType()
    {
        return $this->container['bid_type'];
    }

    /**
     * Sets bid_type
     * @param string $bid_type Type of bid for the Opportunity: Fixed Bid, Per Hour, Per Day, Per Week, Per Month or Per Year
     * @return $this
     */
    public function setBidType($bid_type)
    {
        $this->container['bid_type'] = $bid_type;

        return $this;
    }

    /**
     * Gets bid_duration
     * @return int
     */
    public function getBidDuration()
    {
        return $this->container['bid_duration'];
    }

    /**
     * Sets bid_duration
     * @param int $bid_duration Duration of the bid of the Opportunity, if per hour/day/etc as an integer value
     * @return $this
     */
    public function setBidDuration($bid_duration)
    {
        $this->container['bid_duration'] = $bid_duration;

        return $this;
    }

    /**
     * Gets opportunity_value
     * @return int
     */
    public function getOpportunityValue()
    {
        return $this->container['opportunity_value'];
    }

    /**
     * Sets opportunity_value
     * @param int $opportunity_value Total value of the Opportunity, calculated based on BID_AMOUNT, BID_TYPE and BID_DURATION. This is a read-only field.
     * @return $this
     */
    public function setOpportunityValue($opportunity_value)
    {
        $this->container['opportunity_value'] = $opportunity_value;

        return $this;
    }

    /**
     * Gets forecast_close_date
     * @return \DateTime
     */
    public function getForecastCloseDate()
    {
        return $this->container['forecast_close_date'];
    }

    /**
     * Sets forecast_close_date
     * @param \DateTime $forecast_close_date Forecast close date of the Opportunity, in YYYY-MM-DD format
     * @return $this
     */
    public function setForecastCloseDate($forecast_close_date)
    {
        $this->container['forecast_close_date'] = $forecast_close_date;

        return $this;
    }

    /**
     * Gets actual_close_date
     * @return \DateTime
     */
    public function getActualCloseDate()
    {
        return $this->container['actual_close_date'];
    }

    /**
     * Sets actual_close_date
     * @param \DateTime $actual_close_date Actual close date of the Opportunity, in YYYY-MM-DD format
     * @return $this
     */
    public function setActualCloseDate($actual_close_date)
    {
        $this->container['actual_close_date'] = $actual_close_date;

        return $this;
    }

    /**
     * Gets category_id
     * @return int
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     * @param int $category_id The Category ID of the Opportunity, if it has been assigned to one
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets pipeline_id
     * @return int
     */
    public function getPipelineId()
    {
        return $this->container['pipeline_id'];
    }

    /**
     * Sets pipeline_id
     * @param int $pipeline_id The Pipeline ID that the Opportunity is in, if it has been assigned to one. Note: This is a read-only field, to update the Pipeline please use the /Opportunities/{id}/Pipeline endpoint.
     * @return $this
     */
    public function setPipelineId($pipeline_id)
    {
        $this->container['pipeline_id'] = $pipeline_id;

        return $this;
    }

    /**
     * Gets stage_id
     * @return int
     */
    public function getStageId()
    {
        return $this->container['stage_id'];
    }

    /**
     * Sets stage_id
     * @param int $stage_id The Stage ID of the Stage that the Opportunity is in, if it has been assigned to one. Note: This is a read-only field, to update the Pipeline Stage please use the /Opportunities/{id}/PipelineStage endpoint.
     * @return $this
     */
    public function setStageId($stage_id)
    {
        $this->container['stage_id'] = $stage_id;

        return $this;
    }

    /**
     * Gets opportunity_state
     * @return string
     */
    public function getOpportunityState()
    {
        return $this->container['opportunity_state'];
    }

    /**
     * Sets opportunity_state
     * @param string $opportunity_state Opportunity State (required): Open, Abandoned, Lost, Suspended, Won
     * @return $this
     */
    public function setOpportunityState($opportunity_state)
    {
        $this->container['opportunity_state'] = $opportunity_state;

        return $this;
    }

    /**
     * Gets opportunity_state_reason_id
     * @return int
     */
    public function getOpportunityStateReasonId()
    {
        return $this->container['opportunity_state_reason_id'];
    }

    /**
     * Sets opportunity_state_reason_id
     * @param int $opportunity_state_reason_id Opportunity State Reason ID. Optional, if specified this field must have a valid State Reason ID.
     * @return $this
     */
    public function setOpportunityStateReasonId($opportunity_state_reason_id)
    {
        $this->container['opportunity_state_reason_id'] = $opportunity_state_reason_id;

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
     * @param string $image_url URL of the Image for the Opportunity
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets responsible_user_id
     * @return int
     */
    public function getResponsibleUserId()
    {
        return $this->container['responsible_user_id'];
    }

    /**
     * Sets responsible_user_id
     * @param int $responsible_user_id ID of the responsible user for the Opportunity
     * @return $this
     */
    public function setResponsibleUserId($responsible_user_id)
    {
        $this->container['responsible_user_id'] = $responsible_user_id;

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
     * @param int $owner_user_id User ID of the record owner
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
     * @param \DateTime $date_created_utc Date and time Opportunity record created, as Coordinated Universal Time
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
     * @param \DateTime $date_updated_utc Date and time Opportunity record updated, as Coordinated Universal Time
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
     * @param \Swagger\Client\Model\APICustomField[] $customfields Set of Custom Fields attached to the Opportunity
     * @return $this
     */
    public function setCustomfields($customfields)
    {
        $this->container['customfields'] = $customfields;

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
     * @param \Swagger\Client\Model\APITag[] $tags Set of Tags attached to the Opportunity
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
     * @param \Swagger\Client\Model\APILink[] $links Set of Links attached to the Opportunity
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

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


