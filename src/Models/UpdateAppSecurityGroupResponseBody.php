<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class UpdateAppSecurityGroupResponseBody extends Model
{
    /**
     * @description Indicates whether the security group of the application is successfully updated. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The HTTP status code. Valid values:
     *
     *   **2xx**: indicates that the request was successful.
     *   **3xx**: indicates that the request was redirected.
     *   **4xx**: indicates that the request was invalid.
     *   **5xx**: indicates that a server error occurred.
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The ID of the trace. It can be used to query details of a request.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The returned message.
     *
     *   If the request is successful, **success** is returned.
     *   An error code is returned when the request fails.
     *
     * @example 91F93257-7A4A-4BD3-9A7E-2F6EAE6D****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The error code.
     *
     *   If the request is successful, this parameter is not returned.****
     *   This parameter is returned only if the request failed.**** For more information, see the "**Error codes**" section in this topic.
     *
     * @example 0a98a02315955564772843261e****
     *
     * @var string
     */
    public $traceId;
    protected $_name = [
        'code'      => 'Code',
        'errorCode' => 'ErrorCode',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'success'   => 'Success',
        'traceId'   => 'TraceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
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
     * @return UpdateAppSecurityGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
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
