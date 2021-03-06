<?php
/**
 * CalendarEvent
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
 * CalendarEvent Class Doc Comment
 *
 * @category    Class */
 // @description APICalendarEvent
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CalendarEvent implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CalendarEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'event_id' => 'int',
        'title' => 'string',
        'location' => 'string',
        'details' => 'string',
        'start_date_utc' => '\DateTime',
        'end_date_utc' => '\DateTime',
        'all_day' => 'bool',
        'publicly_visible' => 'bool',
        'reminder_date_utc' => '\DateTime',
        'reminder_sent' => 'bool',
        'eventlinks' => '\Swagger\Client\Model\APIEventLink[]',
        'owner_user_id' => 'int',
        'date_created_utc' => '\DateTime',
        'date_updated_utc' => '\DateTime'
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
        'event_id' => 'EVENT_ID',
        'title' => 'TITLE',
        'location' => 'LOCATION',
        'details' => 'DETAILS',
        'start_date_utc' => 'START_DATE_UTC',
        'end_date_utc' => 'END_DATE_UTC',
        'all_day' => 'ALL_DAY',
        'publicly_visible' => 'PUBLICLY_VISIBLE',
        'reminder_date_utc' => 'REMINDER_DATE_UTC',
        'reminder_sent' => 'REMINDER_SENT',
        'eventlinks' => 'EVENTLINKS',
        'owner_user_id' => 'OWNER_USER_ID',
        'date_created_utc' => 'DATE_CREATED_UTC',
        'date_updated_utc' => 'DATE_UPDATED_UTC'
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
        'event_id' => 'setEventId',
        'title' => 'setTitle',
        'location' => 'setLocation',
        'details' => 'setDetails',
        'start_date_utc' => 'setStartDateUtc',
        'end_date_utc' => 'setEndDateUtc',
        'all_day' => 'setAllDay',
        'publicly_visible' => 'setPubliclyVisible',
        'reminder_date_utc' => 'setReminderDateUtc',
        'reminder_sent' => 'setReminderSent',
        'eventlinks' => 'setEventlinks',
        'owner_user_id' => 'setOwnerUserId',
        'date_created_utc' => 'setDateCreatedUtc',
        'date_updated_utc' => 'setDateUpdatedUtc'
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
        'event_id' => 'getEventId',
        'title' => 'getTitle',
        'location' => 'getLocation',
        'details' => 'getDetails',
        'start_date_utc' => 'getStartDateUtc',
        'end_date_utc' => 'getEndDateUtc',
        'all_day' => 'getAllDay',
        'publicly_visible' => 'getPubliclyVisible',
        'reminder_date_utc' => 'getReminderDateUtc',
        'reminder_sent' => 'getReminderSent',
        'eventlinks' => 'getEventlinks',
        'owner_user_id' => 'getOwnerUserId',
        'date_created_utc' => 'getDateCreatedUtc',
        'date_updated_utc' => 'getDateUpdatedUtc'
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
        $this->container['event_id'] = isset($data['event_id']) ? $data['event_id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['start_date_utc'] = isset($data['start_date_utc']) ? $data['start_date_utc'] : null;
        $this->container['end_date_utc'] = isset($data['end_date_utc']) ? $data['end_date_utc'] : null;
        $this->container['all_day'] = isset($data['all_day']) ? $data['all_day'] : null;
        $this->container['publicly_visible'] = isset($data['publicly_visible']) ? $data['publicly_visible'] : null;
        $this->container['reminder_date_utc'] = isset($data['reminder_date_utc']) ? $data['reminder_date_utc'] : null;
        $this->container['reminder_sent'] = isset($data['reminder_sent']) ? $data['reminder_sent'] : null;
        $this->container['eventlinks'] = isset($data['eventlinks']) ? $data['eventlinks'] : null;
        $this->container['owner_user_id'] = isset($data['owner_user_id']) ? $data['owner_user_id'] : null;
        $this->container['date_created_utc'] = isset($data['date_created_utc']) ? $data['date_created_utc'] : null;
        $this->container['date_updated_utc'] = isset($data['date_updated_utc']) ? $data['date_updated_utc'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['title'] === null) {
            $invalid_properties[] = "'title' can't be null";
        }
        if ((strlen($this->container['title']) > 255)) {
            $invalid_properties[] = "invalid value for 'title', the character length must be smaller than or equal to 255.";
        }

        if ((strlen($this->container['title']) < 0)) {
            $invalid_properties[] = "invalid value for 'title', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['location']) && (strlen($this->container['location']) > 255)) {
            $invalid_properties[] = "invalid value for 'location', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['location']) && (strlen($this->container['location']) < 0)) {
            $invalid_properties[] = "invalid value for 'location', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['details']) && (strlen($this->container['details']) > 255)) {
            $invalid_properties[] = "invalid value for 'details', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['details']) && (strlen($this->container['details']) < 0)) {
            $invalid_properties[] = "invalid value for 'details', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['start_date_utc'] === null) {
            $invalid_properties[] = "'start_date_utc' can't be null";
        }
        if ($this->container['end_date_utc'] === null) {
            $invalid_properties[] = "'end_date_utc' can't be null";
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
        if ($this->container['title'] === null) {
            return false;
        }
        if (strlen($this->container['title']) > 255) {
            return false;
        }
        if (strlen($this->container['title']) < 0) {
            return false;
        }
        if (strlen($this->container['location']) > 255) {
            return false;
        }
        if (strlen($this->container['location']) < 0) {
            return false;
        }
        if (strlen($this->container['details']) > 255) {
            return false;
        }
        if (strlen($this->container['details']) < 0) {
            return false;
        }
        if ($this->container['start_date_utc'] === null) {
            return false;
        }
        if ($this->container['end_date_utc'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets event_id
     * @return int
     */
    public function getEventId()
    {
        return $this->container['event_id'];
    }

    /**
     * Sets event_id
     * @param int $event_id Unique ID for event record
     * @return $this
     */
    public function setEventId($event_id)
    {
        $this->container['event_id'] = $event_id;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title Name or title of the event (required)
     * @return $this
     */
    public function setTitle($title)
    {
        if (strlen($title) > 255) {
            throw new \InvalidArgumentException('invalid length for $title when calling CalendarEvent., must be smaller than or equal to 255.');
        }
        if (strlen($title) < 0) {
            throw new \InvalidArgumentException('invalid length for $title when calling CalendarEvent., must be bigger than or equal to 0.');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets location
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     * @param string $location Location of the event
     * @return $this
     */
    public function setLocation($location)
    {
        if (strlen($location) > 255) {
            throw new \InvalidArgumentException('invalid length for $location when calling CalendarEvent., must be smaller than or equal to 255.');
        }
        if (strlen($location) < 0) {
            throw new \InvalidArgumentException('invalid length for $location when calling CalendarEvent., must be bigger than or equal to 0.');
        }
        $this->container['location'] = $location;

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
     * @param string $details Details of the event
     * @return $this
     */
    public function setDetails($details)
    {
        if (strlen($details) > 255) {
            throw new \InvalidArgumentException('invalid length for $details when calling CalendarEvent., must be smaller than or equal to 255.');
        }
        if (strlen($details) < 0) {
            throw new \InvalidArgumentException('invalid length for $details when calling CalendarEvent., must be bigger than or equal to 0.');
        }
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets start_date_utc
     * @return \DateTime
     */
    public function getStartDateUtc()
    {
        return $this->container['start_date_utc'];
    }

    /**
     * Sets start_date_utc
     * @param \DateTime $start_date_utc Start date and time of the event, as Coordinated Universal Time
     * @return $this
     */
    public function setStartDateUtc($start_date_utc)
    {
        $this->container['start_date_utc'] = $start_date_utc;

        return $this;
    }

    /**
     * Gets end_date_utc
     * @return \DateTime
     */
    public function getEndDateUtc()
    {
        return $this->container['end_date_utc'];
    }

    /**
     * Sets end_date_utc
     * @param \DateTime $end_date_utc End date and time of the event, as Coordinated Universal Time
     * @return $this
     */
    public function setEndDateUtc($end_date_utc)
    {
        $this->container['end_date_utc'] = $end_date_utc;

        return $this;
    }

    /**
     * Gets all_day
     * @return bool
     */
    public function getAllDay()
    {
        return $this->container['all_day'];
    }

    /**
     * Sets all_day
     * @param bool $all_day True, if event is an all-day event
     * @return $this
     */
    public function setAllDay($all_day)
    {
        $this->container['all_day'] = $all_day;

        return $this;
    }

    /**
     * Gets publicly_visible
     * @return bool
     */
    public function getPubliclyVisible()
    {
        return $this->container['publicly_visible'];
    }

    /**
     * Sets publicly_visible
     * @param bool $publicly_visible True, if event is visible to others
     * @return $this
     */
    public function setPubliclyVisible($publicly_visible)
    {
        $this->container['publicly_visible'] = $publicly_visible;

        return $this;
    }

    /**
     * Gets reminder_date_utc
     * @return \DateTime
     */
    public function getReminderDateUtc()
    {
        return $this->container['reminder_date_utc'];
    }

    /**
     * Sets reminder_date_utc
     * @param \DateTime $reminder_date_utc Reminder data and time of the event, as Coordinated Universal Time
     * @return $this
     */
    public function setReminderDateUtc($reminder_date_utc)
    {
        $this->container['reminder_date_utc'] = $reminder_date_utc;

        return $this;
    }

    /**
     * Gets reminder_sent
     * @return bool
     */
    public function getReminderSent()
    {
        return $this->container['reminder_sent'];
    }

    /**
     * Sets reminder_sent
     * @param bool $reminder_sent True, if a reminder was sent
     * @return $this
     */
    public function setReminderSent($reminder_sent)
    {
        $this->container['reminder_sent'] = $reminder_sent;

        return $this;
    }

    /**
     * Gets eventlinks
     * @return \Swagger\Client\Model\APIEventLink[]
     */
    public function getEventlinks()
    {
        return $this->container['eventlinks'];
    }

    /**
     * Sets eventlinks
     * @param \Swagger\Client\Model\APIEventLink[] $eventlinks Set of links attached to the Event
     * @return $this
     */
    public function setEventlinks($eventlinks)
    {
        $this->container['eventlinks'] = $eventlinks;

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
     * @param int $owner_user_id User ID of the event owner (must be a valid user ID)
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
     * @param \DateTime $date_created_utc Date and time event record created, as Coordinated Universal Time
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
     * @param \DateTime $date_updated_utc Date and time event record updated, as Coordinated Universal Time
     * @return $this
     */
    public function setDateUpdatedUtc($date_updated_utc)
    {
        $this->container['date_updated_utc'] = $date_updated_utc;

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


