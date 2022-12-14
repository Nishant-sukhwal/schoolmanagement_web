<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

use Omnipay\Omnipay;

require_once(APPPATH . 'third_party/omnipay/vendor/autoload.php');

class Paypal_payment {

    private $_CI;
    public $api_config;
    public $currency;

    function __construct() {
        $this->_CI = & get_instance();
        $this->api_config = $this->_CI->paymentsetting_model->getActiveMethod();
    }

    public function payment($data) {

        $fee_groups_feetype_id = $data['fee_groups_feetype_id'];
        $student_fees_master_id = $data['student_fees_master_id'];
        $name = $data['name'];
        $amount_balance = $data['total'];
        $currency = $data['currency_name'];
        $payment_details = $this->_CI->feegrouptype_model->getFeeGroupByID($fee_groups_feetype_id);
        $gateway = Omnipay::create('PayPal_Express');
        $gateway->setUsername($this->api_config->api_username);
        $gateway->setPassword($this->api_config->api_password);
        $gateway->setSignature($this->api_config->api_signature);
        $gateway->setTestMode(TRUE);

        $params = array(
            'cancelUrl' => site_url('gateway/paypal/getsuccesspayment'),
            'returnUrl' => site_url('gateway/paypal/getsuccesspayment'),
            'student_fees_master_id' => $student_fees_master_id,
            'fee_groups_feetype_id' => $fee_groups_feetype_id,
            'guardian_phone' => $data['guardian_phone'],
            'name' => $name,
            'description' => $payment_details->type . " - " . $payment_details->code,
            'amount' => number_format($amount_balance, 2, '.', ''),
            'currency' => $currency,
        );
        $response = $gateway->purchase($params)->send();
        return $response;
    }

    public function success($data) {

        $fee_groups_feetype_id = $data['fee_groups_feetype_id'];
        $student_fees_master_id = $data['student_fees_master_id'];
        $name = $data['name'];
        $amount_balance = $data['total'];
        $currency = $data['currency_name'];
        $payment_details = $this->_CI->feegrouptype_model->getFeeGroupByID($fee_groups_feetype_id);

        $gateway = Omnipay::create('PayPal_Express');
        $gateway->setUsername($this->api_config->api_username);
        $gateway->setPassword($this->api_config->api_password);
        $gateway->setSignature($this->api_config->api_signature);
        $gateway->setTestMode(TRUE);


        $params = array(
            'student_fees_master_id' => $student_fees_master_id,
            'fee_groups_feetype_id' => $fee_groups_feetype_id,
            'guardian_phone' => $data['guardian_phone'],
            'name' => $name,
            'description' => $payment_details->type . " - " . $payment_details->code,
            'amount' => number_format($amount_balance, 2, '.', ''),
            'currency' => $currency,
        );

        $params['cancelUrl'] = site_url('gateway/paypal/getsuccesspayment');
        $params['returnUrl'] = site_url('gateway/paypal/getsuccesspayment');

        $response = $gateway->completePurchase($params)->send();

        return $response;
    }

}

?>