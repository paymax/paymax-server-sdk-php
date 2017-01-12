<?php
/**
 * Created by xiaowei.wang
 * CreateTime: 16/7/6 下午5:22
 * Description:
 */

namespace Paymax\model;


use Paymax\config\PaymaxConfig;

class Refund extends ApiResource
{
    public static function create($chargeId=null,$params = null)
    {
        if (empty($chargeId)){
            return 'chargeId can not be blank.';
        }
        return self::_request(PaymaxConfig::$API_BASE_URL.PaymaxConfig::$CREATE_CHARGE.'/'.$chargeId.'/refunds',$params);
    }

    public static function retrieve($chargeId=null,$refundId=null)
    {
        if (empty($chargeId) || empty($refundId)){
            return 'chargeId or refundId can not be blank.';
        }
        return self::_request(PaymaxConfig::$API_BASE_URL.PaymaxConfig::$CREATE_CHARGE.'/'.$chargeId.'/refunds/'.$refundId);
    }
}