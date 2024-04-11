<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: centrifugo/proxy/v1/proxy.proto

namespace RoadRunner\Centrifugal\Proxy\DTO\V1\GPBMetadata;

class Proxy
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�-
centrifugo/proxy/v1/proxy.protocentrifugal.centrifugo.proxy"0

Disconnect
code (
reason (	J"9
Error
code (
message (	
	temporary ("�
ConnectRequest
client (	
	transport (	
protocol (	
encoding (	
data
 (
b64data (	
name (	
version
channels (	"�
SubscribeOptions
	expire_at (
info (
b64info (	
data (
b64data (	G
override (25.centrifugal.centrifugo.proxy.SubscribeOptionOverride"�

user (	
	expire_at (
info (
b64info (	
data (
b64data (	
channels (	C
subs (25.centrifugal.centrifugo.proxy.ConnectResult.SubsEntry
meta	 (>
caps
 (20.centrifugal.centrifugo.proxy.ChannelsCapability[
	SubsEntry
key (	=
value (2..centrifugal.centrifugo.proxy.SubscribeOptions:8"D
ChannelsCapability
channels (	
allow (	
match (	"�
ConnectResponse;
result (2+.centrifugal.centrifugo.proxy.ConnectResult2
error (2#.centrifugal.centrifugo.proxy.Error<

disconnect (2(.centrifugal.centrifugo.proxy.Disconnect"s
RefreshRequest
client (	
	transport (	
protocol (	
encoding (	
user
 (	
meta ("�

expired (
	expire_at (
info (
b64info (	
meta (>
caps (20.centrifugal.centrifugo.proxy.ChannelsCapability"�
RefreshResponse;
result (2+.centrifugal.centrifugo.proxy.RefreshResult2
error (2#.centrifugal.centrifugo.proxy.Error<

disconnect (2(.centrifugal.centrifugo.proxy.Disconnect"�
SubscribeRequest
client (	
	transport (	
protocol (	
encoding (	
user
 (	
channel (	
token (	
meta
data (
b64data (	"
	BoolValue
value ("

Int32Value
value ("�
SubscribeOptionOverride9
presence (2\'.centrifugal.centrifugo.proxy.BoolValue;

join_leave (2\'.centrifugal.centrifugo.proxy.BoolValue?
force_recovery (2\'.centrifugal.centrifugo.proxy.BoolValueB
force_positioning (2\'.centrifugal.centrifugo.proxy.BoolValueF
force_push_join_leave (2\'.centrifugal.centrifugo.proxy.BoolValue"�
SubscribeResult
	expire_at (
info (
b64info (	
data (
b64data (	G
override (25.centrifugal.centrifugo.proxy.SubscribeOptionOverride
allow (	"�
SubscribeResponse=
result (2-.centrifugal.centrifugo.proxy.SubscribeResult2
error (2#.centrifugal.centrifugo.proxy.Error<

disconnect (2(.centrifugal.centrifugo.proxy.Disconnect"�
PublishRequest
client (	
	transport (	
protocol (	
encoding (	
user
 (	
channel (	
data (
b64data
meta ("D

data (
b64data (	
skip_history ("�
PublishResponse;
result (2+.centrifugal.centrifugo.proxy.PublishResult2
error (2#.centrifugal.centrifugo.proxy.Error<

disconnect (2(.centrifugal.centrifugo.proxy.Disconnect"�

RPCRequest
client (	
	transport (	
protocol (	
encoding (	
user
 (	
method (	
data (
b64data
meta ("*
	RPCResult
data (
b64data (	"�
RPCResponse7
result (2\'.centrifugal.centrifugo.proxy.RPCResult2
error (2#.centrifugal.centrifugo.proxy.Error<

disconnect (2(.centrifugal.centrifugo.proxy.Disconnect"�
SubRefreshRequest
client (	
	transport (	
protocol (	
encoding (	
user
 (	
channel (	
meta ("U
SubRefreshResult
expired (
	expire_at (
info (
b64info (	"�
SubRefreshResponse>
result (2..centrifugal.centrifugo.proxy.SubRefreshResult2
error (2#.centrifugal.centrifugo.proxy.Error<

disconnect (2(.centrifugal.centrifugo.proxy.Disconnect"�
Publication
data (A
tags (23.centrifugal.centrifugo.proxy.Publication.TagsEntry+
	TagsEntry
key (	
value (	:8JJJJJ"�
StreamSubscribeRequestI
subscribe_request (2..centrifugal.centrifugo.proxy.SubscribeRequest>
publication (2).centrifugal.centrifugo.proxy.Publication"�
StreamSubscribeResponseK
subscribe_response (2/.centrifugal.centrifugo.proxy.SubscribeResponse>
publication (2).centrifugal.centrifugo.proxy.Publication"W
NotifyChannelStateRequest:
events (2*.centrifugal.centrifugo.proxy.ChannelEvent">
ChannelEvent
time_ms (
channel (	
type (	"�
NotifyChannelStateResponseF
result (26.centrifugal.centrifugo.proxy.NotifyChannelStateResult2
error (2#.centrifugal.centrifugo.proxy.Error"
NotifyChannelStateResult2�
CentrifugoProxyf
Connect,.centrifugal.centrifugo.proxy.ConnectRequest-.centrifugal.centrifugo.proxy.ConnectResponsef
Refresh,.centrifugal.centrifugo.proxy.RefreshRequest-.centrifugal.centrifugo.proxy.RefreshResponsel
	Subscribe..centrifugal.centrifugo.proxy.SubscribeRequest/.centrifugal.centrifugo.proxy.SubscribeResponsef
Publish,.centrifugal.centrifugo.proxy.PublishRequest-.centrifugal.centrifugo.proxy.PublishResponseZ
RPC(.centrifugal.centrifugo.proxy.RPCRequest).centrifugal.centrifugo.proxy.RPCResponseo

SubRefresh/.centrifugal.centrifugo.proxy.SubRefreshRequest0.centrifugal.centrifugo.proxy.SubRefreshResponse�
SubscribeUnidirectional..centrifugal.centrifugo.proxy.SubscribeRequest5.centrifugal.centrifugo.proxy.StreamSubscribeResponse0�
SubscribeBidirectional4.centrifugal.centrifugo.proxy.StreamSubscribeRequest5.centrifugal.centrifugo.proxy.StreamSubscribeResponse(0�
NotifyChannelState7.centrifugal.centrifugo.proxy.NotifyChannelStateRequest8.centrifugal.centrifugo.proxy.NotifyChannelStateResponseBmZcentrifugo/proxy/v1�#RoadRunner\\Centrifugal\\Proxy\\DTO\\V1�/RoadRunner\\Centrifugal\\Proxy\\DTO\\V1\\GPBMetadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}
