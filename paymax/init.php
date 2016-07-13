<?php
/**
 * Created by xiaowei.wang
 * CreateTime: 16/7/7 下午2:49
 * Description:
 */


if (!function_exists('curl_init')) {
    throw new Exception('Paymax needs the CURL PHP extension.');
}
if (!function_exists('json_decode')) {
    throw new Exception('Paymax needs the JSON PHP extension.');
}

//配置
require(dirname(__FILE__) . '/config/PaymaxConfig.php');
require(dirname(__FILE__) . '/config/SignConfig.php');

//异常
require(dirname(__FILE__) . '/exception/PaymaxException.php');
require(dirname(__FILE__) . '/exception/AuthorizationException.php');
require(dirname(__FILE__) . '/exception/InvalidRequestException.php');
require(dirname(__FILE__) . '/exception/InvalidResponseException.php');

//model
require(dirname(__FILE__) . '/model/Paymax.php');
require(dirname(__FILE__) . '/model/ApiResource.php');
require(dirname(__FILE__) . '/model/Charge.php');
require(dirname(__FILE__) . '/model/Refund.php');

//签名和验签
require(dirname(__FILE__) . '/sign/RSAUtil.php');

//Util
require(dirname(__FILE__) . '/util/HttpCurlUtil.php');
require(dirname(__FILE__) . '/util/PaymaxUtil.php');







