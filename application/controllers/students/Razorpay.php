<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Razorpay extends Student_Controller {

    public $api_config = "";

    function __construct() {
        parent::__construct();
        $this->api_config = $this->paymentsetting_model->getActiveMethod();
        $this->setting = $this->setting_model->get();
    }

    public function index() {

        $params = $this->session->userdata('params');

        $data = array();
        $data['params'] = $params;
        $data['setting'] = $this->setting;
        $data['api_error'] = array();
        $student_fees_master_id = $params['student_fees_master_id'];
        $fee_groups_feetype_id = $params['fee_groups_feetype_id'];
        $student_id = $params['student_id'];
        $total = $params['total'];
        $data['name'] = $params['name'];
        $data['merchant_order_id'] = time() . "01";
        $data['txnid'] = time() . "02";
        $data['title'] = 'Student Fee';
        $data['return_url'] = site_url() . 'students/razorpay/callback';
        $amount=number_format((float)($params['fine_amount_balance']+$params['total']), 2, '.', '');
        $data['total'] = $amount * 100;
        $data['amount'] = $total;
        $data['key_id'] = $this->api_config->api_publishable_key;
        $data['currency_code'] = $params['invoice']->currency_name;


        $this->load->view('student/razorpay', $data);
    }

    public function callback() {

        $params = $this->session->userdata('params');
        $payment_id = $_POST['razorpay_payment_id'];
      
        $json_array = array(
            'amount' => $params['total'],
            'date' => date('Y-m-d'),
            'amount_discount' => 0,
            'amount_fine' => $params['fine_amount_balance'],
            'description' => "Online fees deposit through Razorpay TXN ID: " . $payment_id,
            'received_by' => '',
            'payment_mode' => 'Razorpay',
        );

        $data = array(
            'student_fees_master_id' => $params['student_fees_master_id'],
            'fee_groups_feetype_id' => $params['fee_groups_feetype_id'],
            'amount_detail' => $json_array
        );

        $send_to = $params['guardian_phone'];
        $inserted_id = $this->studentfeemaster_model->fee_deposit($data, $send_to);
        $invoice_detail = json_decode($inserted_id);
        $array = array('invoice_id' => $invoice_detail->invoice_id, 'sub_invoice_id' => $invoice_detail->sub_invoice_id);
        echo json_encode($array);
    }

}
