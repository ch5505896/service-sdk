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
 * @date   2019-03-11
 * @time   Mon, 11 Mar 2019 10:32:53 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * AiProfitStatisticsSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class AiProfitStatisticsSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'aiProfit.statistics.module';

    /**
     * 连锁首页接口
     * @link https://uniondrug.coding.net/p/module.statistics.aiProfit/git/blob/development/docs/api/ChainController/indexAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function chainIndex($body)
    {
        return $this->restful("POST", "/chain/index", $body);
    }

    /**
     * 店员首页接口
     * @link https://uniondrug.coding.net/p/module.statistics.aiProfit/git/blob/development/docs/api/ClerkController/indexAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function clerkIndex($body)
    {
        return $this->restful("POST", "/clerk/index", $body);
    }

    /**
     * 店员首页销售排名接口
     * @link https://uniondrug.coding.net/p/module.statistics.aiProfit/git/blob/development/docs/api/ClerkController/indexSalesRankAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function clerkIndexSalesRank($body)
    {
        return $this->restful("POST", "/clerk/clerkIndexSalesRank", $body);
    }

    /**
     * 订单
     * @link https://uniondrug.coding.net/p/module.statistics.aiProfit/git/blob/development/docs/api/OrderController/indexAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderIndex($body)
    {
        return $this->restful("POST", "/order/index", $body);
    }

    /**
     * 门店首页接口
     * @link https://uniondrug.coding.net/p/module.statistics.aiProfit/git/blob/development/docs/api/StoreController/indexAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function storeIndex($body)
    {
        return $this->restful("POST", "/store/index", $body);
    }

    /**
     * 门店首页销售额排名
     * @link https://uniondrug.coding.net/p/module.statistics.aiProfit/git/blob/development/docs/api/StoreController/indexSalesRankAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function storeIndexSalesRank($body)
    {
        return $this->restful("POST", "/store/storeIndexSalesRank", $body);
    }

    /**
     * 全网首页接口
     * @link https://uniondrug.coding.net/p/module.statistics.aiProfit/git/blob/development/docs/api/TotalController/indexAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function totalIndex($body)
    {
        return $this->restful("POST", "/total/index", $body);
    }

    /**
     * 用户信息
     * @link https://uniondrug.coding.net/p/module.statistics.aiProfit/git/blob/development/docs/api/ValidateController/updateIsTagAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function updateIsTag($body)
    {
        return $this->restful("POST", "/validate/updateIsTag", $body);
    }

    /**
     * 用户信息
     * @link https://uniondrug.coding.net/p/module.statistics.aiProfit/git/blob/development/docs/api/ValidateController/userInfoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userInfo($body)
    {
        return $this->restful("POST", "/validate/userInfo", $body);
    }

    /**
     * 验证是否在白名单
     * @link https://uniondrug.coding.net/p/module.statistics.aiProfit/git/blob/development/docs/api/ValidateController/indexAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function validateIndex($body)
    {
        return $this->restful("POST", "/validate/index", $body);
    }
}