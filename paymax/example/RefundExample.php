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

        echo Refund::create('ch_b98d0e24089c96d60a075a95',$req_data);
    }

    public function retrieve($chargeId=null,$refundId=null){
        $this->initSignConfig();
        echo Refund::retrieve($chargeId,$refundId);
    }

    public function initSignConfig(){
        SignConfig::setSecretKey("8b52445081e342aa8e71aa852284c7ba");
        SignConfig::setPrivateKeyPath("rsa_private_key.pem");
        SignConfig::setPaymaxPublicKeyPath("paymax_rsa_public_key.pem");
    }
}

$chargeObj = new RefundExample();
$chargeObj->charge();
$chargeObj->retrieve("ch_b98d0e24089c96d60a075a95","123123123123");