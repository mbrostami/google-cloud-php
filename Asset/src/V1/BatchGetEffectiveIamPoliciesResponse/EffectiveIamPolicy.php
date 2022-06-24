<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace Google\Cloud\Asset\V1\BatchGetEffectiveIamPoliciesResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The effective IAM policies on one resource.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy</code>
 */
class EffectiveIamPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * The [full_resource_name]
     * (https://cloud.google.com/asset-inventory/docs/resource-name-format)
     * for which the
     * [policies][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.policies]
     * are computed. This is one of the
     * [BatchGetEffectiveIamPoliciesRequest.names][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesRequest.names]
     * the caller provides in the request.
     *
     * Generated from protobuf field <code>string full_resource_name = 1;</code>
     */
    private $full_resource_name = '';
    /**
     * The effective policies for the
     * [full_resource_name][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.full_resource_name].
     * These policies include the policy set on the
     * [full_resource_name][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.full_resource_name]
     * and those set on its parents and ancestors up to the
     * [BatchGetEffectiveIamPoliciesRequest.scope][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesRequest.scope].
     * Note that these policies are not filtered according to the resource type
     * of the
     * [full_resource_name][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.full_resource_name].
     * These policies are hierarchically ordered by
     * [PolicyInfo.attached_resource][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.PolicyInfo.attached_resource]
     * starting from
     * [full_resource_name][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.full_resource_name]
     * itself to its parents and ancestors, such that policies[i]'s
     * [PolicyInfo.attached_resource][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.PolicyInfo.attached_resource]
     * is the child of policies[i+1]'s
     * [PolicyInfo.attached_resource][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.PolicyInfo.attached_resource],
     * if policies[i+1] exists.
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.PolicyInfo policies = 2;</code>
     */
    private $policies;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $full_resource_name
     *           The [full_resource_name]
     *           (https://cloud.google.com/asset-inventory/docs/resource-name-format)
     *           for which the
     *           [policies][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.policies]
     *           are computed. This is one of the
     *           [BatchGetEffectiveIamPoliciesRequest.names][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesRequest.names]
     *           the caller provides in the request.
     *     @type \Google\Cloud\Asset\V1\BatchGetEffectiveIamPoliciesResponse\EffectiveIamPolicy\PolicyInfo[]|\Google\Protobuf\Internal\RepeatedField $policies
     *           The effective policies for the
     *           [full_resource_name][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.full_resource_name].
     *           These policies include the policy set on the
     *           [full_resource_name][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.full_resource_name]
     *           and those set on its parents and ancestors up to the
     *           [BatchGetEffectiveIamPoliciesRequest.scope][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesRequest.scope].
     *           Note that these policies are not filtered according to the resource type
     *           of the
     *           [full_resource_name][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.full_resource_name].
     *           These policies are hierarchically ordered by
     *           [PolicyInfo.attached_resource][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.PolicyInfo.attached_resource]
     *           starting from
     *           [full_resource_name][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.full_resource_name]
     *           itself to its parents and ancestors, such that policies[i]'s
     *           [PolicyInfo.attached_resource][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.PolicyInfo.attached_resource]
     *           is the child of policies[i+1]'s
     *           [PolicyInfo.attached_resource][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.PolicyInfo.attached_resource],
     *           if policies[i+1] exists.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * The [full_resource_name]
     * (https://cloud.google.com/asset-inventory/docs/resource-name-format)
     * for which the
     * [policies][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.policies]
     * are computed. This is one of the
     * [BatchGetEffectiveIamPoliciesRequest.names][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesRequest.names]
     * the caller provides in the request.
     *
     * Generated from protobuf field <code>string full_resource_name = 1;</code>
     * @return string
     */
    public function getFullResourceName()
    {
        return $this->full_resource_name;
    }

    /**
     * The [full_resource_name]
     * (https://cloud.google.com/asset-inventory/docs/resource-name-format)
     * for which the
     * [policies][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.policies]
     * are computed. This is one of the
     * [BatchGetEffectiveIamPoliciesRequest.names][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesRequest.names]
     * the caller provides in the request.
     *
     * Generated from protobuf field <code>string full_resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFullResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->full_resource_name = $var;

        return $this;
    }

    /**
     * The effective policies for the
     * [full_resource_name][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.full_resource_name].
     * These policies include the policy set on the
     * [full_resource_name][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.full_resource_name]
     * and those set on its parents and ancestors up to the
     * [BatchGetEffectiveIamPoliciesRequest.scope][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesRequest.scope].
     * Note that these policies are not filtered according to the resource type
     * of the
     * [full_resource_name][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.full_resource_name].
     * These policies are hierarchically ordered by
     * [PolicyInfo.attached_resource][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.PolicyInfo.attached_resource]
     * starting from
     * [full_resource_name][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.full_resource_name]
     * itself to its parents and ancestors, such that policies[i]'s
     * [PolicyInfo.attached_resource][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.PolicyInfo.attached_resource]
     * is the child of policies[i+1]'s
     * [PolicyInfo.attached_resource][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.PolicyInfo.attached_resource],
     * if policies[i+1] exists.
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.PolicyInfo policies = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPolicies()
    {
        return $this->policies;
    }

    /**
     * The effective policies for the
     * [full_resource_name][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.full_resource_name].
     * These policies include the policy set on the
     * [full_resource_name][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.full_resource_name]
     * and those set on its parents and ancestors up to the
     * [BatchGetEffectiveIamPoliciesRequest.scope][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesRequest.scope].
     * Note that these policies are not filtered according to the resource type
     * of the
     * [full_resource_name][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.full_resource_name].
     * These policies are hierarchically ordered by
     * [PolicyInfo.attached_resource][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.PolicyInfo.attached_resource]
     * starting from
     * [full_resource_name][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.full_resource_name]
     * itself to its parents and ancestors, such that policies[i]'s
     * [PolicyInfo.attached_resource][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.PolicyInfo.attached_resource]
     * is the child of policies[i+1]'s
     * [PolicyInfo.attached_resource][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.PolicyInfo.attached_resource],
     * if policies[i+1] exists.
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.PolicyInfo policies = 2;</code>
     * @param \Google\Cloud\Asset\V1\BatchGetEffectiveIamPoliciesResponse\EffectiveIamPolicy\PolicyInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPolicies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Asset\V1\BatchGetEffectiveIamPoliciesResponse\EffectiveIamPolicy\PolicyInfo::class);
        $this->policies = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EffectiveIamPolicy::class, \Google\Cloud\Asset\V1\BatchGetEffectiveIamPoliciesResponse_EffectiveIamPolicy::class);

