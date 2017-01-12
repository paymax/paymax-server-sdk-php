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


class ChargeExample
{

    /**
     * 拉卡拉 H5 支付	lakala_h5
     */
    public function charge_for_lakala_h5(){
        $this->initSignConfig();

        $req_data=array(
            'amount'=>1,
            'subject'=>'Your lakala_h5 Subject',
            'body'=>'Your lakala_h5 Body',
            'order_no'=>PaymaxUtil::createUniqid(),
            'channel'=>'lakala_h5',
            'client_ip'=>'127.0.0.1',
            'app'=>'app_7hqF2S6GYXET457i',
            'currency'=>'CNY',
            'description'=>'description',
            'extra'=>array('user_id'=>'123','return_url'=>'http://www.abc.cn/','show_url'=>'http://www.abc.cn/charge')

        );

        echo Charge::create($req_data);
    }

    /**
     * 拉卡拉移动 SDK 支付	lakala_app
     */
    public function charge_for_lakala_app(){
        $this->initSignConfig();

        $req_data=array(
            'amount'=>1,
            'subject'=>'Your lakala_app Subject',
            'body'=>'Your lakala_app Body',
            'order_no'=>PaymaxUtil::createUniqid(),
            'channel'=>'lakala_app',
            'client_ip'=>'127.0.0.1',
            'app'=>'app_7hqF2S6GYXET457i',
            'currency'=>'CNY',
            'description'=>'description',
            'extra'=>array('user_id'=>'1')

        );

        echo Charge::create($req_data);
    }

    /**
     * 拉卡拉 PC 快捷支付	lakala_web_fast
     */
    public function charge_for_lakala_web_fast(){
        $this->initSignConfig();

        $req_data=array(
            'amount'=>1,
            'subject'=>'Your lakala_web_fast Subject',
            'body'=>'Your lakala_web_fast Body',
            'order_no'=>PaymaxUtil::createUniqid(),
            'channel'=>'lakala_web_fast',
            'client_ip'=>'127.0.0.1',
            'app'=>'app_7hqF2S6GYXET457i',
            'currency'=>'CNY',
            'description'=>'description',
            'extra'=>array('user_id'=>'123','return_url'=>'http://www.abc.cn/')

        );

        echo Charge::create($req_data);
    }

    /**
     * 拉卡拉 PC 网关支付	lakala_web
     */
    public function charge_for_lakala_web(){
        $this->initSignConfig();

        $req_data=array(
            'amount'=>1,
            'subject'=>'Your lakala_web Subject',
            'body'=>'Your lakala_web Body',
            'order_no'=>PaymaxUtil::createUniqid(),
            'channel'=>'lakala_web',
            'client_ip'=>'127.0.0.1',
            'app'=>'app_7hqF2S6GYXET457i',
            'currency'=>'CNY',
            'description'=>'description',
            'extra'=>array('user_id'=>'123','return_url'=>'http://www.abc.cn/')

        );

        echo Charge::create($req_data);
    }

    /**
     * 支付宝即时到账 alipay_web
     */
    public function charge_for_alipay_web(){
        $this->initSignConfig();

        $req_data=array(
            'amount'=>1,
            'subject'=>'Your alipay_web Subject',
            'body'=>'Your alipay_web Body',
            'order_no'=>PaymaxUtil::createUniqid(),
            'channel'=>'alipay_web',
            'client_ip'=>'127.0.0.1',
            'app'=>'app_7hqF2S6GYXET457i',
            'currency'=>'CNY',
            'description'=>'description',
            'extra'=>array('return_url'=>'http://www.abc.cn/','show_url'=>'http://www.abc.cn/charge')

        );

        echo Charge::create($req_data);
    }

    /**
     *支付宝移动支付	alipay_app
     */
    public function charge_for_alipay_app(){
        $this->initSignConfig();

        $req_data=array(
            'amount'=>1,
            'subject'=>'Your alipay_app Subject',
            'body'=>'Your alipay_app Body',
            'order_no'=>PaymaxUtil::createUniqid(),
            'channel'=>'alipay_app',
            'client_ip'=>'127.0.0.1',
            'app'=>'app_7hqF2S6GYXET457i',
            'currency'=>'CNY',
            'description'=>'description'

        );

        echo Charge::create($req_data);
    }

    /**
     * 微信移动支付 wechat_app
     */
    public function charge_for_wechat_app(){
        $this->initSignConfig();

        $req_data=array(
            'amount'=>1,
            'subject'=>'Your wechat_app Subject',
            'body'=>'Your wechat_app Body',
            'order_no'=>PaymaxUtil::createUniqid(),
            'channel'=>'wechat_app',
            'client_ip'=>'127.0.0.1',
            'app'=>'app_7hqF2S6GYXET457i',
            'currency'=>'CNY',
            'description'=>'description'

        );

        echo Charge::create($req_data);
    }

    /**
     * 微信公众号	wechat_wap
     */
    public function charge_for_wechat_wap(){
        $this->initSignConfig();

        $req_data=array(
            'amount'=>1,
            'subject'=>'Your wechat_wap Subject',
            'body'=>'Your wechat_wap Body',
            'order_no'=>PaymaxUtil::createUniqid(),
            'channel'=>'wechat_wap',
            'client_ip'=>'127.0.0.1',
            'app'=>'app_7hqF2S6GYXET457i',
            'currency'=>'CNY',
            'description'=>'description',
            'extra'=>array('open_id'=>'oOOL0wJzo5VudSPN-Lpzws1NZqiQ')

        );

        echo Charge::create($req_data);
    }


    /**
     * 微信公众号（C2B扫码）支付	wechat_csb
     */
    public function charge_for_wechat_csb(){
        $this->initSignConfig();

        $req_data=array(
            'amount'=>1,
            'subject'=>'Your wechat_csb Subject',
            'body'=>'Your wechat_csb Body',
            'order_no'=>PaymaxUtil::createUniqid(),
            'channel'=>'wechat_csb',
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

$chargeObj = new ChargeExample();
$chargeObj->charge_for_lakala_h5();
$chargeObj->charge_for_lakala_app();
$chargeObj->charge_for_lakala_web_fast();
$chargeObj->charge_for_lakala_web();
$chargeObj->charge_for_alipay_web();
$chargeObj->charge_for_alipay_app();
$chargeObj->charge_for_wechat_app();
$chargeObj->charge_for_wechat_wap();
$chargeObj->charge_for_wechat_csb();
$chargeObj->retrieve("ch_486beb15527fe37af1aac5b5");