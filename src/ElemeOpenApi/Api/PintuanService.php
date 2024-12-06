<?php

namespace ElemeOpenApi\Api;

/**
 * 拼团服务
 */
class PintuanService extends RpcService
{

    /** 查询单个拼团商品
     * @param $shop_id 店铺ID
     * @param $ext_code 商品extCode
     * @return mixed
     */
    public function query_pin_item_by_ext_code($shop_id, $ext_code)
    {
        return $this->client->call("eleme.pintuan.queryPinItemByExtCode", array("shopId" => $shop_id, "extCode" => $ext_code));
    }

    /** 批量查询店铺拼团商品
     * @param $shop_id 店铺ID
     * @return mixed
     */
    public function get_all_pin_items($shop_id)
    {
        return $this->client->call("eleme.pintuan.getAllPinItems", array("shopId" => $shop_id));
    }

    /** 操作拼团商品上下架
     * @param $shop_id 店铺ID
     * @param $ext_code 商品extCode
     * @param $on_shelf 上下架-1上架,0下架
     * @return mixed
     */
    public function update_on_shelf_by_ext_code($shop_id, $ext_code, $on_shelf)
    {
        return $this->client->call("eleme.pintuan.updateOnShelfByExtCode", array("shopId" => $shop_id, "extCode" => $ext_code, "onShelf" => $on_shelf));
    }

    /** 修改拼团商品库存
     * @param $shop_id 店铺ID
     * @param $request 库存信息
     * @return mixed
     */
    public function update_pin_tuan_stock($shop_id, $request)
    {
        return $this->client->call("eleme.pintuan.updatePinTuanStock", array("shopId" => $shop_id, "request" => $request));
    }

    /** 创建拼团商品映射，更新商品ext_code字段
     * @param $request 拼团商品映射信息
     * @return mixed
     */
    public function update_pin_item_mapping($request)
    {
        return $this->client->call("eleme.pintuan.updatePinItemMapping", array("request" => $request));
    }

}