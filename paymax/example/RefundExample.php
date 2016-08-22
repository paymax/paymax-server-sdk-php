<?php
/**
 * Created by xiaowei.wang
 * CreateTime: 16/7/7 下午2:15
 * Description:
 */

namespace Paymax\example;

use Paymax\config\SignConfig;
use Paymax\model\Refund;

require ("../init.php");


class RefundExample
{

    public function charge(){
        $this->initSignConfig();

        $req_data=array(
            'amount'=>1
        );

        echo Refund::create('ch_00f0d0e875a7dade329e4c90',$req_data);
    }

    public function retrieve($chargeId=null,$refundId=null){
        $this->initSignConfig();
        echo Refund::retrieve($chargeId,$refundId);
    }

    public function initSignConfig(){
        SignConfig::setSecretKey("55970fdbbf10459f966a8e276afa86fa");
        SignConfig::setPrivateKeyPath("rsa_private_key.pem");
        SignConfig::setPaymaxPublicKeyPath("paymax_rsa_public_key.pem");
    }
}

$chargeObj = new RefundExample();
$chargeObj->charge();
$chargeObj->retrieve("ch_00f0d0e875a7dade329e4c90","123123123123");