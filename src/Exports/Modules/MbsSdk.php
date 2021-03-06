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
 * @date   2019-04-28
 * @time   Sun, 28 Apr 2019 15:10:46 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * MbsSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class MbsSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'mbs.module';

    /**
     * 多条消息批量发送
     * @link https://uniondrug.coding.net/p/module.mbs/git/blob/development/docs/api/TopicController/batchAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function batch($body)
    {
        return $this->restful("POST", "/topic/batch", $body);
    }

    /**
     * 发单条消息
     * @link https://uniondrug.coding.net/p/module.mbs/git/blob/development/docs/api/TopicController/publishAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function publish($body)
    {
        return $this->restful("POST", "/topic/publish", $body);
    }
}
