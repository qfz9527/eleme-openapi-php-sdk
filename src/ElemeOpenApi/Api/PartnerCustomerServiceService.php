<?php

namespace ElemeOpenApi\Api;

/**
 * 提供给dy的查询服务
 ，
 包括：服务数据，仲裁信息，赔付信息等
 */
class PartnerCustomerServiceService extends RpcService
{

    /** 服务数据
     ，
     查询订单服务信息
     * @param $query_server_param 查询条件
     * @return mixed
     */
    public function query_server_info_by_order_id($query_server_param)
    {
        return $this->client->call("eleme.partnerCustomerService.queryServerInfoByOrderId", array("queryServerParam" => $query_server_param));
    }

    /** 仲裁
     ，
     查询订单仲裁信息
     * @param $query_arbitration_param 查询条件
     * @return mixed
     */
    public function query_arbitration_by_order_id($query_arbitration_param)
    {
        return $this->client->call("eleme.partnerCustomerService.queryArbitrationByOrderId", array("queryArbitrationParam" => $query_arbitration_param));
    }

    /** 赔付
     ，
     查询订单赔付信息
     * @param $query_compensation_param 查询条件
     * @return mixed
     */
    public function query_compensation_by_order_id($query_compensation_param)
    {
        return $this->client->call("eleme.partnerCustomerService.queryCompensationByOrderId", array("queryCompensationParam" => $query_compensation_param));
    }

    /** 赔付
     ，
     查询订单食安赔付
     * @param $query_compensation_param 查询条件
     * @return mixed
     */
    public function query_food_safety_compensation_by_order_id($query_compensation_param)
    {
        return $this->client->call("eleme.partnerCustomerService.queryFoodSafetyCompensationByOrderId", array("queryCompensationParam" => $query_compensation_param));
    }

}