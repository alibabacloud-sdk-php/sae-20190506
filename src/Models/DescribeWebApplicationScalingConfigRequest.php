<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class DescribeWebApplicationScalingConfigRequest extends Model
{
    /**
     * @description The namespace ID.
     *
     * This parameter is required.
     *
     * @example cn-beijing:sae-test
     *
     * @var string
     */
    public $namespaceId;
    protected $_name = [
        'namespaceId' => 'NamespaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWebApplicationScalingConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        return $model;
    }
}
