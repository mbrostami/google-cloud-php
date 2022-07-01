<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/intent.proto

namespace Google\Cloud\Dialogflow\V2\Intent\Message;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The card response message.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.Intent.Message.Card</code>
 */
class Card extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The title of the card.
     *
     * Generated from protobuf field <code>string title = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $title = '';
    /**
     * Optional. The subtitle of the card.
     *
     * Generated from protobuf field <code>string subtitle = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $subtitle = '';
    /**
     * Optional. The public URI to an image file for the card.
     *
     * Generated from protobuf field <code>string image_uri = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $image_uri = '';
    /**
     * Optional. The collection of card buttons.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Intent.Message.Card.Button buttons = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $buttons;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $title
     *           Optional. The title of the card.
     *     @type string $subtitle
     *           Optional. The subtitle of the card.
     *     @type string $image_uri
     *           Optional. The public URI to an image file for the card.
     *     @type \Google\Cloud\Dialogflow\V2\Intent\Message\Card\Button[]|\Google\Protobuf\Internal\RepeatedField $buttons
     *           Optional. The collection of card buttons.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Intent::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The title of the card.
     *
     * Generated from protobuf field <code>string title = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Optional. The title of the card.
     *
     * Generated from protobuf field <code>string title = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Optional. The subtitle of the card.
     *
     * Generated from protobuf field <code>string subtitle = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Optional. The subtitle of the card.
     *
     * Generated from protobuf field <code>string subtitle = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setSubtitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->subtitle = $var;

        return $this;
    }

    /**
     * Optional. The public URI to an image file for the card.
     *
     * Generated from protobuf field <code>string image_uri = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getImageUri()
    {
        return $this->image_uri;
    }

    /**
     * Optional. The public URI to an image file for the card.
     *
     * Generated from protobuf field <code>string image_uri = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setImageUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->image_uri = $var;

        return $this;
    }

    /**
     * Optional. The collection of card buttons.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Intent.Message.Card.Button buttons = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getButtons()
    {
        return $this->buttons;
    }

    /**
     * Optional. The collection of card buttons.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Intent.Message.Card.Button buttons = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dialogflow\V2\Intent\Message\Card\Button[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setButtons($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\Intent\Message\Card\Button::class);
        $this->buttons = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Card::class, \Google\Cloud\Dialogflow\V2\Intent_Message_Card::class);

