<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/storage/v1/stream.proto

namespace Google\Cloud\BigQuery\Storage\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about the ReadSession.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.storage.v1.ReadSession</code>
 */
class ReadSession extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Unique identifier for the session, in the form
     * `projects/{project_id}/locations/{location}/sessions/{session_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Output only. Time at which the session becomes invalid. After this time, subsequent
     * requests to read this Session will return errors. The expire_time is
     * automatically assigned and currently cannot be specified or updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $expire_time = null;
    /**
     * Immutable. Data format of the output data. DATA_FORMAT_UNSPECIFIED not supported.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.DataFormat data_format = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $data_format = 0;
    /**
     * Immutable. Table that this ReadSession is reading from, in the form
     * `projects/{project_id}/datasets/{dataset_id}/tables/{table_id}`
     *
     * Generated from protobuf field <code>string table = 6 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    private $table = '';
    /**
     * Optional. Any modifiers which are applied when reading from the specified table.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.ReadSession.TableModifiers table_modifiers = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $table_modifiers = null;
    /**
     * Optional. Read options for this session (e.g. column selection, filters).
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.ReadSession.TableReadOptions read_options = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $read_options = null;
    /**
     * Output only. A list of streams created with the session.
     * At least one stream is created with the session. In the future, larger
     * request_stream_count values *may* result in this list being unpopulated,
     * in that case, the user will need to use a List method to get the streams
     * instead, which is not yet available.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.storage.v1.ReadStream streams = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $streams;
    /**
     * Output only. An estimate on the number of bytes this session will scan when
     * all streams are completely consumed. This estimate is based on
     * metadata from the table which might be incomplete or stale.
     *
     * Generated from protobuf field <code>int64 estimated_total_bytes_scanned = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $estimated_total_bytes_scanned = 0;
    /**
     * Optional. ID set by client to annotate a session identity.  This does not need
     * to be strictly unique, but instead the same ID should be used to group
     * logically connected sessions (e.g. All using the same ID for all sessions
     * needed to complete a Spark SQL query is reasonable).
     * Maximum length is 256 bytes.
     *
     * Generated from protobuf field <code>string trace_id = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $trace_id = '';
    protected $schema;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Unique identifier for the session, in the form
     *           `projects/{project_id}/locations/{location}/sessions/{session_id}`.
     *     @type \Google\Protobuf\Timestamp $expire_time
     *           Output only. Time at which the session becomes invalid. After this time, subsequent
     *           requests to read this Session will return errors. The expire_time is
     *           automatically assigned and currently cannot be specified or updated.
     *     @type int $data_format
     *           Immutable. Data format of the output data. DATA_FORMAT_UNSPECIFIED not supported.
     *     @type \Google\Cloud\BigQuery\Storage\V1\AvroSchema $avro_schema
     *           Output only. Avro schema.
     *     @type \Google\Cloud\BigQuery\Storage\V1\ArrowSchema $arrow_schema
     *           Output only. Arrow schema.
     *     @type string $table
     *           Immutable. Table that this ReadSession is reading from, in the form
     *           `projects/{project_id}/datasets/{dataset_id}/tables/{table_id}`
     *     @type \Google\Cloud\BigQuery\Storage\V1\ReadSession\TableModifiers $table_modifiers
     *           Optional. Any modifiers which are applied when reading from the specified table.
     *     @type \Google\Cloud\BigQuery\Storage\V1\ReadSession\TableReadOptions $read_options
     *           Optional. Read options for this session (e.g. column selection, filters).
     *     @type \Google\Cloud\BigQuery\Storage\V1\ReadStream[]|\Google\Protobuf\Internal\RepeatedField $streams
     *           Output only. A list of streams created with the session.
     *           At least one stream is created with the session. In the future, larger
     *           request_stream_count values *may* result in this list being unpopulated,
     *           in that case, the user will need to use a List method to get the streams
     *           instead, which is not yet available.
     *     @type int|string $estimated_total_bytes_scanned
     *           Output only. An estimate on the number of bytes this session will scan when
     *           all streams are completely consumed. This estimate is based on
     *           metadata from the table which might be incomplete or stale.
     *     @type string $trace_id
     *           Optional. ID set by client to annotate a session identity.  This does not need
     *           to be strictly unique, but instead the same ID should be used to group
     *           logically connected sessions (e.g. All using the same ID for all sessions
     *           needed to complete a Spark SQL query is reasonable).
     *           Maximum length is 256 bytes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1\Stream::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Unique identifier for the session, in the form
     * `projects/{project_id}/locations/{location}/sessions/{session_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Unique identifier for the session, in the form
     * `projects/{project_id}/locations/{location}/sessions/{session_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Time at which the session becomes invalid. After this time, subsequent
     * requests to read this Session will return errors. The expire_time is
     * automatically assigned and currently cannot be specified or updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpireTime()
    {
        return $this->expire_time;
    }

    public function hasExpireTime()
    {
        return isset($this->expire_time);
    }

    public function clearExpireTime()
    {
        unset($this->expire_time);
    }

    /**
     * Output only. Time at which the session becomes invalid. After this time, subsequent
     * requests to read this Session will return errors. The expire_time is
     * automatically assigned and currently cannot be specified or updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpireTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expire_time = $var;

        return $this;
    }

    /**
     * Immutable. Data format of the output data. DATA_FORMAT_UNSPECIFIED not supported.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.DataFormat data_format = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getDataFormat()
    {
        return $this->data_format;
    }

    /**
     * Immutable. Data format of the output data. DATA_FORMAT_UNSPECIFIED not supported.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.DataFormat data_format = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setDataFormat($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BigQuery\Storage\V1\DataFormat::class);
        $this->data_format = $var;

        return $this;
    }

    /**
     * Output only. Avro schema.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.AvroSchema avro_schema = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\BigQuery\Storage\V1\AvroSchema|null
     */
    public function getAvroSchema()
    {
        return $this->readOneof(4);
    }

    public function hasAvroSchema()
    {
        return $this->hasOneof(4);
    }

    /**
     * Output only. Avro schema.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.AvroSchema avro_schema = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\BigQuery\Storage\V1\AvroSchema $var
     * @return $this
     */
    public function setAvroSchema($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Storage\V1\AvroSchema::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Output only. Arrow schema.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.ArrowSchema arrow_schema = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\BigQuery\Storage\V1\ArrowSchema|null
     */
    public function getArrowSchema()
    {
        return $this->readOneof(5);
    }

    public function hasArrowSchema()
    {
        return $this->hasOneof(5);
    }

    /**
     * Output only. Arrow schema.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.ArrowSchema arrow_schema = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\BigQuery\Storage\V1\ArrowSchema $var
     * @return $this
     */
    public function setArrowSchema($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Storage\V1\ArrowSchema::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Immutable. Table that this ReadSession is reading from, in the form
     * `projects/{project_id}/datasets/{dataset_id}/tables/{table_id}`
     *
     * Generated from protobuf field <code>string table = 6 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * Immutable. Table that this ReadSession is reading from, in the form
     * `projects/{project_id}/datasets/{dataset_id}/tables/{table_id}`
     *
     * Generated from protobuf field <code>string table = 6 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTable($var)
    {
        GPBUtil::checkString($var, True);
        $this->table = $var;

        return $this;
    }

    /**
     * Optional. Any modifiers which are applied when reading from the specified table.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.ReadSession.TableModifiers table_modifiers = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\BigQuery\Storage\V1\ReadSession\TableModifiers|null
     */
    public function getTableModifiers()
    {
        return $this->table_modifiers;
    }

    public function hasTableModifiers()
    {
        return isset($this->table_modifiers);
    }

    public function clearTableModifiers()
    {
        unset($this->table_modifiers);
    }

    /**
     * Optional. Any modifiers which are applied when reading from the specified table.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.ReadSession.TableModifiers table_modifiers = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\BigQuery\Storage\V1\ReadSession\TableModifiers $var
     * @return $this
     */
    public function setTableModifiers($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Storage\V1\ReadSession\TableModifiers::class);
        $this->table_modifiers = $var;

        return $this;
    }

    /**
     * Optional. Read options for this session (e.g. column selection, filters).
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.ReadSession.TableReadOptions read_options = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\BigQuery\Storage\V1\ReadSession\TableReadOptions|null
     */
    public function getReadOptions()
    {
        return $this->read_options;
    }

    public function hasReadOptions()
    {
        return isset($this->read_options);
    }

    public function clearReadOptions()
    {
        unset($this->read_options);
    }

    /**
     * Optional. Read options for this session (e.g. column selection, filters).
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.ReadSession.TableReadOptions read_options = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\BigQuery\Storage\V1\ReadSession\TableReadOptions $var
     * @return $this
     */
    public function setReadOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Storage\V1\ReadSession\TableReadOptions::class);
        $this->read_options = $var;

        return $this;
    }

    /**
     * Output only. A list of streams created with the session.
     * At least one stream is created with the session. In the future, larger
     * request_stream_count values *may* result in this list being unpopulated,
     * in that case, the user will need to use a List method to get the streams
     * instead, which is not yet available.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.storage.v1.ReadStream streams = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStreams()
    {
        return $this->streams;
    }

    /**
     * Output only. A list of streams created with the session.
     * At least one stream is created with the session. In the future, larger
     * request_stream_count values *may* result in this list being unpopulated,
     * in that case, the user will need to use a List method to get the streams
     * instead, which is not yet available.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.storage.v1.ReadStream streams = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\BigQuery\Storage\V1\ReadStream[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStreams($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\BigQuery\Storage\V1\ReadStream::class);
        $this->streams = $arr;

        return $this;
    }

    /**
     * Output only. An estimate on the number of bytes this session will scan when
     * all streams are completely consumed. This estimate is based on
     * metadata from the table which might be incomplete or stale.
     *
     * Generated from protobuf field <code>int64 estimated_total_bytes_scanned = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getEstimatedTotalBytesScanned()
    {
        return $this->estimated_total_bytes_scanned;
    }

    /**
     * Output only. An estimate on the number of bytes this session will scan when
     * all streams are completely consumed. This estimate is based on
     * metadata from the table which might be incomplete or stale.
     *
     * Generated from protobuf field <code>int64 estimated_total_bytes_scanned = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setEstimatedTotalBytesScanned($var)
    {
        GPBUtil::checkInt64($var);
        $this->estimated_total_bytes_scanned = $var;

        return $this;
    }

    /**
     * Optional. ID set by client to annotate a session identity.  This does not need
     * to be strictly unique, but instead the same ID should be used to group
     * logically connected sessions (e.g. All using the same ID for all sessions
     * needed to complete a Spark SQL query is reasonable).
     * Maximum length is 256 bytes.
     *
     * Generated from protobuf field <code>string trace_id = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getTraceId()
    {
        return $this->trace_id;
    }

    /**
     * Optional. ID set by client to annotate a session identity.  This does not need
     * to be strictly unique, but instead the same ID should be used to group
     * logically connected sessions (e.g. All using the same ID for all sessions
     * needed to complete a Spark SQL query is reasonable).
     * Maximum length is 256 bytes.
     *
     * Generated from protobuf field <code>string trace_id = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setTraceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->trace_id = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getSchema()
    {
        return $this->whichOneof("schema");
    }

}

