<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\BuildPipeline;

use AlibabaCloud\Tea\Model;

class triggerConfig extends Model
{
    /**
     * @example master
     *
     * @var string
     */
    public $branchName;

    /**
     * @example PUSH
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'branchName' => 'BranchName',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->branchName) {
            $res['BranchName'] = $this->branchName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return triggerConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BranchName'])) {
            $model->branchName = $map['BranchName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
