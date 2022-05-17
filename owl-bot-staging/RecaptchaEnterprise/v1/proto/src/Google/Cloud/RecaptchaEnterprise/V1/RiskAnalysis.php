<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recaptchaenterprise/v1/recaptchaenterprise.proto

namespace Google\Cloud\RecaptchaEnterprise\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Risk analysis result for an event.
 *
 * Generated from protobuf message <code>google.cloud.recaptchaenterprise.v1.RiskAnalysis</code>
 */
class RiskAnalysis extends \Google\Protobuf\Internal\Message
{
    /**
     * Legitimate event score from 0.0 to 1.0.
     * (1.0 means very likely legitimate traffic while 0.0 means very likely
     * non-legitimate traffic).
     *
     * Generated from protobuf field <code>float score = 1;</code>
     */
    protected $score = 0.0;
    /**
     * Reasons contributing to the risk analysis verdict.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recaptchaenterprise.v1.RiskAnalysis.ClassificationReason reasons = 2;</code>
     */
    private $reasons;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $score
     *           Legitimate event score from 0.0 to 1.0.
     *           (1.0 means very likely legitimate traffic while 0.0 means very likely
     *           non-legitimate traffic).
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $reasons
     *           Reasons contributing to the risk analysis verdict.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recaptchaenterprise\V1\Recaptchaenterprise::initOnce();
        parent::__construct($data);
    }

    /**
     * Legitimate event score from 0.0 to 1.0.
     * (1.0 means very likely legitimate traffic while 0.0 means very likely
     * non-legitimate traffic).
     *
     * Generated from protobuf field <code>float score = 1;</code>
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Legitimate event score from 0.0 to 1.0.
     * (1.0 means very likely legitimate traffic while 0.0 means very likely
     * non-legitimate traffic).
     *
     * Generated from protobuf field <code>float score = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->score = $var;

        return $this;
    }

    /**
     * Reasons contributing to the risk analysis verdict.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recaptchaenterprise.v1.RiskAnalysis.ClassificationReason reasons = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReasons()
    {
        return $this->reasons;
    }

    /**
     * Reasons contributing to the risk analysis verdict.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recaptchaenterprise.v1.RiskAnalysis.ClassificationReason reasons = 2;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReasons($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\RecaptchaEnterprise\V1\RiskAnalysis\ClassificationReason::class);
        $this->reasons = $arr;

        return $this;
    }

}

