<?php

namespace ElemeOpenApi\Api;

/**
 * 金融服务
 */
class FinanceService extends RpcService
{

    /** 查询商户余额,返回可用余额和总余额(弃用，参见新接口query_new_balance)
     * @param $shop_id 饿了么店铺id
     * @return mixed
     */
    public function query_balance($shop_id)
    {
        return $this->client->call("eleme.finance.queryBalance", array("shopId" => $shop_id));
    }

    /** 查询商户余额 返回可用余额和子账户余额明细
     * @param $shop_id 饿了么总店店铺id
     * @return mixed
     */
    public function query_new_balance($shop_id)
    {
        return $this->client->call("eleme.finance.queryNewBalance", array("shopId" => $shop_id));
    }

    /** 查询余额流水,有流水改动的交易
     * @param $request 查询条件
     * @return mixed
     */
    public function query_balance_log($request)
    {
        return $this->client->call("eleme.finance.queryBalanceLog", array("request" => $request));
    }

    /** 查询总店账单(旧接口，即将下线)
     * @param $shop_id 饿了么总店店铺id
     * @param $query 查询条件
     * @return mixed
     */
    public function query_head_bills($shop_id, $query)
    {
        return $this->client->call("eleme.finance.queryHeadBills", array("shopId" => $shop_id, "query" => $query));
    }

    /** 查询总店账单(新接口)
     * @param $shop_id 饿了么总店店铺id
     * @param $query 查询条件
     * @return mixed
     */
    public function query_head_bills_new($shop_id, $query)
    {
        return $this->client->call("eleme.finance.queryHeadBillsNew", array("shopId" => $shop_id, "query" => $query));
    }

    /** 查询总店订单(旧接口，即将下线)
     * @param $shop_id 饿了么总店店铺id
     * @param $query 查询条件
     * @return mixed
     */
    public function query_head_orders($shop_id, $query)
    {
        return $this->client->call("eleme.finance.queryHeadOrders", array("shopId" => $shop_id, "query" => $query));
    }

    /** 查询总店订单(新接口)
     * @param $shop_id 饿了么总店店铺id
     * @param $query 查询条件
     * @return mixed
     */
    public function query_head_orders_new($shop_id, $query)
    {
        return $this->client->call("eleme.finance.queryHeadOrdersNew", array("shopId" => $shop_id, "query" => $query));
    }

    /** 查询分店账单(旧接口，即将下线)
     * @param $shop_id 饿了么分店店铺id
     * @param $query 查询条件
     * @return mixed
     */
    public function query_branch_bills($shop_id, $query)
    {
        return $this->client->call("eleme.finance.queryBranchBills", array("shopId" => $shop_id, "query" => $query));
    }

    /** 查询分店账单(新接口)
     * @param $shop_id 饿了么分店店铺id
     * @param $query 查询条件
     * @return mixed
     */
    public function query_branch_bills_new($shop_id, $query)
    {
        return $this->client->call("eleme.finance.queryBranchBillsNew", array("shopId" => $shop_id, "query" => $query));
    }

    /** 查询分店订单(旧接口，即将下线)
     * @param $shop_id 饿了么分店店铺id
     * @param $query 查询条件
     * @return mixed
     */
    public function query_branch_orders($shop_id, $query)
    {
        return $this->client->call("eleme.finance.queryBranchOrders", array("shopId" => $shop_id, "query" => $query));
    }

    /** 查询分店订单(新接口)
     * @param $shop_id 饿了么分店店铺id
     * @param $query 查询条件
     * @return mixed
     */
    public function query_branch_orders_new($shop_id, $query)
    {
        return $this->client->call("eleme.finance.queryBranchOrdersNew", array("shopId" => $shop_id, "query" => $query));
    }

    /** 查询订单(旧接口，即将下线)
     * @param $shop_id 饿了么店铺id
     * @param $order_id 订单id
     * @return mixed
     */
    public function get_order($shop_id, $order_id)
    {
        return $this->client->call("eleme.finance.getOrder", array("shopId" => $shop_id, "orderId" => $order_id));
    }

    /** 查询订单(新接口)
     * @param $shop_id 饿了么店铺id
     * @param $order_id 订单id
     * @return mixed
     */
    public function get_order_new($shop_id, $order_id)
    {
        return $this->client->call("eleme.finance.getOrderNew", array("shopId" => $shop_id, "orderId" => $order_id));
    }

    /** 查询返现汇总信息账单
     * @param $shop_id 饿了么分店、单店、总店店铺id
     * @param $query 查询条件
     * @return mixed
     */
    public function query_allowance_bills($shop_id, $query)
    {
        return $this->client->call("eleme.finance.queryAllowanceBills", array("shopId" => $shop_id, "query" => $query));
    }

    /** 查询返现每日详单
     * @param $shop_id 饿了么分店、单店、总店店铺id
     * @param $query 查询条件
     * @return mixed
     */
    public function query_allowance_bill_detail($shop_id, $query)
    {
        return $this->client->call("eleme.finance.queryAllowanceBillDetail", array("shopId" => $shop_id, "query" => $query));
    }

    /** 查询商户帐期和名称
     * @param $term_and_name_query 查询条件
     * @return mixed
     */
    public function query_term_and_name($term_and_name_query)
    {
        return $this->client->call("eleme.finance.queryTermAndName", array("termAndNameQuery" => $term_and_name_query));
    }

    /** 子资金账号查询关系
     * @param $relations_request 查询条件
     * @return mixed
     */
    public function query_by_slave($relations_request)
    {
        return $this->client->call("eleme.finance.queryBySlave", array("relationsRequest" => $relations_request));
    }

}