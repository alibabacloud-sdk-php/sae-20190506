<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRulesResponseBody\data\applicationScalingRules\metric;

use AlibabaCloud\Tea\Model;

class scaleDownRules extends Model
{
    /**
     * @description Indicates whether the application scale-in was disabled. Valid values:
     *
     *   **true**: The application scale-in was disabled.
     *   **false**: The application scale-in was enabled.
     *
     * >  When this parameter is set to true, the application instances will never be reduced. This prevents risks to your business in peak hours. By default, this parameter is set to false.
     *
     * @example false
     *
     * @var bool
     */
    public $disabled;

    /**
     * @description The cooldown time of the scale-in. Valid values: 0 to 3600. Unit: seconds. The default value is 0.
     *
     * @example 300
     *
     * @var int
     */
    public $stabilizationWindowSeconds;

    /**
     * @description The step size for the scale-in. The maximum number of instances that can be reduced in a unit of time.
     *
     * @example 100
     *
     * @var int
     */
    public $step;
    protected $_name = [
        'disabled' => 'Disabled',
        'stabilizationWindowSeconds' => 'StabilizationWindowSeconds',
        'step' => 'Step',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->disabled) {
            $res['Disabled'] = $this->disabled;
        }
        if (null !== $this->stabilizationWindowSeconds) {
            $res['StabilizationWindowSeconds'] = $this->stabilizationWindowSeconds;
        }
        if (null !== $this->step) {
            $res['Step'] = $this->step;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scaleDownRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Disabled'])) {
            $model->disabled = $map['Disabled'];
        }
        if (isset($map['StabilizationWindowSeconds'])) {
            $model->stabilizationWindowSeconds = $map['StabilizationWindowSeconds'];
        }
        if (isset($map['Step'])) {
            $model->step = $map['Step'];
        }

        return $model;
    }
}
