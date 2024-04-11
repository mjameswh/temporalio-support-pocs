<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: centrifugo/api/v1/api.proto

namespace RoadRunner\Centrifugal\API\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>centrifugal.centrifugo.api.PushRecipient</code>
 */
class PushRecipient extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.DeviceFilter filter = 1;</code>
     */
    protected $filter = null;
    /**
     * Generated from protobuf field <code>repeated string fcm_tokens = 2;</code>
     */
    private $fcm_tokens;
    /**
     * Generated from protobuf field <code>string fcm_topic = 3;</code>
     */
    protected $fcm_topic = '';
    /**
     * Generated from protobuf field <code>string fcm_condition = 4;</code>
     */
    protected $fcm_condition = '';
    /**
     * Generated from protobuf field <code>repeated string hms_tokens = 5;</code>
     */
    private $hms_tokens;
    /**
     * Generated from protobuf field <code>string hms_topic = 6;</code>
     */
    protected $hms_topic = '';
    /**
     * Generated from protobuf field <code>string hms_condition = 7;</code>
     */
    protected $hms_condition = '';
    /**
     * Generated from protobuf field <code>repeated string apns_tokens = 8;</code>
     */
    private $apns_tokens;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\DeviceFilter $filter
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $fcm_tokens
     *     @type string $fcm_topic
     *     @type string $fcm_condition
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $hms_tokens
     *     @type string $hms_topic
     *     @type string $hms_condition
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $apns_tokens
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\Centrifugal\API\DTO\V1\GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.DeviceFilter filter = 1;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\DeviceFilter|null
     */
    public function getFilter()
    {
        return $this->filter;
    }

    public function hasFilter()
    {
        return isset($this->filter);
    }

    public function clearFilter()
    {
        unset($this->filter);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.DeviceFilter filter = 1;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\DeviceFilter $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\DeviceFilter::class);
        $this->filter = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string fcm_tokens = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFcmTokens()
    {
        return $this->fcm_tokens;
    }

    /**
     * Generated from protobuf field <code>repeated string fcm_tokens = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFcmTokens($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->fcm_tokens = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string fcm_topic = 3;</code>
     * @return string
     */
    public function getFcmTopic()
    {
        return $this->fcm_topic;
    }

    /**
     * Generated from protobuf field <code>string fcm_topic = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFcmTopic($var)
    {
        GPBUtil::checkString($var, True);
        $this->fcm_topic = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string fcm_condition = 4;</code>
     * @return string
     */
    public function getFcmCondition()
    {
        return $this->fcm_condition;
    }

    /**
     * Generated from protobuf field <code>string fcm_condition = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFcmCondition($var)
    {
        GPBUtil::checkString($var, True);
        $this->fcm_condition = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string hms_tokens = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHmsTokens()
    {
        return $this->hms_tokens;
    }

    /**
     * Generated from protobuf field <code>repeated string hms_tokens = 5;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHmsTokens($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->hms_tokens = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string hms_topic = 6;</code>
     * @return string
     */
    public function getHmsTopic()
    {
        return $this->hms_topic;
    }

    /**
     * Generated from protobuf field <code>string hms_topic = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setHmsTopic($var)
    {
        GPBUtil::checkString($var, True);
        $this->hms_topic = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string hms_condition = 7;</code>
     * @return string
     */
    public function getHmsCondition()
    {
        return $this->hms_condition;
    }

    /**
     * Generated from protobuf field <code>string hms_condition = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setHmsCondition($var)
    {
        GPBUtil::checkString($var, True);
        $this->hms_condition = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string apns_tokens = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getApnsTokens()
    {
        return $this->apns_tokens;
    }

    /**
     * Generated from protobuf field <code>repeated string apns_tokens = 8;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setApnsTokens($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->apns_tokens = $arr;

        return $this;
    }

}
