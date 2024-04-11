<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: centrifugo/api/v1/api.proto

namespace RoadRunner\Centrifugal\API\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>centrifugal.centrifugo.api.Metrics</code>
 */
class Metrics extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>double interval = 1;</code>
     */
    protected $interval = 0.0;
    /**
     * Generated from protobuf field <code>map<string, double> items = 2;</code>
     */
    private $items;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $interval
     *     @type array|\Google\Protobuf\Internal\MapField $items
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\Centrifugal\API\DTO\V1\GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>double interval = 1;</code>
     * @return float
     */
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     * Generated from protobuf field <code>double interval = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setInterval($var)
    {
        GPBUtil::checkDouble($var);
        $this->interval = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, double> items = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Generated from protobuf field <code>map<string, double> items = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::DOUBLE);
        $this->items = $arr;

        return $this;
    }

}

