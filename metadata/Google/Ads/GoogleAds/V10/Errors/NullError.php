<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/errors/null_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V10\Errors;

class NullError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
0google/ads/googleads/v10/errors/null_error.protogoogle.ads.googleads.v10.errors"L
NullErrorEnum";
	NullError
UNSPECIFIED 
UNKNOWN
NULL_CONTENTB�
#com.google.ads.googleads.v10.errorsBNullErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v10/errors;errors�GAA�Google.Ads.GoogleAds.V10.Errors�Google\\Ads\\GoogleAds\\V10\\Errors�#Google::Ads::GoogleAds::V10::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

