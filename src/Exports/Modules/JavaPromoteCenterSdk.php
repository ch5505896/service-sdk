<?php
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * java 营销券服务
 * Class JavaPushSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaPromoteCenterSdk extends SdkBase
{
    protected $serviceName = 'java.promote.center';

    /**
     * 创建卡
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function sendCard($body)
    {
        return $this->restful(static::METHOD_POST, '/card/sendCard', $body);
    }

    /**
     * 卡列表
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function queryMyRecord($body)
    {
        return $this->restful(static::METHOD_POST, '/card/queryMyRecord', $body);
    }


    /**
     * 卡列表-分页
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function pageCardList($body)
    {
        return $this->restful(static::METHOD_POST, '/card/pageCardList', $body);
    }
    /**
     * 卡详情
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function queryCardDetail($body)
    {
        return $this->restful(static::METHOD_POST, '/card/queryCardDetail', $body);
    }

    /**
     * 卡消费记录
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function queryCouponList($body)
    {
        return $this->restful(static::METHOD_POST, '/coupon/queryCouponList', $body);
    }

    /**
     * 卡订单号
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function queryCardOrder($body)
    {
        return $this->restful(static::METHOD_POST, '/card/queryCardOrder', $body);
    }

    /**
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function querySchemeInfo($body)
    {
        return $this->restful(static::METHOD_POST, '/coupon/querySchemeInfo', $body);
    }

    /**
     * 编辑营销卡券
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/git/blob/dev_v3.2_%E5%AE%A2%E6%9C%8D%E4%B8%AD%E5%BF%83%E5%81%9C%E7%94%A8%E4%BC%98%E5%8C%96%EF%BC%8C4000%E4%B8%87%E9%A1%B9%E7%9B%AE/doc/%E8%90%A5%E9%94%80%E4%B8%AD%E5%BF%83v3.2%20%E5%AE%A2%E6%9C%8D%E4%B8%AD%E5%BF%83%E6%8E%A5%E5%8F%A3%E6%96%87%E6%A1%A3%EF%BC%88%E5%81%9C%E7%94%A8%E5%8D%A1%E6%9C%8D%E5%8A%A1).md
     * @param array $body
     * @return ResponseInterface
     */
    public function editCardInfo($body)
    {
        return $this->restful(static::METHOD_POST, '/card/update', $body);
    }
}