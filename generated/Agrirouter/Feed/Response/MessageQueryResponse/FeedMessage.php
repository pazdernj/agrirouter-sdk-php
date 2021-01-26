<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: messaging/response/payload/feed/feed-response.proto

namespace Agrirouter\Feed\Response\MessageQueryResponse;

use Agrirouter\Feed\Response\MessageQueryResponse_FeedMessage;
use Agrirouter\Feed\Response\MessageQueryResponse_Header;
use Google\Protobuf\Any;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Messaging\Response\Payload\Feed\FeedResponse;

/**
 * Generated from protobuf message <code>agrirouter.feed.response.MessageQueryResponse.FeedMessage</code>
 */
class FeedMessage extends Message
{
    /**
     * Message Header Information for identification purposes
     *
     * Generated from protobuf field <code>.agrirouter.feed.response.MessageQueryResponse.Header header = 1;</code>
     */
    protected $header = null;
    /**
     * The actual payload content to be decoded
     *
     * Generated from protobuf field <code>.google.protobuf.Any content = 2;</code>
     */
    protected $content = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type Header $header
     *           Message Header Information for identification purposes
     *     @type Any $content
     *           The actual payload content to be decoded
     * }
     */
    public function __construct($data = NULL) {
        FeedResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Message Header Information for identification purposes
     *
     * Generated from protobuf field <code>.agrirouter.feed.response.MessageQueryResponse.Header header = 1;</code>
     * @return Header
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Message Header Information for identification purposes
     *
     * Generated from protobuf field <code>.agrirouter.feed.response.MessageQueryResponse.Header header = 1;</code>
     * @param Header $var
     * @return $this
     */
    public function setHeader($var)
    {
        GPBUtil::checkMessage($var, MessageQueryResponse_Header::class);
        $this->header = $var;

        return $this;
    }

    /**
     * The actual payload content to be decoded
     *
     * Generated from protobuf field <code>.google.protobuf.Any content = 2;</code>
     * @return Any
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * The actual payload content to be decoded
     *
     * Generated from protobuf field <code>.google.protobuf.Any content = 2;</code>
     * @param Any $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkMessage($var, Any::class);
        $this->content = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FeedMessage::class, MessageQueryResponse_FeedMessage::class);

