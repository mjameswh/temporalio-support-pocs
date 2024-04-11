<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: centrifugo/api/v1/api.proto

namespace RoadRunner\Centrifugal\API\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>centrifugal.centrifugo.api.ChannelInfo</code>
 */
class ChannelInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 num_clients = 1;</code>
     */
    protected $num_clients = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $num_clients
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\Centrifugal\API\DTO\V1\GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 num_clients = 1;</code>
     * @return int
     */
    public function getNumClients()
    {
        return $this->num_clients;
    }

    /**
     * Generated from protobuf field <code>uint32 num_clients = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setNumClients($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_clients = $var;

        return $this;
    }

}

