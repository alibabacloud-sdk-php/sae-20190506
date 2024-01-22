<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\QueryResourceStaticsResponseBody\data;

use AlibabaCloud\Tea\Model;

class summary extends Model
{
    /**
     * @description The CPU usage. Unit: core per minute.
     *
     * @example 3354
     *
     * @var float
     */
    public $cpu;

    /**
     * @description The memory usage. Unit: GiB per minute.
     *
     * @example 6708
     *
     * @var float
     */
    public $memory;
    protected $_name = [
        'cpu'    => 'Cpu',
        'memory' => 'Memory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return summary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        return $model;
    }
}
