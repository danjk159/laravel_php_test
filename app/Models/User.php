<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
      /**
     * 指示模型是否自动维护时间戳
     *
     * @var bool
     */
    public $timestamps = false;
        /**
     * 模型日期列的存储格式。
     *
     * @var string
     */
    protected $dateFormat = 'U';
}
