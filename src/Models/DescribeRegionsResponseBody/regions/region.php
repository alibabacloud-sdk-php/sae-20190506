<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeRegionsResponseBody\regions;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeRegionsResponseBody\regions\region\recommendZones;
use AlibabaCloud\Tea\Model;

class region extends Model
{
    /**
     * @var string
     */
    public $localName;

    /**
     * @var recommendZones
     */
    public $recommendZones;

    /**
     * @var string
     */
    public $regionEndpoint;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'localName'      => 'LocalName',
        'recommendZones' => 'RecommendZones',
        'regionEndpoint' => 'RegionEndpoint',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }
        if (null !== $this->recommendZones) {
            $res['RecommendZones'] = null !== $this->recommendZones ? $this->recommendZones->toMap() : null;
        }
        if (null !== $this->regionEndpoint) {
            $res['RegionEndpoint'] = $this->regionEndpoint;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return region
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }
        if (isset($map['RecommendZones'])) {
            $model->recommendZones = recommendZones::fromMap($map['RecommendZones']);
        }
        if (isset($map['RegionEndpoint'])) {
            $model->regionEndpoint = $map['RegionEndpoint'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
