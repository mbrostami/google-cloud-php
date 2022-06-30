<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1\NodePool\UpdateInfo\BlueGreenInfo;

use UnexpectedValueException;

/**
 * Phase represents the different stages blue-green upgrade is running in.
 *
 * Protobuf type <code>google.container.v1.NodePool.UpdateInfo.BlueGreenInfo.Phase</code>
 */
class Phase
{
    /**
     * Unspecified phase.
     *
     * Generated from protobuf enum <code>PHASE_UNSPECIFIED = 0;</code>
     */
    const PHASE_UNSPECIFIED = 0;
    /**
     * blue-green upgrade has been initiated.
     *
     * Generated from protobuf enum <code>UPDATE_STARTED = 1;</code>
     */
    const UPDATE_STARTED = 1;
    /**
     * Start creating green pool nodes.
     *
     * Generated from protobuf enum <code>CREATING_GREEN_POOL = 2;</code>
     */
    const CREATING_GREEN_POOL = 2;
    /**
     * Start cordoning blue pool nodes.
     *
     * Generated from protobuf enum <code>CORDONING_BLUE_POOL = 3;</code>
     */
    const CORDONING_BLUE_POOL = 3;
    /**
     * Start draining blue pool nodes.
     *
     * Generated from protobuf enum <code>DRAINING_BLUE_POOL = 4;</code>
     */
    const DRAINING_BLUE_POOL = 4;
    /**
     * Start soaking time after draining entire blue pool.
     *
     * Generated from protobuf enum <code>NODE_POOL_SOAKING = 5;</code>
     */
    const NODE_POOL_SOAKING = 5;
    /**
     * Start deleting blue nodes.
     *
     * Generated from protobuf enum <code>DELETING_BLUE_POOL = 6;</code>
     */
    const DELETING_BLUE_POOL = 6;
    /**
     * Rollback has been initiated.
     *
     * Generated from protobuf enum <code>ROLLBACK_STARTED = 7;</code>
     */
    const ROLLBACK_STARTED = 7;

    private static $valueToName = [
        self::PHASE_UNSPECIFIED => 'PHASE_UNSPECIFIED',
        self::UPDATE_STARTED => 'UPDATE_STARTED',
        self::CREATING_GREEN_POOL => 'CREATING_GREEN_POOL',
        self::CORDONING_BLUE_POOL => 'CORDONING_BLUE_POOL',
        self::DRAINING_BLUE_POOL => 'DRAINING_BLUE_POOL',
        self::NODE_POOL_SOAKING => 'NODE_POOL_SOAKING',
        self::DELETING_BLUE_POOL => 'DELETING_BLUE_POOL',
        self::ROLLBACK_STARTED => 'ROLLBACK_STARTED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Phase::class, \Google\Cloud\Container\V1\NodePool_UpdateInfo_BlueGreenInfo_Phase::class);

