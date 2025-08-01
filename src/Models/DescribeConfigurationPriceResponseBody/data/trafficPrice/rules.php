<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeConfigurationPriceResponseBody\data\trafficPrice;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @description The name of the discount rule.
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the discount rule.
     *
     * @example 2000010******
     *
     * @var float
     */
    public $ruleDescId;
    protected $_name = [
        'name' => 'Name',
        'ruleDescId' => 'RuleDescId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ruleDescId) {
            $res['RuleDescId'] = $this->ruleDescId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RuleDescId'])) {
            $model->ruleDescId = $map['RuleDescId'];
        }

        return $model;
    }
}
