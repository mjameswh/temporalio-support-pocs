<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: centrifugo/proxy/v1/proxy.proto

namespace RoadRunner\Centrifugal\Proxy\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>centrifugal.centrifugo.proxy.ChannelsCapability</code>
 */
class ChannelsCapability extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string channels = 1;</code>
     */
    private $channels;
    /**
     * Generated from protobuf field <code>repeated string allow = 2;</code>
     */
    private $allow;
    /**
     * Generated from protobuf field <code>string match = 3;</code>
     */
    protected $match = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $channels
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $allow
     *     @type string $match
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\Centrifugal\Proxy\DTO\V1\GPBMetadata\Proxy::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string channels = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChannels()
    {
        return $this->channels;
    }

    /**
     * Generated from protobuf field <code>repeated string channels = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChannels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->channels = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string allow = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllow()
    {
        return $this->allow;
    }

    /**
     * Generated from protobuf field <code>repeated string allow = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllow($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->allow = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string match = 3;</code>
     * @return string
     */
    public function getMatch()
    {
        return $this->match;
    }

    /**
     * Generated from protobuf field <code>string match = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMatch($var)
    {
        GPBUtil::checkString($var, True);
        $this->match = $var;

        return $this;
    }

}

