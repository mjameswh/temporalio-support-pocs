<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/common/v1/message.proto

namespace Temporal\Api\Common\V1\Callback;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.common.v1.Callback.Nexus</code>
 */
class Nexus extends \Google\Protobuf\Internal\Message
{
    /**
     * Callback URL.
     * (-- api-linter: core::0140::uri=disabled
     *     aip.dev/not-precedent: Not following this guideline. --)
     *
     * Generated from protobuf field <code>string url = 1;</code>
     */
    protected $url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $url
     *           Callback URL.
     *           (-- api-linter: core::0140::uri=disabled
     *               aip.dev/not-precedent: Not following this guideline. --)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Common\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Callback URL.
     * (-- api-linter: core::0140::uri=disabled
     *     aip.dev/not-precedent: Not following this guideline. --)
     *
     * Generated from protobuf field <code>string url = 1;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Callback URL.
     * (-- api-linter: core::0140::uri=disabled
     *     aip.dev/not-precedent: Not following this guideline. --)
     *
     * Generated from protobuf field <code>string url = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Nexus::class, \Temporal\Api\Common\V1\Callback_Nexus::class);
