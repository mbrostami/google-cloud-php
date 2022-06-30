<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1\BlueGreenSettings;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Standard rollout policy is the default policy for blue-green.
 *
 * Generated from protobuf message <code>google.container.v1.BlueGreenSettings.StandardRolloutPolicy</code>
 */
class StandardRolloutPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Soak time after each batch gets drained. Default to zero.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration batch_soak_duration = 3;</code>
     */
    protected $batch_soak_duration = null;
    protected $update_batch_size;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $batch_percentage
     *           Percentage of the bool pool nodes to drain in a batch.
     *           The range of this field should be (0.0, 1.0].
     *     @type int $batch_node_count
     *           Number of blue nodes to drain in a batch.
     *     @type \Google\Protobuf\Duration $batch_soak_duration
     *           Soak time after each batch gets drained. Default to zero.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Percentage of the bool pool nodes to drain in a batch.
     * The range of this field should be (0.0, 1.0].
     *
     * Generated from protobuf field <code>float batch_percentage = 1;</code>
     * @return float
     */
    public function getBatchPercentage()
    {
        return $this->readOneof(1);
    }

    public function hasBatchPercentage()
    {
        return $this->hasOneof(1);
    }

    /**
     * Percentage of the bool pool nodes to drain in a batch.
     * The range of this field should be (0.0, 1.0].
     *
     * Generated from protobuf field <code>float batch_percentage = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setBatchPercentage($var)
    {
        GPBUtil::checkFloat($var);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Number of blue nodes to drain in a batch.
     *
     * Generated from protobuf field <code>int32 batch_node_count = 2;</code>
     * @return int
     */
    public function getBatchNodeCount()
    {
        return $this->readOneof(2);
    }

    public function hasBatchNodeCount()
    {
        return $this->hasOneof(2);
    }

    /**
     * Number of blue nodes to drain in a batch.
     *
     * Generated from protobuf field <code>int32 batch_node_count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setBatchNodeCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Soak time after each batch gets drained. Default to zero.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration batch_soak_duration = 3;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getBatchSoakDuration()
    {
        return $this->batch_soak_duration;
    }

    public function hasBatchSoakDuration()
    {
        return isset($this->batch_soak_duration);
    }

    public function clearBatchSoakDuration()
    {
        unset($this->batch_soak_duration);
    }

    /**
     * Soak time after each batch gets drained. Default to zero.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration batch_soak_duration = 3;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setBatchSoakDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->batch_soak_duration = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getUpdateBatchSize()
    {
        return $this->whichOneof("update_batch_size");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StandardRolloutPolicy::class, \Google\Cloud\Container\V1\BlueGreenSettings_StandardRolloutPolicy::class);

