<?php
/**
 * Created by xiaowei.wang
 * CreateTime: 16/7/7 上午10:54
 * Description:
 */

namespace Paymax\model;


use Paymax\config\SignConfig;
use Paymax\exception\AuthorizationException;
use Paymax\exception\InvalidRequestException;
use Paymax\util\HttpCurlUtil;

class ApiResource extends Paymax
{
    protected static function _request($url = null, $params = null)
    {
        self::_validateParams();
        $_http = new HttpCurlUtil();
        if (empty($params)){
            return $_http -> get($url, null, 5);
        }else {
            return $_http -> post($url, $params, 5);
        }
    }

    private static function _validateParams()
    {
        if (empty(SignConfig::getSecretKey())){
            throw new AuthorizationException("Secret key can not be blank.");
        }

        if (empty(SignConfig::getPrivateKeyPath())){
            throw new InvalidRequestException("The Path of RSA Private Key can not be blank.");
        }

        if (empty(SignConfig::getPaymaxPublicKeyPath())){
            throw new AuthorizationException("The Path of Paymax Public Key can not be blank.");
        }


    }
}