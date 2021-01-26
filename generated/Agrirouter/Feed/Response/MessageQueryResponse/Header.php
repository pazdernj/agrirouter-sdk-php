<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: messaging/response/payload/feed/feed-response.proto

namespace Agrirouter\Feed\Response\MessageQueryResponse;

use Agrirouter\Commons\ChunkComponent;
use Agrirouter\Commons\Metadata;
use Agrirouter\Feed\Response\MessageQueryResponse_Header;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Timestamp;
use GPBMetadata\Messaging\Response\Payload\Feed\FeedResponse;

/**
 * Generated from protobuf message <code>agrirouter.feed.response.MessageQueryResponse.Header</code>
 */
class Header extends Message
{
    /**
     * Receiver of this message
     *
     * Generated from protobuf field <code>string receiver_id = 1;</code>
     */
    protected $receiver_id = '';
    /**
     * Technical Message Type ID
     *
     * Generated from protobuf field <code>string technical_message_type = 2;</code>
     */
    protected $technical_message_type = '';
    /**
     * If associated with a team set context (Device Description) this is the linkage ID
     *
     * Generated from protobuf field <code>string team_set_context_id = 3;</code>
     */
    protected $team_set_context_id = '';
    /**
     * Refer to agrirouter.commons.ChunkComponent
     *
     * Generated from protobuf field <code>.agrirouter.commons.ChunkComponent chunk_context = 4;</code>
     */
    protected $chunk_context = null;
    /**
     * Expected size of the payload associated with this message
     *
     * Generated from protobuf field <code>int64 payload_size = 5;</code>
     */
    protected $payload_size = 0;
    /**
     * The timestamp in UTC that the sender has sent this message
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp sent_timestamp = 6;</code>
     */
    protected $sent_timestamp = null;
    /**
     * Message sequence number
     *
     * Generated from protobuf field <code>int64 sequence_number = 7;</code>
     */
    protected $sequence_number = 0;
    /**
     * Sender for the group of messages
     *
     * Generated from protobuf field <code>string sender_id = 8;</code>
     */
    protected $sender_id = '';
    /**
     * The time at which the message was inserted into the endpoints feed within the agrirouter
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 9;</code>
     */
    protected $created_at = null;
    /**
     * Internal AgriRouter message ID representing this message and its payload
     *
     * Generated from protobuf field <code>string message_id = 10;</code>
     */
    protected $message_id = '';
    /**
     * Additional metadata information to help differentiate between messages of the same type
     *
     * Generated from protobuf field <code>.agrirouter.commons.Metadata metadata = 11;</code>
     */
    protected $metadata = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $receiver_id
     *           Receiver of this message
     *     @type string $technical_message_type
     *           Technical Message Type ID
     *     @type string $team_set_context_id
     *           If associated with a team set context (Device Description) this is the linkage ID
     *     @type ChunkComponent $chunk_context
     *           Refer to agrirouter.commons.ChunkComponent
     *     @type int|string $payload_size
     *           Expected size of the payload associated with this message
     *     @type Timestamp $sent_timestamp
     *           The timestamp in UTC that the sender has sent this message
     *     @type int|string $sequence_number
     *           Message sequence number
     *     @type string $sender_id
     *           Sender for the group of messages
     *     @type Timestamp $created_at
     *           The time at which the message was inserted into the endpoints feed within the agrirouter
     *     @type string $message_id
     *           Internal AgriRouter message ID representing this message and its payload
     *     @type Metadata $metadata
     *           Additional metadata information to help differentiate between messages of the same type
     * }
     */
    public function __construct($data = NULL) {
        FeedResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Receiver of this message
     *
     * Generated from protobuf field <code>string receiver_id = 1;</code>
     * @return string
     */
    public function getReceiverId()
    {
        return $this->receiver_id;
    }

    /**
     * Receiver of this message
     *
     * Generated from protobuf field <code>string receiver_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setReceiverId($var)
    {
        GPBUtil::checkString($var, True);
        $this->receiver_id = $var;

        return $this;
    }

    /**
     * Technical Message Type ID
     *
     * Generated from protobuf field <code>string technical_message_type = 2;</code>
     * @return string
     */
    public function getTechnicalMessageType()
    {
        return $this->technical_message_type;
    }

    /**
     * Technical Message Type ID
     *
     * Generated from protobuf field <code>string technical_message_type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTechnicalMessageType($var)
    {
        GPBUtil::checkString($var, True);
        $this->technical_message_type = $var;

        return $this;
    }

    /**
     * If associated with a team set context (Device Description) this is the linkage ID
     *
     * Generated from protobuf field <code>string team_set_context_id = 3;</code>
     * @return string
     */
    public function getTeamSetContextId()
    {
        return $this->team_set_context_id;
    }

    /**
     * If associated with a team set context (Device Description) this is the linkage ID
     *
     * Generated from protobuf field <code>string team_set_context_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTeamSetContextId($var)
    {
        GPBUtil::checkString($var, True);
        $this->team_set_context_id = $var;

        return $this;
    }

    /**
     * Refer to agrirouter.commons.ChunkComponent
     *
     * Generated from protobuf field <code>.agrirouter.commons.ChunkComponent chunk_context = 4;</code>
     * @return ChunkComponent
     */
    public function getChunkContext()
    {
        return $this->chunk_context;
    }

    /**
     * Refer to agrirouter.commons.ChunkComponent
     *
     * Generated from protobuf field <code>.agrirouter.commons.ChunkComponent chunk_context = 4;</code>
     * @param ChunkComponent $var
     * @return $this
     */
    public function setChunkContext($var)
    {
        GPBUtil::checkMessage($var, ChunkComponent::class);
        $this->chunk_context = $var;

        return $this;
    }

    /**
     * Expected size of the payload associated with this message
     *
     * Generated from protobuf field <code>int64 payload_size = 5;</code>
     * @return int|string
     */
    public function getPayloadSize()
    {
        return $this->payload_size;
    }

    /**
     * Expected size of the payload associated with this message
     *
     * Generated from protobuf field <code>int64 payload_size = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPayloadSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->payload_size = $var;

        return $this;
    }

    /**
     * The timestamp in UTC that the sender has sent this message
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp sent_timestamp = 6;</code>
     * @return Timestamp
     */
    public function getSentTimestamp()
    {
        return $this->sent_timestamp;
    }

    /**
     * The timestamp in UTC that the sender has sent this message
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp sent_timestamp = 6;</code>
     * @param Timestamp $var
     * @return $this
     */
    public function setSentTimestamp($var)
    {
        GPBUtil::checkMessage($var, Timestamp::class);
        $this->sent_timestamp = $var;

        return $this;
    }

    /**
     * Message sequence number
     *
     * Generated from protobuf field <code>int64 sequence_number = 7;</code>
     * @return int|string
     */
    public function getSequenceNumber()
    {
        return $this->sequence_number;
    }

    /**
     * Message sequence number
     *
     * Generated from protobuf field <code>int64 sequence_number = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSequenceNumber($var)
    {
        GPBUtil::checkInt64($var);
        $this->sequence_number = $var;

        return $this;
    }

    /**
     * Sender for the group of messages
     *
     * Generated from protobuf field <code>string sender_id = 8;</code>
     * @return string
     */
    public function getSenderId()
    {
        return $this->sender_id;
    }

    /**
     * Sender for the group of messages
     *
     * Generated from protobuf field <code>string sender_id = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setSenderId($var)
    {
        GPBUtil::checkString($var, True);
        $this->sender_id = $var;

        return $this;
    }

    /**
     * The time at which the message was inserted into the endpoints feed within the agrirouter
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 9;</code>
     * @return Timestamp
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * The time at which the message was inserted into the endpoints feed within the agrirouter
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 9;</code>
     * @param Timestamp $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkMessage($var, Timestamp::class);
        $this->created_at = $var;

        return $this;
    }

    /**
     * Internal AgriRouter message ID representing this message and its payload
     *
     * Generated from protobuf field <code>string message_id = 10;</code>
     * @return string
     */
    public function getMessageId()
    {
        return $this->message_id;
    }

    /**
     * Internal AgriRouter message ID representing this message and its payload
     *
     * Generated from protobuf field <code>string message_id = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setMessageId($var)
    {
        GPBUtil::checkString($var, True);
        $this->message_id = $var;

        return $this;
    }

    /**
     * Additional metadata information to help differentiate between messages of the same type
     *
     * Generated from protobuf field <code>.agrirouter.commons.Metadata metadata = 11;</code>
     * @return Metadata
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Additional metadata information to help differentiate between messages of the same type
     *
     * Generated from protobuf field <code>.agrirouter.commons.Metadata metadata = 11;</code>
     * @param Metadata $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, Metadata::class);
        $this->metadata = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Header::class, MessageQueryResponse_Header::class);

