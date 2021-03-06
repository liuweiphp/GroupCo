<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: user.proto

namespace Api\User\Model;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.user.model.User</code>
 */
class User extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>string mobile = 2;</code>
     */
    protected $mobile = '';
    /**
     * Generated from protobuf field <code>string password = 3;</code>
     */
    protected $password = '';
    /**
     * Generated from protobuf field <code>.api.user.model.UserProfile profile = 4;</code>
     */
    protected $profile = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *     @type string $mobile
     *     @type string $password
     *     @type \Api\User\Model\UserProfile $profile
     * }
     */
    public function __construct($data = NULL) {
        \Api\User\GPBMetadata\User::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string mobile = 2;</code>
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Generated from protobuf field <code>string mobile = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMobile($var)
    {
        GPBUtil::checkString($var, True);
        $this->mobile = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string password = 3;</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Generated from protobuf field <code>string password = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.api.user.model.UserProfile profile = 4;</code>
     * @return \Api\User\Model\UserProfile
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Generated from protobuf field <code>.api.user.model.UserProfile profile = 4;</code>
     * @param \Api\User\Model\UserProfile $var
     * @return $this
     */
    public function setProfile($var)
    {
        GPBUtil::checkMessage($var, \Api\User\Model\UserProfile::class);
        $this->profile = $var;

        return $this;
    }

}

