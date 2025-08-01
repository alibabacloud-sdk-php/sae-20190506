<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeNamespacesResponseBody\data;
use AlibabaCloud\Tea\Model;

class DescribeNamespacesResponseBody extends Model
{
    /**
     * @description The HTTP status code. Valid values:
     *
     *   **2xx**: The call was successful.
     *   **3xx**: The call was redirected.
     *   **4xx**: The call failed.
     *   **5xx**: A server error occurred.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The information of namespaces.
     *
     * @var data
     */
    public $data;

    /**
     * @description The error code. Valid values:
     *
     *   If the call is successful, the **ErrorCode** parameter is not returned.
     *   If the call fails, the **ErrorCode** parameter is returned. For more information, see the **Error codes** section in this topic.
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The returned message. Valid values:
     *
     *   success: If the call is successful, **success** is returned.
     *   An error code: If the call fails, an error code is returned.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 91F93257-7A4A-4BD3-9A7E-2F6EAE6D****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the list of namespaces was queried. Valid values:
     *
     *   **true**: The list was queried.
     *   **false**: The list failed to be queried.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The trace ID that is used to query the details of the request.
     *
     * @example 0a981dd515966966104121683d****
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
     * @return DescribeNamespacesResponseBody
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
