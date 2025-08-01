<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeSwimmingLaneResponseBody\data\mseGatewayEntryRule;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeSwimmingLaneResponseBody\data\mseGatewayEntryRule\routes\routePredicate;
use AlibabaCloud\Tea\Model;

class routes extends Model
{
    /**
     * @example 9504
     *
     * @var int
     */
    public $routeId;

    /**
     * @example demo
     *
     * @var string
     */
    public $routeName;

    /**
     * @var routePredicate
     */
    public $routePredicate;
    protected $_name = [
        'routeId' => 'RouteId',
        'routeName' => 'RouteName',
        'routePredicate' => 'RoutePredicate',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->routeId) {
            $res['RouteId'] = $this->routeId;
        }
        if (null !== $this->routeName) {
            $res['RouteName'] = $this->routeName;
        }
        if (null !== $this->routePredicate) {
            $res['RoutePredicate'] = null !== $this->routePredicate ? $this->routePredicate->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RouteId'])) {
            $model->routeId = $map['RouteId'];
        }
        if (isset($map['RouteName'])) {
            $model->routeName = $map['RouteName'];
        }
        if (isset($map['RoutePredicate'])) {
            $model->routePredicate = routePredicate::fromMap($map['RoutePredicate']);
        }

        return $model;
    }
}
