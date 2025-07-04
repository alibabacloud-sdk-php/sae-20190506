<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeIngressResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeIngressResponseBody\data\corsConfig;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeIngressResponseBody\data\defaultRule;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeIngressResponseBody\data\rules;

class data extends Model
{
    /**
     * @var string
     */
    public $certId;

    /**
     * @var string
     */
    public $certIds;

    /**
     * @var corsConfig
     */
    public $corsConfig;

    /**
     * @var bool
     */
    public $createdBySae;

    /**
     * @var defaultRule
     */
    public $defaultRule;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enableXForwardedFor;

    /**
     * @var bool
     */
    public $enableXForwardedForClientSrcPort;

    /**
     * @var bool
     */
    public $enableXForwardedForProto;

    /**
     * @var bool
     */
    public $enableXForwardedForSlbId;

    /**
     * @var bool
     */
    public $enableXForwardedForSlbPort;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $idleTimeout;

    /**
     * @var int
     */
    public $listenerPort;

    /**
     * @var string
     */
    public $listenerProtocol;

    /**
     * @var string
     */
    public $loadBalanceType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var int
     */
    public $requestTimeout;

    /**
     * @var rules[]
     */
    public $rules;

    /**
     * @var string
     */
    public $securityPolicyId;

    /**
     * @var string
     */
    public $slbId;

    /**
     * @var string
     */
    public $slbType;
    protected $_name = [
        'certId' => 'CertId',
        'certIds' => 'CertIds',
        'corsConfig' => 'CorsConfig',
        'createdBySae' => 'CreatedBySae',
        'defaultRule' => 'DefaultRule',
        'description' => 'Description',
        'enableXForwardedFor' => 'EnableXForwardedFor',
        'enableXForwardedForClientSrcPort' => 'EnableXForwardedForClientSrcPort',
        'enableXForwardedForProto' => 'EnableXForwardedForProto',
        'enableXForwardedForSlbId' => 'EnableXForwardedForSlbId',
        'enableXForwardedForSlbPort' => 'EnableXForwardedForSlbPort',
        'id' => 'Id',
        'idleTimeout' => 'IdleTimeout',
        'listenerPort' => 'ListenerPort',
        'listenerProtocol' => 'ListenerProtocol',
        'loadBalanceType' => 'LoadBalanceType',
        'name' => 'Name',
        'namespaceId' => 'NamespaceId',
        'requestTimeout' => 'RequestTimeout',
        'rules' => 'Rules',
        'securityPolicyId' => 'SecurityPolicyId',
        'slbId' => 'SlbId',
        'slbType' => 'SlbType',
    ];

    public function validate()
    {
        if (null !== $this->corsConfig) {
            $this->corsConfig->validate();
        }
        if (null !== $this->defaultRule) {
            $this->defaultRule->validate();
        }
        if (\is_array($this->rules)) {
            Model::validateArray($this->rules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }

        if (null !== $this->certIds) {
            $res['CertIds'] = $this->certIds;
        }

        if (null !== $this->corsConfig) {
            $res['CorsConfig'] = null !== $this->corsConfig ? $this->corsConfig->toArray($noStream) : $this->corsConfig;
        }

        if (null !== $this->createdBySae) {
            $res['CreatedBySae'] = $this->createdBySae;
        }

        if (null !== $this->defaultRule) {
            $res['DefaultRule'] = null !== $this->defaultRule ? $this->defaultRule->toArray($noStream) : $this->defaultRule;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enableXForwardedFor) {
            $res['EnableXForwardedFor'] = $this->enableXForwardedFor;
        }

        if (null !== $this->enableXForwardedForClientSrcPort) {
            $res['EnableXForwardedForClientSrcPort'] = $this->enableXForwardedForClientSrcPort;
        }

        if (null !== $this->enableXForwardedForProto) {
            $res['EnableXForwardedForProto'] = $this->enableXForwardedForProto;
        }

        if (null !== $this->enableXForwardedForSlbId) {
            $res['EnableXForwardedForSlbId'] = $this->enableXForwardedForSlbId;
        }

        if (null !== $this->enableXForwardedForSlbPort) {
            $res['EnableXForwardedForSlbPort'] = $this->enableXForwardedForSlbPort;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->idleTimeout) {
            $res['IdleTimeout'] = $this->idleTimeout;
        }

        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }

        if (null !== $this->listenerProtocol) {
            $res['ListenerProtocol'] = $this->listenerProtocol;
        }

        if (null !== $this->loadBalanceType) {
            $res['LoadBalanceType'] = $this->loadBalanceType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        if (null !== $this->requestTimeout) {
            $res['RequestTimeout'] = $this->requestTimeout;
        }

        if (null !== $this->rules) {
            if (\is_array($this->rules)) {
                $res['Rules'] = [];
                $n1 = 0;
                foreach ($this->rules as $item1) {
                    $res['Rules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->securityPolicyId) {
            $res['SecurityPolicyId'] = $this->securityPolicyId;
        }

        if (null !== $this->slbId) {
            $res['SlbId'] = $this->slbId;
        }

        if (null !== $this->slbType) {
            $res['SlbType'] = $this->slbType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }

        if (isset($map['CertIds'])) {
            $model->certIds = $map['CertIds'];
        }

        if (isset($map['CorsConfig'])) {
            $model->corsConfig = corsConfig::fromMap($map['CorsConfig']);
        }

        if (isset($map['CreatedBySae'])) {
            $model->createdBySae = $map['CreatedBySae'];
        }

        if (isset($map['DefaultRule'])) {
            $model->defaultRule = defaultRule::fromMap($map['DefaultRule']);
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnableXForwardedFor'])) {
            $model->enableXForwardedFor = $map['EnableXForwardedFor'];
        }

        if (isset($map['EnableXForwardedForClientSrcPort'])) {
            $model->enableXForwardedForClientSrcPort = $map['EnableXForwardedForClientSrcPort'];
        }

        if (isset($map['EnableXForwardedForProto'])) {
            $model->enableXForwardedForProto = $map['EnableXForwardedForProto'];
        }

        if (isset($map['EnableXForwardedForSlbId'])) {
            $model->enableXForwardedForSlbId = $map['EnableXForwardedForSlbId'];
        }

        if (isset($map['EnableXForwardedForSlbPort'])) {
            $model->enableXForwardedForSlbPort = $map['EnableXForwardedForSlbPort'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IdleTimeout'])) {
            $model->idleTimeout = $map['IdleTimeout'];
        }

        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }

        if (isset($map['ListenerProtocol'])) {
            $model->listenerProtocol = $map['ListenerProtocol'];
        }

        if (isset($map['LoadBalanceType'])) {
            $model->loadBalanceType = $map['LoadBalanceType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        if (isset($map['RequestTimeout'])) {
            $model->requestTimeout = $map['RequestTimeout'];
        }

        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n1 = 0;
                foreach ($map['Rules'] as $item1) {
                    $model->rules[$n1] = rules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SecurityPolicyId'])) {
            $model->securityPolicyId = $map['SecurityPolicyId'];
        }

        if (isset($map['SlbId'])) {
            $model->slbId = $map['SlbId'];
        }

        if (isset($map['SlbType'])) {
            $model->slbType = $map['SlbType'];
        }

        return $model;
    }
}
