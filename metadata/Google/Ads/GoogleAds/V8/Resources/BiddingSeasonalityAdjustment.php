<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/resources/bidding_seasonality_adjustment.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Resources;

class BiddingSeasonalityAdjustment
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
*google/ads/googleads/v8/enums/device.protogoogle.ads.googleads.v8.enums"v

DeviceEnum"h
Device
UNSPECIFIED 
UNKNOWN

MOBILE

TABLET
DESKTOP
CONNECTED_TV	
OTHERB�
!com.google.ads.googleads.v8.enumsBDeviceProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
<google/ads/googleads/v8/enums/advertising_channel_type.protogoogle.ads.googleads.v8.enums"�
AdvertisingChannelTypeEnum"�
AdvertisingChannelType
UNSPECIFIED 
UNKNOWN

SEARCH
DISPLAY
SHOPPING	
HOTEL	
VIDEO
MULTI_CHANNEL	
LOCAL	
SMART	B�
!com.google.ads.googleads.v8.enumsBAdvertisingChannelTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
<google/ads/googleads/v8/enums/seasonality_event_status.protogoogle.ads.googleads.v8.enums"n
SeasonalityEventStatusEnum"P
SeasonalityEventStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
!com.google.ads.googleads.v8.enumsBSeasonalityEventStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
;google/ads/googleads/v8/enums/seasonality_event_scope.protogoogle.ads.googleads.v8.enums"{
SeasonalityEventScopeEnum"^
SeasonalityEventScope
UNSPECIFIED 
UNKNOWN
CUSTOMER
CAMPAIGN
CHANNELB�
!com.google.ads.googleads.v8.enumsBSeasonalityEventScopeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
Fgoogle/ads/googleads/v8/resources/bidding_seasonality_adjustment.proto!google.ads.googleads.v8.resources*google/ads/googleads/v8/enums/device.proto;google/ads/googleads/v8/enums/seasonality_event_scope.proto<google/ads/googleads/v8/enums/seasonality_event_status.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
BiddingSeasonalityAdjustmentT
resource_name (	B=�A�A7
5googleads.googleapis.com/BiddingSeasonalityAdjustment&
seasonality_adjustment_id (B�A]
scope (2N.google.ads.googleads.v8.enums.SeasonalityEventScopeEnum.SeasonalityEventScopee
status (2P.google.ads.googleads.v8.enums.SeasonalityEventStatusEnum.SeasonalityEventStatusB�A
start_date_time (	B�A
end_date_time (	B�A
name (	
description (	A
devices	 (20.google.ads.googleads.v8.enums.DeviceEnum.Device 
conversion_rate_modifier
 (9
	campaigns (	B&�A#
!googleads.googleapis.com/Campaigns
advertising_channel_types (2P.google.ads.googleads.v8.enums.AdvertisingChannelTypeEnum.AdvertisingChannelType:��A�
5googleads.googleapis.com/BiddingSeasonalityAdjustmentLcustomers/{customer_id}/biddingSeasonalityAdjustments/{seasonality_event_id}B�
%com.google.ads.googleads.v8.resourcesB!BiddingSeasonalityAdjustmentProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v8/resources;resources�GAA�!Google.Ads.GoogleAds.V8.Resources�!Google\\Ads\\GoogleAds\\V8\\Resources�%Google::Ads::GoogleAds::V8::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

