<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: messaging/request/request.proto

namespace GPBMetadata\Messaging\Request;

use Google\Protobuf\Internal\DescriptorPool;
use GPBMetadata\Commons\Chunk;
use GPBMetadata\Commons\Message;
use GPBMetadata\Google\Protobuf\Any;
use GPBMetadata\Google\Protobuf\Timestamp;

class Request
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        Any::initOnce();
        Timestamp::initOnce();
        Chunk::initOnce();
        Message::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0afc040a1f6d6573736167696e672f726571756573742f726571756573742e70726f746f121261677269726f757465722e726571756573741a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f1a13636f6d6d6f6e732f6368756e6b2e70726f746f1a15636f6d6d6f6e732f6d6573736167652e70726f746f22af030a0f52657175657374456e76656c6f7065121e0a166170706c69636174696f6e5f6d6573736167655f696418012001280912220a1a6170706c69636174696f6e5f6d6573736167655f7365715f6e6f180220012803121e0a16746563686e6963616c5f6d6573736167655f74797065180320012809121b0a137465616d5f7365745f636f6e746578745f696418042001280912360a046d6f646518052001280e32282e61677269726f757465722e726571756573742e52657175657374456e76656c6f70652e4d6f646512120a0a726563697069656e747318062003280912360a0a6368756e6b5f696e666f18072001280b32222e61677269726f757465722e636f6d6d6f6e732e4368756e6b436f6d706f6e656e74122d0a0974696d657374616d7018082001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70122e0a086d6574616461746118092001280b321c2e61677269726f757465722e636f6d6d6f6e732e4d6574616461746122380a044d6f6465120a0a064449524543541000120b0a075055424c495348100112170a135055424c4953485f574954485f4449524543541002223e0a15526571756573745061796c6f61645772617070657212250a0764657461696c7318012001280b32142e676f6f676c652e70726f746f6275662e416e79620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

