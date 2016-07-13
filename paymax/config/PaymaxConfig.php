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
    public static $API_BASE_URL = "http://172.30.21.20:9001/";
//    public static $API_BASE_URL = "http://127.0.0.1:8080/";

    //编码集
    public static $CHARSET = "UTF-8";
    
    //签名后数据的key
    public static $SIGN = "sign";

    //请求method
    public static $CREATE_CHARGE = "v1/charges";

    //SDK版本
    public static  $SDK_VERSION = "1.0.0";
}