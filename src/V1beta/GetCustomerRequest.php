<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/cloudcontrolspartner/v1beta/customers.proto

namespace Google\Cloud\CloudControlsPartner\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for getting a customer
 *
 * Generated from protobuf message <code>google.cloud.cloudcontrolspartner.v1beta.GetCustomerRequest</code>
 */
class GetCustomerRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Format:
     * organizations/{organization}/locations/{location}/customers/{customer}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. Format:
     *                     organizations/{organization}/locations/{location}/customers/{customer}
     *                     Please see {@see CloudControlsPartnerCoreClient::customerName()} for help formatting this field.
     *
     * @return \Google\Cloud\CloudControlsPartner\V1beta\GetCustomerRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Format:
     *           organizations/{organization}/locations/{location}/customers/{customer}
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Cloudcontrolspartner\V1Beta\Customers::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Format:
     * organizations/{organization}/locations/{location}/customers/{customer}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Format:
     * organizations/{organization}/locations/{location}/customers/{customer}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}
