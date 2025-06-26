<?php

namespace app\common\model\circle;

use app\common\model\BaseModel;
use think\model\concern\SoftDelete;

/**
 * 圈子管理模型
 * Class Circle
 * @package app\common\model\circle;
 */
class Circle extends BaseModel
{
    use SoftDelete;

    protected $deleteTime = 'delete_time';

}