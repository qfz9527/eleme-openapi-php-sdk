<?php

namespace ElemeOpenApi\Api;

/**
 * 发票服务
 */
class InvoiceService extends RpcService
{

    /** 批量查询店铺开票设置
     * @param $request 查询请求
     * @return mixed
     */
    public function batch_query_shop_settings($request)
    {
        return $this->client->call("eleme.invoice.seller.batchQueryShopSettings", array("request" => $request));
    }

    /** 批量更新店铺开票设置
     * @param $request 更新请求
     * @return mixed
     */
    public function batch_update_shop_settings($request)
    {
        return $this->client->call("eleme.invoice.seller.batchUpdateShopSettings", array("request" => $request));
    }

    /** 批量查询店铺开票申请
     * @param $request 查询请求
     * @return mixed
     */
    public function batch_query_shop_application($request)
    {
        return $this->client->call("eleme.invoice.seller.batchQueryShopApplication", array("request" => $request));
    }

    /** 批量更新店铺开票申请
     * @param $request 更新请求
     * @return mixed
     */
    public function batch_update_shop_application($request)
    {
        return $this->client->call("eleme.invoice.seller.batchUpdateShopApplication", array("request" => $request));
    }

}