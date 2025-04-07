<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeConfigurationPriceResponseBody\data;
use AlibabaCloud\Tea\Model;

class DescribeConfigurationPriceResponseBody extends Model
{
    /**
     * @description The HTTP status code. Valid values:
     *
     *   **2xx**: The request was successful.
     *   **3xx**: The request was redirected.
     *   **4xx**: The request failed.
     *   **5xx**: A server error occurred.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The price.
     *
     * @var data
     */
    public $data;

    /**
     * @description The error code. Valid values:
     *
     *   If the request was successful, **ErrorCode** is not returned.
     *   If the request failed, **ErrorCode** is returned. For more information, see **Error codes** in this topic.
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The message returned. Valid values:
     *
     *   If the request was successful, **success** is returned.
     *   If the request failed, an error code is returned.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example ADCEC067-86AD-19E2-BD43-E83F3841****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the configuration price was obtained.
     *
     *   **true**: The price was obtained.
     *   **false**: The price failed to be queried.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The ID of the trace.
     *
     * @example 1a0dcc771722848598056771******
     *
     * @var string
     */
    public $traceId;
    protected $_name = [
        'code' => 'Code',
        'data' => 'Data',
        'errorCode' => 'ErrorCode',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'traceId' => 'TraceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeConfigurationPriceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }

        return $model;
    }
}
