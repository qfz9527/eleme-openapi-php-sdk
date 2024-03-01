<?php

namespace ElemeOpenApi\Api;

/**
 * 斗金服务
 */
class AdService extends RpcService
{

    /** 查询斗金推广设置
     * @param $request 请求参数
     * @return mixed
     */
    public function find_dou_jin_cpc_solution($request)
    {
        return $this->client->call("eleme.ad.doujincpc.findDouJinCpcSolution", array("request" => $request));
    }

    /** 查询斗金推广点击分布信息
     * @param $request 请求参数
     * @return mixed
     */
    public function find_dou_jin_click_distribution_report($request)
    {
        return $this->client->call("eleme.ad.doujincpc.findDouJinClickDistributionReport", array("request" => $request));
    }

    /** 查询斗金推广效果数据
     * @param $request 请求参数
     * @return mixed
     */
    public function find_dou_jin_effect_report($request)
    {
        return $this->client->call("eleme.ad.doujincpc.findDouJinEffectReport", array("request" => $request));
    }

    /** 设置斗金时段
     * @param $request 请求参数
     * @return mixed
     */
    public function update_dou_jin_time($request)
    {
        return $this->client->call("eleme.ad.doujincpc.updateDouJinTime", array("request" => $request));
    }

    /** 设置斗金定向
     * @param $request 请求参数
     * @return mixed
     */
    public function update_dou_jin_target($request)
    {
        return $this->client->call("eleme.ad.doujincpc.updateDouJinTarget", array("request" => $request));
    }

    /** 设置斗金预算
     * @param $request 请求参数
     * @return mixed
     */
    public function update_dou_jin_budget($request)
    {
        return $this->client->call("eleme.ad.doujincpc.updateDouJinBudget", array("request" => $request));
    }

    /** 设置斗金出价
     * @param $request 请求参数
     * @return mixed
     */
    public function update_dou_jin_bid($request)
    {
        return $this->client->call("eleme.ad.doujincpc.updateDouJinBid", array("request" => $request));
    }

    /** 设置斗金状态
     * @param $request 请求参数
     * @return mixed
     */
    public function update_dou_jin_state($request)
    {
        return $this->client->call("eleme.ad.doujincpc.updateDouJinState", array("request" => $request));
    }

    /** 创建斗金计划
     * @param $request 请求参数
     * @return mixed
     */
    public function create_dou_jin_solution($request)
    {
        return $this->client->call("eleme.ad.doujincpc.createDouJinSolution", array("request" => $request));
    }

    /** 查询斗金最大可用余额
     * @param $request 请求参数
     * @return mixed
     */
    public function find_dou_jin_account_balance($request)
    {
        return $this->client->call("eleme.ad.doujincpc.findDouJinAccountBalance", array("request" => $request));
    }

    /** 查询优享大牌推广设置
     * @param $request 请求参数
     * @return mixed
     */
    public function find_display_cpc_solution($request)
    {
        return $this->client->call("eleme.ad.displaycpc.findDisplayCpcSolution", array("request" => $request));
    }

    /** 查询优享大牌推广效果数据
     * @param $request 请求参数
     * @return mixed
     */
    public function find_display_effect_report($request)
    {
        return $this->client->call("eleme.ad.displaycpc.findDisplayEffectReport", array("request" => $request));
    }

    /** 设置优享大牌时段
     * @param $request 请求参数
     * @return mixed
     */
    public function update_display_time($request)
    {
        return $this->client->call("eleme.ad.displaycpc.updateDisplayTime", array("request" => $request));
    }

    /** 设置优享大牌定向
     * @param $request 请求参数
     * @return mixed
     */
    public function update_display_target($request)
    {
        return $this->client->call("eleme.ad.displaycpc.updateDisplayTarget", array("request" => $request));
    }

    /** 设置优享大牌预算
     * @param $request 请求参数
     * @return mixed
     */
    public function update_display_budget($request)
    {
        return $this->client->call("eleme.ad.displaycpc.updateDisplayBudget", array("request" => $request));
    }

    /** 设置优享大牌出价
     * @param $request 请求参数
     * @return mixed
     */
    public function update_display_bid($request)
    {
        return $this->client->call("eleme.ad.displaycpc.updateDisplayBid", array("request" => $request));
    }

    /** 设置优享大牌状态
     * @param $request 请求参数
     * @return mixed
     */
    public function update_display_state($request)
    {
        return $this->client->call("eleme.ad.displaycpc.updateDisplayState", array("request" => $request));
    }

    /** 创建优享大牌计划
     * @param $request 请求参数
     * @return mixed
     */
    public function create_display_solution($request)
    {
        return $this->client->call("eleme.ad.displaycpc.createDisplaySolution", array("request" => $request));
    }

    /** 查询优享大牌最大可用余额
     * @param $request 请求参数
     * @return mixed
     */
    public function find_display_account_balance($request)
    {
        return $this->client->call("eleme.ad.displaycpc.findDisplayAccountBalance", array("request" => $request));
    }

}