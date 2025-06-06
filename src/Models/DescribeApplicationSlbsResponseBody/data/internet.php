<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationSlbsResponseBody\data;

use AlibabaCloud\Dara\Model;

class internet extends Model
{
    /**
     * @var string
     */
    public $cookie;

    /**
     * @var int
     */
    public $cookieTimeout;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $httpsCaCertId;

    /**
     * @var string
     */
    public $httpsCertId;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var bool
     */
    public $stickySession;

    /**
     * @var string
     */
    public $stickySessionType;

    /**
     * @var int
     */
    public $targetPort;
    protected $_name = [
        'cookie' => 'Cookie',
        'cookieTimeout' => 'CookieTimeout',
        'createTime' => 'CreateTime',
        'httpsCaCertId' => 'HttpsCaCertId',
        'httpsCertId' => 'HttpsCertId',
        'port' => 'Port',
        'protocol' => 'Protocol',
        'stickySession' => 'StickySession',
        'stickySessionType' => 'StickySessionType',
        'targetPort' => 'TargetPort',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cookie) {
            $res['Cookie'] = $this->cookie;
        }

        if (null !== $this->cookieTimeout) {
            $res['CookieTimeout'] = $this->cookieTimeout;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->httpsCaCertId) {
            $res['HttpsCaCertId'] = $this->httpsCaCertId;
        }

        if (null !== $this->httpsCertId) {
            $res['HttpsCertId'] = $this->httpsCertId;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->stickySession) {
            $res['StickySession'] = $this->stickySession;
        }

        if (null !== $this->stickySessionType) {
            $res['StickySessionType'] = $this->stickySessionType;
        }

        if (null !== $this->targetPort) {
            $res['TargetPort'] = $this->targetPort;
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
        if (isset($map['Cookie'])) {
            $model->cookie = $map['Cookie'];
        }

        if (isset($map['CookieTimeout'])) {
            $model->cookieTimeout = $map['CookieTimeout'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['HttpsCaCertId'])) {
            $model->httpsCaCertId = $map['HttpsCaCertId'];
        }

        if (isset($map['HttpsCertId'])) {
            $model->httpsCertId = $map['HttpsCertId'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['StickySession'])) {
            $model->stickySession = $map['StickySession'];
        }

        if (isset($map['StickySessionType'])) {
            $model->stickySessionType = $map['StickySessionType'];
        }

        if (isset($map['TargetPort'])) {
            $model->targetPort = $map['TargetPort'];
        }

        return $model;
    }
}
