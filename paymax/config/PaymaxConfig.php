<?php
/**
 * Created by xiaowei.wang
 * CreateTime: 16/7/7 下午3:07
 * Description:
 */

namespace Paymax\config;


class PaymaxConfig
{
    //Paymax服务器地址
    public static $API_BASE_URL = "https://www.paymax.cc/merchant-api/";

    //编码集
    public static $CHARSET = "UTF-8";
    
    //签名后数据的key
    public static $SIGN = "sign";

    //请求method
    public static $CREATE_CHARGE = "v1/charges";

    //SDK版本
    public static  $SDK_VERSION = "1.0.0";
}