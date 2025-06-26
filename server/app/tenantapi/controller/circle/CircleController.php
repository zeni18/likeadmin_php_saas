<?php

namespace app\tenantapi\controller\circle;

use app\tenantapi\controller\BaseAdminController;
use app\tenantapi\lists\circle\CircleLists;

/**
 * 圈子管理控制器
 * Class CircleController
 * @package app\tenantapi\controller\circle
 */
class CircleController extends BaseAdminController
{
    /**
     * @notes  查看圈子列表
     * @return \think\response\Json
     * @author heshihu
     * @date 2022/2/22 9:47
     */
    public function lists()
    {
        return $this->dataLists(new CircleLists());
    }
}