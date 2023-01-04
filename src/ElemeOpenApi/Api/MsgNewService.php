<?php

namespace ElemeOpenApi\Api;

/**
 * 新消息服务
 */
class MsgNewService extends RpcService
{

    /** 获取未拉取的推送失败消息列表
     * @param $msg_query_request 查询条件
     * @return mixed
     */
    public function get_push_fail_msg($msg_query_request)
    {
        return $this->client->call("eleme.msgNew.getPushFailMsg", array("msgQueryRequest" => $msg_query_request));
    }

}