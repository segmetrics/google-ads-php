<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/resources/asset.proto

namespace Google\Ads\GoogleAds\V8\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Asset is a part of an ad which can be shared across multiple ads.
 * It can be an image (ImageAsset), a video (YoutubeVideoAsset), etc.
 * Assets are immutable and cannot be removed. To stop an asset from serving,
 * remove the asset from the entity that is using it.
 *
 * Generated from protobuf message <code>google.ads.googleads.v8.resources.Asset</code>
 */
class Asset extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the asset.
     * Asset resource names have the form:
     * `customers/{customer_id}/assets/{asset_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The ID of the asset.
     *
     * Generated from protobuf field <code>int64 id = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = null;
    /**
     * Optional name of the asset.
     *
     * Generated from protobuf field <code>string name = 12;</code>
     */
    protected $name = null;
    /**
     * Output only. Type of the asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.enums.AssetTypeEnum.AssetType type = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $type = 0;
    /**
     * A list of possible final URLs after all cross domain redirects.
     *
     * Generated from protobuf field <code>repeated string final_urls = 14;</code>
     */
    private $final_urls;
    /**
     * A list of possible final mobile URLs after all cross domain redirects.
     *
     * Generated from protobuf field <code>repeated string final_mobile_urls = 16;</code>
     */
    private $final_mobile_urls;
    /**
     * URL template for constructing a tracking URL.
     *
     * Generated from protobuf field <code>string tracking_url_template = 17;</code>
     */
    protected $tracking_url_template = null;
    /**
     * A list of mappings to be used for substituting URL custom parameter tags in
     * the tracking_url_template, final_urls, and/or final_mobile_urls.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v8.common.CustomParameter url_custom_parameters = 18;</code>
     */
    private $url_custom_parameters;
    /**
     * URL template for appending params to landing page URLs served with parallel
     * tracking.
     *
     * Generated from protobuf field <code>string final_url_suffix = 19;</code>
     */
    protected $final_url_suffix = null;
    /**
     * Output only. Policy information for the asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.resources.AssetPolicySummary policy_summary = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $policy_summary = null;
    protected $asset_data;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the asset.
     *           Asset resource names have the form:
     *           `customers/{customer_id}/assets/{asset_id}`
     *     @type int|string $id
     *           Output only. The ID of the asset.
     *     @type string $name
     *           Optional name of the asset.
     *     @type int $type
     *           Output only. Type of the asset.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $final_urls
     *           A list of possible final URLs after all cross domain redirects.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $final_mobile_urls
     *           A list of possible final mobile URLs after all cross domain redirects.
     *     @type string $tracking_url_template
     *           URL template for constructing a tracking URL.
     *     @type \Google\Ads\GoogleAds\V8\Common\CustomParameter[]|\Google\Protobuf\Internal\RepeatedField $url_custom_parameters
     *           A list of mappings to be used for substituting URL custom parameter tags in
     *           the tracking_url_template, final_urls, and/or final_mobile_urls.
     *     @type string $final_url_suffix
     *           URL template for appending params to landing page URLs served with parallel
     *           tracking.
     *     @type \Google\Ads\GoogleAds\V8\Resources\AssetPolicySummary $policy_summary
     *           Output only. Policy information for the asset.
     *     @type \Google\Ads\GoogleAds\V8\Common\YoutubeVideoAsset $youtube_video_asset
     *           Immutable. A YouTube video asset.
     *     @type \Google\Ads\GoogleAds\V8\Common\MediaBundleAsset $media_bundle_asset
     *           Immutable. A media bundle asset.
     *     @type \Google\Ads\GoogleAds\V8\Common\ImageAsset $image_asset
     *           Output only. An image asset.
     *     @type \Google\Ads\GoogleAds\V8\Common\TextAsset $text_asset
     *           Output only. A text asset.
     *     @type \Google\Ads\GoogleAds\V8\Common\LeadFormAsset $lead_form_asset
     *           A lead form asset.
     *     @type \Google\Ads\GoogleAds\V8\Common\BookOnGoogleAsset $book_on_google_asset
     *           A book on google asset.
     *     @type \Google\Ads\GoogleAds\V8\Common\PromotionAsset $promotion_asset
     *           A promotion asset.
     *     @type \Google\Ads\GoogleAds\V8\Common\CalloutAsset $callout_asset
     *           A callout asset.
     *     @type \Google\Ads\GoogleAds\V8\Common\StructuredSnippetAsset $structured_snippet_asset
     *           A structured snippet asset.
     *     @type \Google\Ads\GoogleAds\V8\Common\SitelinkAsset $sitelink_asset
     *           A sitelink asset.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V8\Resources\Asset::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the asset.
     * Asset resource names have the form:
     * `customers/{customer_id}/assets/{asset_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the asset.
     * Asset resource names have the form:
     * `customers/{customer_id}/assets/{asset_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Output only. The ID of the asset.
     *
     * Generated from protobuf field <code>int64 id = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * Output only. The ID of the asset.
     *
     * Generated from protobuf field <code>int64 id = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Optional name of the asset.
     *
     * Generated from protobuf field <code>string name = 12;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * Optional name of the asset.
     *
     * Generated from protobuf field <code>string name = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. Type of the asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.enums.AssetTypeEnum.AssetType type = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Output only. Type of the asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.enums.AssetTypeEnum.AssetType type = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V8\Enums\AssetTypeEnum\AssetType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * A list of possible final URLs after all cross domain redirects.
     *
     * Generated from protobuf field <code>repeated string final_urls = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFinalUrls()
    {
        return $this->final_urls;
    }

    /**
     * A list of possible final URLs after all cross domain redirects.
     *
     * Generated from protobuf field <code>repeated string final_urls = 14;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFinalUrls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->final_urls = $arr;

        return $this;
    }

    /**
     * A list of possible final mobile URLs after all cross domain redirects.
     *
     * Generated from protobuf field <code>repeated string final_mobile_urls = 16;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFinalMobileUrls()
    {
        return $this->final_mobile_urls;
    }

    /**
     * A list of possible final mobile URLs after all cross domain redirects.
     *
     * Generated from protobuf field <code>repeated string final_mobile_urls = 16;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFinalMobileUrls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->final_mobile_urls = $arr;

        return $this;
    }

    /**
     * URL template for constructing a tracking URL.
     *
     * Generated from protobuf field <code>string tracking_url_template = 17;</code>
     * @return string
     */
    public function getTrackingUrlTemplate()
    {
        return isset($this->tracking_url_template) ? $this->tracking_url_template : '';
    }

    public function hasTrackingUrlTemplate()
    {
        return isset($this->tracking_url_template);
    }

    public function clearTrackingUrlTemplate()
    {
        unset($this->tracking_url_template);
    }

    /**
     * URL template for constructing a tracking URL.
     *
     * Generated from protobuf field <code>string tracking_url_template = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setTrackingUrlTemplate($var)
    {
        GPBUtil::checkString($var, True);
        $this->tracking_url_template = $var;

        return $this;
    }

    /**
     * A list of mappings to be used for substituting URL custom parameter tags in
     * the tracking_url_template, final_urls, and/or final_mobile_urls.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v8.common.CustomParameter url_custom_parameters = 18;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUrlCustomParameters()
    {
        return $this->url_custom_parameters;
    }

    /**
     * A list of mappings to be used for substituting URL custom parameter tags in
     * the tracking_url_template, final_urls, and/or final_mobile_urls.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v8.common.CustomParameter url_custom_parameters = 18;</code>
     * @param \Google\Ads\GoogleAds\V8\Common\CustomParameter[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUrlCustomParameters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V8\Common\CustomParameter::class);
        $this->url_custom_parameters = $arr;

        return $this;
    }

    /**
     * URL template for appending params to landing page URLs served with parallel
     * tracking.
     *
     * Generated from protobuf field <code>string final_url_suffix = 19;</code>
     * @return string
     */
    public function getFinalUrlSuffix()
    {
        return isset($this->final_url_suffix) ? $this->final_url_suffix : '';
    }

    public function hasFinalUrlSuffix()
    {
        return isset($this->final_url_suffix);
    }

    public function clearFinalUrlSuffix()
    {
        unset($this->final_url_suffix);
    }

    /**
     * URL template for appending params to landing page URLs served with parallel
     * tracking.
     *
     * Generated from protobuf field <code>string final_url_suffix = 19;</code>
     * @param string $var
     * @return $this
     */
    public function setFinalUrlSuffix($var)
    {
        GPBUtil::checkString($var, True);
        $this->final_url_suffix = $var;

        return $this;
    }

    /**
     * Output only. Policy information for the asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.resources.AssetPolicySummary policy_summary = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V8\Resources\AssetPolicySummary|null
     */
    public function getPolicySummary()
    {
        return isset($this->policy_summary) ? $this->policy_summary : null;
    }

    public function hasPolicySummary()
    {
        return isset($this->policy_summary);
    }

    public function clearPolicySummary()
    {
        unset($this->policy_summary);
    }

    /**
     * Output only. Policy information for the asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.resources.AssetPolicySummary policy_summary = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V8\Resources\AssetPolicySummary $var
     * @return $this
     */
    public function setPolicySummary($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V8\Resources\AssetPolicySummary::class);
        $this->policy_summary = $var;

        return $this;
    }

    /**
     * Immutable. A YouTube video asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.common.YoutubeVideoAsset youtube_video_asset = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Ads\GoogleAds\V8\Common\YoutubeVideoAsset|null
     */
    public function getYoutubeVideoAsset()
    {
        return $this->readOneof(5);
    }

    public function hasYoutubeVideoAsset()
    {
        return $this->hasOneof(5);
    }

    /**
     * Immutable. A YouTube video asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.common.YoutubeVideoAsset youtube_video_asset = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Ads\GoogleAds\V8\Common\YoutubeVideoAsset $var
     * @return $this
     */
    public function setYoutubeVideoAsset($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V8\Common\YoutubeVideoAsset::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Immutable. A media bundle asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.common.MediaBundleAsset media_bundle_asset = 6 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Ads\GoogleAds\V8\Common\MediaBundleAsset|null
     */
    public function getMediaBundleAsset()
    {
        return $this->readOneof(6);
    }

    public function hasMediaBundleAsset()
    {
        return $this->hasOneof(6);
    }

    /**
     * Immutable. A media bundle asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.common.MediaBundleAsset media_bundle_asset = 6 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Ads\GoogleAds\V8\Common\MediaBundleAsset $var
     * @return $this
     */
    public function setMediaBundleAsset($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V8\Common\MediaBundleAsset::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Output only. An image asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.common.ImageAsset image_asset = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V8\Common\ImageAsset|null
     */
    public function getImageAsset()
    {
        return $this->readOneof(7);
    }

    public function hasImageAsset()
    {
        return $this->hasOneof(7);
    }

    /**
     * Output only. An image asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.common.ImageAsset image_asset = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V8\Common\ImageAsset $var
     * @return $this
     */
    public function setImageAsset($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V8\Common\ImageAsset::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Output only. A text asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.common.TextAsset text_asset = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V8\Common\TextAsset|null
     */
    public function getTextAsset()
    {
        return $this->readOneof(8);
    }

    public function hasTextAsset()
    {
        return $this->hasOneof(8);
    }

    /**
     * Output only. A text asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.common.TextAsset text_asset = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V8\Common\TextAsset $var
     * @return $this
     */
    public function setTextAsset($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V8\Common\TextAsset::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * A lead form asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.common.LeadFormAsset lead_form_asset = 9;</code>
     * @return \Google\Ads\GoogleAds\V8\Common\LeadFormAsset|null
     */
    public function getLeadFormAsset()
    {
        return $this->readOneof(9);
    }

    public function hasLeadFormAsset()
    {
        return $this->hasOneof(9);
    }

    /**
     * A lead form asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.common.LeadFormAsset lead_form_asset = 9;</code>
     * @param \Google\Ads\GoogleAds\V8\Common\LeadFormAsset $var
     * @return $this
     */
    public function setLeadFormAsset($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V8\Common\LeadFormAsset::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * A book on google asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.common.BookOnGoogleAsset book_on_google_asset = 10;</code>
     * @return \Google\Ads\GoogleAds\V8\Common\BookOnGoogleAsset|null
     */
    public function getBookOnGoogleAsset()
    {
        return $this->readOneof(10);
    }

    public function hasBookOnGoogleAsset()
    {
        return $this->hasOneof(10);
    }

    /**
     * A book on google asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.common.BookOnGoogleAsset book_on_google_asset = 10;</code>
     * @param \Google\Ads\GoogleAds\V8\Common\BookOnGoogleAsset $var
     * @return $this
     */
    public function setBookOnGoogleAsset($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V8\Common\BookOnGoogleAsset::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * A promotion asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.common.PromotionAsset promotion_asset = 15;</code>
     * @return \Google\Ads\GoogleAds\V8\Common\PromotionAsset|null
     */
    public function getPromotionAsset()
    {
        return $this->readOneof(15);
    }

    public function hasPromotionAsset()
    {
        return $this->hasOneof(15);
    }

    /**
     * A promotion asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.common.PromotionAsset promotion_asset = 15;</code>
     * @param \Google\Ads\GoogleAds\V8\Common\PromotionAsset $var
     * @return $this
     */
    public function setPromotionAsset($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V8\Common\PromotionAsset::class);
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * A callout asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.common.CalloutAsset callout_asset = 20;</code>
     * @return \Google\Ads\GoogleAds\V8\Common\CalloutAsset|null
     */
    public function getCalloutAsset()
    {
        return $this->readOneof(20);
    }

    public function hasCalloutAsset()
    {
        return $this->hasOneof(20);
    }

    /**
     * A callout asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.common.CalloutAsset callout_asset = 20;</code>
     * @param \Google\Ads\GoogleAds\V8\Common\CalloutAsset $var
     * @return $this
     */
    public function setCalloutAsset($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V8\Common\CalloutAsset::class);
        $this->writeOneof(20, $var);

        return $this;
    }

    /**
     * A structured snippet asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.common.StructuredSnippetAsset structured_snippet_asset = 21;</code>
     * @return \Google\Ads\GoogleAds\V8\Common\StructuredSnippetAsset|null
     */
    public function getStructuredSnippetAsset()
    {
        return $this->readOneof(21);
    }

    public function hasStructuredSnippetAsset()
    {
        return $this->hasOneof(21);
    }

    /**
     * A structured snippet asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.common.StructuredSnippetAsset structured_snippet_asset = 21;</code>
     * @param \Google\Ads\GoogleAds\V8\Common\StructuredSnippetAsset $var
     * @return $this
     */
    public function setStructuredSnippetAsset($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V8\Common\StructuredSnippetAsset::class);
        $this->writeOneof(21, $var);

        return $this;
    }

    /**
     * A sitelink asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.common.SitelinkAsset sitelink_asset = 22;</code>
     * @return \Google\Ads\GoogleAds\V8\Common\SitelinkAsset|null
     */
    public function getSitelinkAsset()
    {
        return $this->readOneof(22);
    }

    public function hasSitelinkAsset()
    {
        return $this->hasOneof(22);
    }

    /**
     * A sitelink asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.common.SitelinkAsset sitelink_asset = 22;</code>
     * @param \Google\Ads\GoogleAds\V8\Common\SitelinkAsset $var
     * @return $this
     */
    public function setSitelinkAsset($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V8\Common\SitelinkAsset::class);
        $this->writeOneof(22, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getAssetData()
    {
        return $this->whichOneof("asset_data");
    }

}
