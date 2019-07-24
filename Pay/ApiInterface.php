<?php
/**
 * Created by PhpStorm.
 * User: Wind
 * Date: 2017/8/23
 * Time: 下午5:51
 */

namespace Gateway\Pay;


interface ApiInterface
{

    /**
     * 需要传入支付方式ID (因为一个支付方式可能添加了多次)
     * ApiInterface constructor.
     * @param $id
     */
    public function __construct($id);

    /**
     * @param array $config 支付渠道配置
     * @param string $out_trade_no 本系统的订单号
     * @param string $subject 商品名称
     * @param string $body 商品介绍
     * @param int $amount_cent 金额/分
     */
    function goPay($config, $out_trade_no, $subject, $body, $amount_cent);


    /**
     * @param $config
     * @param callable $successCallback 成功回调 (系统单号,交易金额/分,支付渠道单号)
     * @return bool|string true 验证通过  string 失败原因
     */
    function verify($config, $successCallback);

}