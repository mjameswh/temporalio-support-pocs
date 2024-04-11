<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: centrifugo/api/v1/api.proto

namespace RoadRunner\Centrifugal\API\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>centrifugal.centrifugo.api.ConnectionsResult</code>
 */
class ConnectionsResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>map<string, .centrifugal.centrifugo.api.ConnectionInfo> connections = 1;</code>
     */
    private $connections;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $connections
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\Centrifugal\API\DTO\V1\GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>map<string, .centrifugal.centrifugo.api.ConnectionInfo> connections = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getConnections()
    {
        return $this->connections;
    }

    /**
     * Generated from protobuf field <code>map<string, .centrifugal.centrifugo.api.ConnectionInfo> connections = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setConnections($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \RoadRunner\Centrifugal\API\DTO\V1\ConnectionInfo::class);
        $this->connections = $arr;

        return $this;
    }

}

