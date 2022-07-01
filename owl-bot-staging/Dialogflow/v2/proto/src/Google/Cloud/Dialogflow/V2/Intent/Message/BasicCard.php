<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/intent.proto

namespace Google\Cloud\Dialogflow\V2\Intent\Message;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The basic card message. Useful for displaying information.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.Intent.Message.BasicCard</code>
 */
class BasicCard extends \Google\Protobuf\Internal\Message
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
     * Required, unless image is present. The body text of the card.
     *
     * Generated from protobuf field <code>string formatted_text = 3;</code>
     */
    protected $formatted_text = '';
    /**
     * Optional. The image for the card.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.Image image = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $image = null;
    /**
     * Optional. The collection of card buttons.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Intent.Message.BasicCard.Button buttons = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     *     @type string $formatted_text
     *           Required, unless image is present. The body text of the card.
     *     @type \Google\Cloud\Dialogflow\V2\Intent\Message\Image $image
     *           Optional. The image for the card.
     *     @type \Google\Cloud\Dialogflow\V2\Intent\Message\BasicCard\Button[]|\Google\Protobuf\Internal\RepeatedField $buttons
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
     * Required, unless image is present. The body text of the card.
     *
     * Generated from protobuf field <code>string formatted_text = 3;</code>
     * @return string
     */
    public function getFormattedText()
    {
        return $this->formatted_text;
    }

    /**
     * Required, unless image is present. The body text of the card.
     *
     * Generated from protobuf field <code>string formatted_text = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFormattedText($var)
    {
        GPBUtil::checkString($var, True);
        $this->formatted_text = $var;

        return $this;
    }

    /**
     * Optional. The image for the card.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.Image image = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dialogflow\V2\Intent\Message\Image|null
     */
    public function getImage()
    {
        return $this->image;
    }

    public function hasImage()
    {
        return isset($this->image);
    }

    public function clearImage()
    {
        unset($this->image);
    }

    /**
     * Optional. The image for the card.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.Message.Image image = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dialogflow\V2\Intent\Message\Image $var
     * @return $this
     */
    public function setImage($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\Intent\Message\Image::class);
        $this->image = $var;

        return $this;
    }

    /**
     * Optional. The collection of card buttons.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Intent.Message.BasicCard.Button buttons = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getButtons()
    {
        return $this->buttons;
    }

    /**
     * Optional. The collection of card buttons.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Intent.Message.BasicCard.Button buttons = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dialogflow\V2\Intent\Message\BasicCard\Button[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setButtons($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\Intent\Message\BasicCard\Button::class);
        $this->buttons = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BasicCard::class, \Google\Cloud\Dialogflow\V2\Intent_Message_BasicCard::class);

