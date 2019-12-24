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
 * @date   2019-12-24
 * @time   Tue, 24 Dec 2019 18:09:14 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * ClaimSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class ClaimSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'claim.module';

    /**
     * 理赔材料回调sdk
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/docs/api/ClaimController/callbackAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimCallBack($body)
    {
        return $this->restful("POST", "/claim/call/back", $body);
    }

    /**
     * 发起理赔
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/docs/api/ClaimController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimCreate($body)
    {
        return $this->restful("POST", "/claim/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/docs/api/ClaimController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimDetail($body)
    {
        return $this->restful("POST", "/claim/detail", $body);
    }

    /**
     * 理赔分页列表
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/docs/api/ClaimController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimPaging($body)
    {
        return $this->restful("POST", "/claim/paging", $body);
    }

    /**
     * 用户撤销理赔
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/docs/api/ClaimController/userCancelAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimUserCancel($body)
    {
        return $this->restful("POST", "/claim/user/cancel", $body);
    }
}