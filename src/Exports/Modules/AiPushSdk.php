<?php
/**
 * 重要说明
 * 1. 本文件由Postman命令脚本自动生成, 请不要修改, 若需修改
 *    请通过`php console postman`命令重新生成.
 * 2. 本脚本在生成时, 依赖所在项目的Controller有 `@Sdk method`定义,
 *    同时, 项目根目录下的`postman.json`需有`sdk`、`sdkLink`定义
 * 3. 发布SDK，请将本文件放到`uniondrug/service-sdk`项目
 *    的`src/Exports/Modules`目录下，并发重新发布release版本.
 * @author PostmanCommand
 * @date   2019-09-17
 * @time   Tue, 17 Sep 2019 11:46:12 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * AiPushSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class AiPushSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'aiPush.module';

    /**
     * JAVA调用是否发放积分
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PoolRecordsController/issuePointsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function checkIssuePoints($body)
    {
        return $this->restful("POST", "/poolRecords/checkIssuePoints", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/IndustryCashPoolingController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function industryCashPoolingCreate($body)
    {
        return $this->restful("POST", "/industryCashPooling/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/IndustryCashPoolingController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function industryCashPoolingDetail($body)
    {
        return $this->restful("POST", "/industryCashPooling/detail", $body);
    }

    /**
     * 资金池停用
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/IndustryCashPoolingController/disableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function industryCashPoolingDisable($body)
    {
        return $this->restful("POST", "/industryCashPooling/disable", $body);
    }

    /**
     * 资金池启用
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/IndustryCashPoolingController/enableRatioAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function industryCashPoolingEnable($body)
    {
        return $this->restful("POST", "/industryCashPooling/enable", $body);
    }

    /**
     * 修改服务费比例
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/IndustryCashPoolingController/modifyRatioAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function industryCashPoolingModifyRatio($body)
    {
        return $this->restful("POST", "/industryCashPooling/modifyRatio", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/IndustryCashPoolingController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function industryCashPoolingPaging($body)
    {
        return $this->restful("POST", "/industryCashPooling/paging", $body);
    }

    /**
     * 充值
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/IndustryCashPoolingController/rechargeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function industryCashPoolingRecharge($body)
    {
        return $this->restful("POST", "/industryCashPooling/recharge", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function planCreate($body)
    {
        return $this->restful("POST", "/plan/create", $body);
    }

    /**
     * 更新方案状态
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function planDelete($body)
    {
        return $this->restful("POST", "/plan/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function planDetail($body)
    {
        return $this->restful("POST", "/plan/detail", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanGoodsController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function planGoodsCreate($body)
    {
        return $this->restful("POST", "/planGoods/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanGoodsController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function planGoodsDelete($body)
    {
        return $this->restful("POST", "/planGoods/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanGoodsController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function planGoodsDetail($body)
    {
        return $this->restful("POST", "/planGoods/detail", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanGoodsController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function planGoodsListing($body)
    {
        return $this->restful("POST", "/planGoods/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanGoodsController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function planGoodsPaging($body)
    {
        return $this->restful("POST", "/planGoods/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanGoodsController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function planGoodsUpdate($body)
    {
        return $this->restful("POST", "/planGoods/update", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function planPaging($body)
    {
        return $this->restful("POST", "/plan/paging", $body);
    }

    /**
     * 编辑方案
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function planUpdate($body)
    {
        return $this->restful("POST", "/plan/update", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PoolRecordsController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function poolRecordsCreate($body)
    {
        return $this->restful("POST", "/poolRecords/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PoolRecordsController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function poolRecordsDelete($body)
    {
        return $this->restful("POST", "/poolRecords/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PoolRecordsController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function poolRecordsDetail($body)
    {
        return $this->restful("POST", "/poolRecords/detail", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PoolRecordsController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function poolRecordsListing($body)
    {
        return $this->restful("POST", "/poolRecords/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PoolRecordsController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function poolRecordsPaging($body)
    {
        return $this->restful("POST", "/poolRecords/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PoolRecordsController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function poolRecordsUpdate($body)
    {
        return $this->restful("POST", "/poolRecords/update", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/UsersController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function usersCreate($body)
    {
        return $this->restful("POST", "/users/create", $body);
    }

    /**
     * 用户详情
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/UsersController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function usersDetail($body)
    {
        return $this->restful("POST", "/users/detail", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/UsersController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function usersPaging($body)
    {
        return $this->restful("POST", "/users/paging", $body);
    }

    /**
     * 更新用户信息
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/UsersController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function usersUpdate($body)
    {
        return $this->restful("POST", "/users/update", $body);
    }

    /**
     * 启用或关闭用户
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/UsersController/updateStatusAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function usersUpdateStatus($body)
    {
        return $this->restful("POST", "/users/updateStatus", $body);
    }
}
