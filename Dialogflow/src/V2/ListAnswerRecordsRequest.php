<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/answer_record.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [AnswerRecords.ListAnswerRecords][google.cloud.dialogflow.v2.AnswerRecords.ListAnswerRecords].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.ListAnswerRecordsRequest</code>
 */
class ListAnswerRecordsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The project to list all answer records for in reverse
     * chronological order. Format: `projects/<Project ID>/locations/<Location
     * ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Optional. Filters to restrict results to specific answer records.
     * Marked deprecated as it hasn't been, and isn't currently, supported.
     * For more information about filtering, see
     * [API Filtering](https://aip.dev/160).
     *
     * Generated from protobuf field <code>string filter = 2 [deprecated = true, (.google.api.field_behavior) = OPTIONAL];</code>
     * @deprecated
     */
    protected $filter = '';
    /**
     * Optional. The maximum number of records to return in a single page.
     * The server may return fewer records than this. If unspecified, we use 10.
     * The maximum is 100.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_size = 0;
    /**
     * Optional. The
     * [ListAnswerRecordsResponse.next_page_token][google.cloud.dialogflow.v2.ListAnswerRecordsResponse.next_page_token]
     * value returned from a previous list request used to continue listing on
     * the next page.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The project to list all answer records for in reverse
     *           chronological order. Format: `projects/<Project ID>/locations/<Location
     *           ID>`.
     *     @type string $filter
     *           Optional. Filters to restrict results to specific answer records.
     *           Marked deprecated as it hasn't been, and isn't currently, supported.
     *           For more information about filtering, see
     *           [API Filtering](https://aip.dev/160).
     *     @type int $page_size
     *           Optional. The maximum number of records to return in a single page.
     *           The server may return fewer records than this. If unspecified, we use 10.
     *           The maximum is 100.
     *     @type string $page_token
     *           Optional. The
     *           [ListAnswerRecordsResponse.next_page_token][google.cloud.dialogflow.v2.ListAnswerRecordsResponse.next_page_token]
     *           value returned from a previous list request used to continue listing on
     *           the next page.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\AnswerRecord::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The project to list all answer records for in reverse
     * chronological order. Format: `projects/<Project ID>/locations/<Location
     * ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The project to list all answer records for in reverse
     * chronological order. Format: `projects/<Project ID>/locations/<Location
     * ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional. Filters to restrict results to specific answer records.
     * Marked deprecated as it hasn't been, and isn't currently, supported.
     * For more information about filtering, see
     * [API Filtering](https://aip.dev/160).
     *
     * Generated from protobuf field <code>string filter = 2 [deprecated = true, (.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     * @deprecated
     */
    public function getFilter()
    {
        @trigger_error('filter is deprecated.', E_USER_DEPRECATED);
        return $this->filter;
    }

    /**
     * Optional. Filters to restrict results to specific answer records.
     * Marked deprecated as it hasn't been, and isn't currently, supported.
     * For more information about filtering, see
     * [API Filtering](https://aip.dev/160).
     *
     * Generated from protobuf field <code>string filter = 2 [deprecated = true, (.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setFilter($var)
    {
        @trigger_error('filter is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Optional. The maximum number of records to return in a single page.
     * The server may return fewer records than this. If unspecified, we use 10.
     * The maximum is 100.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of records to return in a single page.
     * The server may return fewer records than this. If unspecified, we use 10.
     * The maximum is 100.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. The
     * [ListAnswerRecordsResponse.next_page_token][google.cloud.dialogflow.v2.ListAnswerRecordsResponse.next_page_token]
     * value returned from a previous list request used to continue listing on
     * the next page.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. The
     * [ListAnswerRecordsResponse.next_page_token][google.cloud.dialogflow.v2.ListAnswerRecordsResponse.next_page_token]
     * value returned from a previous list request used to continue listing on
     * the next page.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

