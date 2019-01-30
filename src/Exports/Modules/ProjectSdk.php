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
 * @date   2019-01-30
 * @time   Wed, 30 Jan 2019 17:43:16 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * ProjectSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class ProjectSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'project.module';

    /**
     * 接受审批
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/acceptAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function acceptProject($body)
    {
        return $this->restful("POST", "/project/accept", $body);
    }

    /**
     * 激活用户
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/activeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activeUser($body)
    {
        return $this->restful("POST", "/user/active", $body);
    }

    /**
     * 添加分组
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addGroup($body)
    {
        return $this->restful("POST", "/group/add", $body);
    }

    /**
     * 新增接口模式的规则
     * 只有在开启的时候 才会调一次
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupAccessController/addGroupInterfaceAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addGroupInterface($body)
    {
        return $this->restful("POST", "/group/access/interface/add", $body);
    }

    /**
     * 新增日志
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/LogController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addLog($body)
    {
        return $this->restful("POST", "/log/add", $body);
    }

    /**
     * 添加项目
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addProject($body)
    {
        return $this->restful("POST", "/project/add", $body);
    }

    /**
     * 用户批量添加
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/addsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addsUser($body)
    {
        return $this->restful("POST", "/user/adds", $body);
    }

    /**
     * 添加用户
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addUser($body)
    {
        return $this->restful("POST", "/user/add", $body);
    }

    /**
     * 提交审批
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/approvalAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function approvalProject($body)
    {
        return $this->restful("POST", "/project/approval", $body);
    }

    /**
     * 取消审批
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/cancelAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function cancelProject($body)
    {
        return $this->restful("POST", "/project/cancel", $body);
    }

    /**
     * 验证权益领取
     * 验证用户输入的信息是否正确, 当正确时
     * 业务系统继续执行下层激活逻辑, 反之应中止执行
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/VerifyController/checkAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function checkVerify($body)
    {
        return $this->restful("POST", "/verify/check", $body);
    }

    /**
     * 删除项目
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function deleteProject($body)
    {
        return $this->restful("POST", "/project/delete", $body);
    }

    /**
     * 删除分组
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupController/delAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function delGroup($body)
    {
        return $this->restful("POST", "/group/del", $body);
    }

    /**
     * 禁用/冻结
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupController/disableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function disableGroup($body)
    {
        return $this->restful("POST", "/group/disable", $body);
    }

    /**
     * 冻结用户
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/disableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function disableUser($body)
    {
        return $this->restful("POST", "/user/disable", $body);
    }

    /**
     * 导出兑换码sql
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/getCdCodeBySqlAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function downCdCodeSql($body)
    {
        return $this->restful("POST", "/user/down/cdcode/sql", $body);
    }

    /**
     * 权益列表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/getEquityBySqlAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function downEquitySql($body)
    {
        return $this->restful("POST", "/user/down/equity/sql", $body);
    }

    /**
     * 编辑分组
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editGroup($body)
    {
        return $this->restful("POST", "/group/edit", $body);
    }

    /**
     * 修改激活信息
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupActivateController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editGroupActivate($body)
    {
        return $this->restful("POST", "/group/activate/edit", $body);
    }

    /**
     * 编辑接口模式的规则
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupAccessController/editGroupInterfaceAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editGroupInterface($body)
    {
        return $this->restful("POST", "/group/access/interface/edit", $body);
    }

    /**
     * 编辑项目
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editProject($body)
    {
        return $this->restful("POST", "/project/edit", $body);
    }

    /**
     * 编辑用户
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editUser($body)
    {
        return $this->restful("POST", "/user/edit", $body);
    }

    /**
     * 启用/执行中
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupController/enableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function enableGroup($body)
    {
        return $this->restful("POST", "/group/enable", $body);
    }

    /**
     * 解锁用户
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/enableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function enableUser($body)
    {
        return $this->restful("POST", "/user/enable", $body);
    }

    /**
     * listAction()
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ApprovalController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getApprovalList($body)
    {
        return $this->restful("POST", "/approval/list", $body);
    }

    /**
     * 获取唯一兑换码
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/VerifyController/cdKeyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getCdKey($body)
    {
        return $this->restful("POST", "/verify/cdKey", $body);
    }

    /**
     * 城市维度报表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ExportController/cityAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getExportCity($body)
    {
        return $this->restful("POST", "/export/city", $body);
    }

    /**
     * 最近N天的消费记录报表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ExportController/daysAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getExportDays($body)
    {
        return $this->restful("POST", "/export/days", $body);
    }

    /**
     * 读取增量报表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ExportController/deltaAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getExportDelta($body)
    {
        return $this->restful("POST", "/export/delta", $body);
    }

    /**
     * 项目金额报表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ExportController/moneyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getExportMoney($body)
    {
        return $this->restful("POST", "/export/money", $body);
    }

    /**
     * 项目维度报表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ExportController/projectAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getExportProject($body)
    {
        return $this->restful("POST", "/export/project", $body);
    }

    /**
     * 排行榜
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ExportController/rankAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getExportRank($body)
    {
        return $this->restful("POST", "/export/rank", $body);
    }

    /**
     * 日期范围内的消费记录报表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ExportController/scopeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getExportScope($body)
    {
        return $this->restful("POST", "/export/scope", $body);
    }

    /**
     * 趋势报表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ExportController/tendencyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getExportTendency($body)
    {
        return $this->restful("POST", "/export/tendency", $body);
    }

    /**
     * 获取的方式
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupActivateController/listsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getGroupActivateLists($body)
    {
        return $this->restful("POST", "/group/activate/lists", $body);
    }

    /**
     * 用ids获取分组
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupController/idsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getGroupByIds($body)
    {
        return $this->restful("POST", "/group/ids", $body);
    }

    /**
     * 单个分组详情
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getGroupInfo($body)
    {
        return $this->restful("POST", "/group/info", $body);
    }

    /**
     * 获取分组下接口规则列表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupAccessController/getInterfaceListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getGroupInterfaceLists($body)
    {
        return $this->restful("POST", "/group/access/interface/lists", $body);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getGroupList($body)
    {
        return $this->restful("POST", "/group/list", $body);
    }

    /**
     * 根据项目id 获取分组列表带分页
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getGroupPaging($body)
    {
        return $this->restful("POST", "/group/paging", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/LogController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getPagingLog($body)
    {
        return $this->restful("POST", "/log/paging", $body);
    }

    /**
     * 用ids获取项目
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/idsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getProjectByIds($body)
    {
        return $this->restful("POST", "/project/ids", $body);
    }

    /**
     * 项目详情
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getProjectInfo($body)
    {
        return $this->restful("POST", "/project/info", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getProjectPaging($body)
    {
        return $this->restful("POST", "/project/paging", $body);
    }

    /**
     * 获取项目类型
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/typeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getProjectType($body)
    {
        return $this->restful("POST", "/project/type", $body);
    }

    /**
     * 读取用户资料
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getUserInfo($body)
    {
        return $this->restful("POST", "/user/info", $body);
    }

    /**
     * 读取用户分页列表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getUserPaging($body)
    {
        return $this->restful("POST", "/user/paging", $body);
    }

    /**
     * 多种状态查询分页
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/pagingByStatusAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pagingByStatus($body)
    {
        return $this->restful("POST", "/project/pagingByStatus", $body);
    }

    /**
     * 暂停项目
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/pauseAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pauseProject($body)
    {
        return $this->restful("POST", "/project/pause", $body);
    }

    /**
     * 拒绝审批
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/refuseAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function refuseProject($body)
    {
        return $this->restful("POST", "/project/refuse", $body);
    }

    /**
     * 关闭指定获取方式
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupAccessController/disableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function setDisableGroupAccess($body)
    {
        return $this->restful("POST", "/group/access/disable", $body);
    }

    /**
     * 开启指定获取方式
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupAccessController/enableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function setEnableGroupAccess($body)
    {
        return $this->restful("POST", "/group/access/enable", $body);
    }

    /**
     * 启动项目
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/startAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function startProject($body)
    {
        return $this->restful("POST", "/project/start", $body);
    }

    /**
     * 重建统计
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/statisticAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function statisticProject($body)
    {
        return $this->restful("POST", "/project/statistic", $body);
    }
}
