<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class RegistryAuthConfig extends Model
{
    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'password' => 'password',
        'role' => 'role',
        'userName' => 'userName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->password) {
            $res['password'] = $this->password;
        }

        if (null !== $this->role) {
            $res['role'] = $this->role;
        }

        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['password'])) {
            $model->password = $map['password'];
        }

        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }

        return $model;
    }
}
