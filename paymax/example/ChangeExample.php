<?php
/**
 * Created by xiaowei.wang
 * CreateTime: 16/7/7 下午2:15
 * Description:
 */

namespace Paymax\example;

use Paymax\config\SignConfig;
use Paymax\model\Charge;
use Paymax\util\PaymaxUtil;

require ("../init.php");


class ChangeExample
{

    public function charge(){
        $this->initSignConfig();

        $req_data=array(
            'amount'=>1,
            'subject'=>'Your Subject',
            'body'=>'Your Body',
            'order_no'=>PaymaxUtil::createUniqid(),
            'channel'=>'alipay_app',
            'client_ip'=>'127.0.0.1',
            'app'=>'app_7hqF2S6GYXET457i',
            'currency'=>'CNY',
            'description'=>'description'
        );

        echo Charge::create($req_data);
    }

    public function retrieve($chargeId=null){
        $this->initSignConfig();
        echo Charge::retrieve($chargeId);
    }

    public function initSignConfig(){
        SignConfig::setSecretKey("55970fdbbf10459f966a8e276afa86fa");
        SignConfig::setPrivateKeyPath("rsa_private_key.pem");
        SignConfig::setPaymaxPublicKeyPath("paymax_rsa_public_key.pem");
    }
}

$chargeObj = new ChangeExample();
$chargeObj->charge();
$chargeObj->retrieve("ch_00f0d0e875a7dade329e4c90");