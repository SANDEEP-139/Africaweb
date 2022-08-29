<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

use Stripe\Stripe;

class Stripelib {
    
    protected $CI;
    protected $stripe;
    protected $api_error;

    public function __construct() {
        $this->api_error = '';
        $this->CI =& get_instance();
        $this->$stripe = \Stripe\Stripe::setApiKey($this->CI->config->item('stripe_secret_key'));
    }

    public function create_checkout_session($session_request) {
        $request = array(        	
          	'submit_type' => 'pay',
          	'success_url' => $session_request['success_url'],
          	'cancel_url' => $session_request['cancel_url'],
          	'client_reference_id' => $session_request['ewallet_id'],
          	'payment_method_types' => ['card'],
          	'line_items' => [[
            	'price_data' => [
              		'currency' => $session_request['currency'],
              		'product_data' => [
                		'name' => 'Wallet Topup',
              		],
              		'unit_amount' => $session_request['amount'] * 100,
            	],
            	'quantity' => 1,
          	]],
          	'mode' => 'payment',
          	'metadata' => $session_request['metadata']
        );
      
      	!empty($session_request['customer_email']) && $request['customer_email'] = $session_request['customer_email'];
      
        try {
            $this->$stripe = \Stripe\Stripe::setApiKey($this->CI->config->item('stripe_secret_key'));
            return $stripe = \Stripe\Checkout\Session::create($request);
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            $this->api_error = $e->getMessage(); 
            return false;
        }
    }

    public function fetch_checkout_session($session_id) {
        try {
            $this->$stripe = \Stripe\Stripe::setApiKey($this->CI->config->item('stripe_secret_key'));
            return $stripe = \Stripe\Checkout\Session::retrieve(
                $session_id
            );
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            $this->api_error = $e->getMessage(); 
            return false;
        }
    }
}