<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: centrifugo/api/v1/api.proto

namespace RoadRunner\Centrifugal\API\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>centrifugal.centrifugo.api.DeviceUpdateRequest</code>
 */
class DeviceUpdateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string ids = 1;</code>
     */
    private $ids;
    /**
     * Generated from protobuf field <code>repeated string users = 2;</code>
     */
    private $users;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.DeviceUserUpdate user_update = 4;</code>
     */
    protected $user_update = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.DeviceMetaUpdate meta_update = 5;</code>
     */
    protected $meta_update = null;
    /**
     *DeviceLabelsUpdate labels_update = 7;
     *DeviceScoresUpdate scores_update = 8;
     *
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.DeviceTopicsUpdate topics_update = 6;</code>
     */
    protected $topics_update = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $ids
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $users
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\DeviceUserUpdate $user_update
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\DeviceMetaUpdate $meta_update
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\DeviceTopicsUpdate $topics_update
     *          DeviceLabelsUpdate labels_update = 7;
     *          DeviceScoresUpdate scores_update = 8;
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\Centrifugal\API\DTO\V1\GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string ids = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * Generated from protobuf field <code>repeated string ids = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ids = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string users = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Generated from protobuf field <code>repeated string users = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUsers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->users = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.DeviceUserUpdate user_update = 4;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\DeviceUserUpdate|null
     */
    public function getUserUpdate()
    {
        return $this->user_update;
    }

    public function hasUserUpdate()
    {
        return isset($this->user_update);
    }

    public function clearUserUpdate()
    {
        unset($this->user_update);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.DeviceUserUpdate user_update = 4;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\DeviceUserUpdate $var
     * @return $this
     */
    public function setUserUpdate($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\DeviceUserUpdate::class);
        $this->user_update = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.DeviceMetaUpdate meta_update = 5;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\DeviceMetaUpdate|null
     */
    public function getMetaUpdate()
    {
        return $this->meta_update;
    }

    public function hasMetaUpdate()
    {
        return isset($this->meta_update);
    }

    public function clearMetaUpdate()
    {
        unset($this->meta_update);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.DeviceMetaUpdate meta_update = 5;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\DeviceMetaUpdate $var
     * @return $this
     */
    public function setMetaUpdate($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\DeviceMetaUpdate::class);
        $this->meta_update = $var;

        return $this;
    }

    /**
     *DeviceLabelsUpdate labels_update = 7;
     *DeviceScoresUpdate scores_update = 8;
     *
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.DeviceTopicsUpdate topics_update = 6;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\DeviceTopicsUpdate|null
     */
    public function getTopicsUpdate()
    {
        return $this->topics_update;
    }

    public function hasTopicsUpdate()
    {
        return isset($this->topics_update);
    }

    public function clearTopicsUpdate()
    {
        unset($this->topics_update);
    }

    /**
     *DeviceLabelsUpdate labels_update = 7;
     *DeviceScoresUpdate scores_update = 8;
     *
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.DeviceTopicsUpdate topics_update = 6;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\DeviceTopicsUpdate $var
     * @return $this
     */
    public function setTopicsUpdate($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\DeviceTopicsUpdate::class);
        $this->topics_update = $var;

        return $this;
    }

}
