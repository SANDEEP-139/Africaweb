<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
 
    class Balance {
        protected $CI;
        public function __construct()
        {
            $this->CI =& get_instance();
           	$this->CI->load->library('Session');
            $this->CI->load->model('Common_model', 'common');
            
        }

    	public function walletbalance($currency = null) {
                    
    		$ewallet_id = $this->CI->session->userdata('ewallet_id');
    		$user_id = $this->CI->session->userdata('ids');
    
    		$columns = array(
    			'user_id',
    			'ewallet_id',
    			'currency',
    			'currency as alias',
    			'balance',
    			'received_balance',
    			'on_hold_balance',
    			'reserve_balance',
    			'last_updated_at',
    		);
    
    		$filter_condition = " user_id = '".$user_id."' AND ewallet_id = '".$ewallet_id."'";
    
    		if (!empty($currency)) {
    			$wallet_balances = $this->CI->common->get_table_records_crud('master_wallet_balance', $columns, 'currency', $currency, $filter_condition);
            } else {
              	$wallet_balances = $this->CI->common->get_table_records_crud('master_wallet_balance', $columns, null, 0, $filter_condition, 'id', 'DESC');
            }
    
    		if (empty($wallet_balances)) {
    			$result_set = array(
    				"status" => array(
    					"error_code" => "",
    					"status" => "SUCCESS",
    					"message" => "Wallet Balance record not found.",
    					"response_code" => "",
    					"operation_id" => generate_guid()
    				),
    				"data" => array()
    			);  
    			return $result_set;
    		}
    
    		$result_set = array(
    			"status" => array(
    				"error_code" => "",
    				"status" => "SUCCESS",
    				"message" => "",
    				"response_code" => "",
    				"operation_id" => generate_guid()
    			),
    			"data" => $wallet_balances
    		);
    		
            return $result_set;
    	}
            
       	public function transactions($limit = 0) {
    		$ewallet_id = $this->CI->session->userdata('ewallet_id');
    		$user_id = $this->CI->session->userdata('ids');
            $transaction_status = "Completed";
    		$columns = array(
                'user_id',
    			'transaction_id',
    			'currency',
    			'amount',
    			'transaction_status',
                'payment_status',
    			'created_at',
                'description'
    		);
    
          	$filter_condition = " user_id = '".$user_id."' AND ewallet_id = '".$ewallet_id."' AND transaction_status = '".$transaction_status."'";
    		
    		if ($limit > 0) {
    			$wallet_balances = $this->CI->common->get_table_records_crud('wallet_transactions', $columns, null, 0, $filter_condition, 'id', 'DESC', $limit);
            } else {
              	$wallet_balances = $this->CI->common->get_table_records_crud('wallet_transactions', $columns, null, 0, $filter_condition, 'id', 'DESC');
            }
    
    		if (empty($wallet_balances)) {
    			$result_set = array(
    				"status" => array(
    					"error_code" => "",
    					"status" => "SUCCESS",
    					"message" => "Wallet Balance record not found.",
    					"response_code" => "",
    					"operation_id" => generate_guid()
    				),
    				"data" => array()
    			);  
    			return $result_set;
    		}
    
    		$result_set = array(
    			"status" => array(
    				"error_code" => "",
    				"status" => "SUCCESS",
    				"message" => "",
    				"response_code" => "",
    				"operation_id" => generate_guid()
    			),
    			"data" => $wallet_balances
    		);
    		
            return $result_set;
    	}
            
       	public function update_master_wallet($currency, $amount, $transaction_type, $ewallet_id, $user_id) {
    		$response = array();
    		$columns = array(
    			'user_id',
    			'ewallet_id',
    			'currency',
    			'currency as alias',
    			'balance',
    			'received_balance',
    			'on_hold_balance',
    			'reserve_balance',
    			'last_updated_at'
    		);
    		$filter_condition = " user_id = '".$user_id."' AND currency = '".$currency."'";
    
    		$wallet_balance = $this->CI->common->get_table_records_crud('master_wallet_balance', $columns, 'ewallet_id', $ewallet_id, $filter_condition);
    
    		if (empty($wallet_balance)) {
    			//$debit_amount = $this->calculate_transaction_fees($amount);
    			//$balance_to_update = (double)$amount - (double)$debit_amount;
    			return $this->insert_master_wallet_balance($currency, $amount, $ewallet_id, $user_id);
    		} else {
    			if (strtolower($transaction_type) == 'debit') {
    				if (!is_null($wallet_balance->balance)) {
    					$balance_to_update = (double)$wallet_balance->balance - (double)$amount;
    				}
    			} else if (strtolower($transaction_type) == 'credit') {
    				if (!is_null($wallet_balance->balance)) {
    					$balance_to_update = (double)$wallet_balance->balance + (double)$amount;
    				}
    			}
    
    			return $this->update_master_wallet_balance($currency, $balance_to_update, $ewallet_id, $user_id);
    		}
    	}
    
    	private function insert_master_wallet_balance($currency, $amount, $ewallet_id, $user_id) {
    		if (empty($currency) || empty($amount)) {
    			return 0;
    		}
    
    		$wallet_data_insert = array(
    			'balance' => $amount,
    			'received_balance' => 0,
    			'on_hold_balance' => 0,
    			'reserve_balance' => 0,
    			'currency' => $currency,
    			'alias' => $currency,
    			'ewallet_id' => $ewallet_id,
    			'user_id' => $user_id,
    			'last_updated_at' => date('Y-m-d H:i:s')
    		);
    
    		$result_insert = $this->CI->common->insert_record('master_wallet_balance', $wallet_data_insert);
    
    		if ($result_insert) {
    			return 1;
    		}
    		return -1;
    	}
    
    	private function update_master_wallet_balance($currency, $amount, $ewallet_id, $user_id) {
    		if (empty($currency) || empty($amount)) {
    			return 0;
    		}
    
    		$wallet_data_update = array(
    			'balance' => $amount,
    			'last_updated_at' => date('Y-m-d H:i:s')
    		);
    		$update_condition = " user_id = '".$user_id."' AND currency = '".$currency."'";
    
    		$result_update = $this->CI->common->update_record('master_wallet_balance', $wallet_data_update,  'ewallet_id', $ewallet_id, $update_condition);
    
    		if ($result_update) {
    			return 1;
    		}
    		return 0;
    	}
    
    	public function calculate_transaction_fees($amount) {
    		if (!is_numeric($amount)) {
    			return 0;
    		}
    		$stripe_transaction_fees = $this->CI->config->item('stripe_transaction_fees') ? $this->CI->config->item('stripe_transaction_fees') : 4;
            $strpipe_tax = 10 * $stripe_transaction_fees / 100;
            $volume_fees = 0.30;
    
    		return round($amount * (($stripe_transaction_fees + $strpipe_tax + $volume_fees) / 100), 2);
    	}
        
        public function debit($debit, $currency, $description) {
            $ewallet_id = $this->CI->session->userdata('ewallet_id');
		    $user_id = $this->CI->session->userdata('ids');
            $email_id = $this->CI->session->userdata('email');
            $transid = rand(119990,2312312312312321);
            $dt = new DateTime('NOW');
		    $date_time = $dt->format('Y-m-d H:i:s');    
            $update = array (
                'transaction_id'=> $transid,
                'checkout_session_id'=> $transid,
                'user_id'=> $user_id,
                'created_at'=> $date_time,
                'updated_at'=> $date_time,
                'amount'=> $debit * -1,
                'currency'=> $currency,
                'multiplier'=> "100",
                'ewallet_id'=> $ewallet_id,
                'customer_id'=> $user_id,
                'customer_email'=> $email_id,
                'payment_intent_id'=> $transid,
                'payment_status'=> "paid",
                'transaction_status'=> "Completed",
                'description'=> $description,
                'transaction_type'=> "Debit"
            );
          
            $result_insert = $this->CI->common->insert_record('wallet_transactions', $update);
            $balance_update = $this->update_master_wallet($currency, $debit, "debit", $ewallet_id, $user_id);   
        }
        
        public function credit($credit, $currency, $description) {
            $ewallet_id = $this->CI->session->userdata('ewallet_id');
		    $user_id = $this->CI->session->userdata('ids');
            $email_id = $this->session->userdata('email');
            $transid = rand(119990,2312312312312321);
            $dt = new DateTime('NOW');
		    $date_time = $dt->format('Y-m-d H:i:s');  
            $update = array (
                "transaction_id"=> $transid,
                "checkout_session_id"=> $transid,
                "user_id"=> $user_id,
                "created_at"=> $date_time,
                "updated_at"=> $date_time,
                "amount"=> $credit,
                "currency"=> $currency,
                "multiplier"=> "100",
                "ewallet_id"=> $ewallet_id,
                "customer_id"=> $user_id,
                "customer_email"=> $email_id,
                "payment_intent_id"=> $transid,
                "payment_status"=> "paid",
                "transaction_status"=> "Completed",
                "description"=> $description,
                "transaction_type"=> "Credit"
            );
           $result_insert = $this->CI->common->insert_record('wallet_transactions', $update);
           $balance_update = $this->update_master_wallet($currency, $credit, "credit", $ewallet_id, $user_id);  
        }
        
		public function get_user_wallet_balance($key, $value) {
			$columns_user = array(
			        'id', 
                    'first_name',
                    'last_name',
                    'CONCAT_WS(" ", first_name, last_name) as full_name',
                    'phone_number',
                    'email',
                    'mothers_name',			
                    'line_1', 				
                    'line_2', 				
                    'city',					
                    'state',		
					'state_code',			
                    'country',
					'country_code',				
                    'zip',
                    'CONCAT_WS(", ", line_1, line_2, city, state, country, zip) as address',				
                    'roles', 				
                    'date_of_birth', 		
                    'type',
					'kyc_status',
    				'kyc_reference_id'
		        );
			$user_data =  $this->CI->common->get_table_records_crud('user', $columns_user, $key, $value);

			if (empty($user_data)) {
    			$result_set = array(
					"status" => 'error',
					"code" => 400,
					"message" => 'Bad Request. User details not found.',
					"data" => array()
				);  
    			return $result_set;
    		}

			$kyc_data = array(
    			'kyc_status' => (boolean)$user_data->kyc_status,
    			'kyc_reference_id' => $user_data->kyc_reference_id,
    		);

			unset($user_data->kyc_status);
			unset($user_data->kyc_reference_id);

			$columns_card = array(
    			'card_last_four'
    		);
			$card_data = $this->CI->common->get_table_records_crud('apto_card', $columns_card, 'user_id', $user_data->id);

			if (empty($wallet_balances)) {
    			$card_data = null;  
    		}

			$columns_wallet = array(
    			'user_id',
    			'ewallet_id',
    			'currency',
    			'currency as alias',
    			'balance',
    			'received_balance',
    			'on_hold_balance',
    			'reserve_balance',
    			'last_updated_at',
    		);
			$wallet_balances = $this->CI->common->get_table_records_crud('master_wallet_balance', $columns_wallet, 'user_id', $user_data->id);

			if (empty($wallet_balances)) {
    			$wallet_balances = array();  
    		}
    
    		return array(
				"status" => 'success',
				"code" => 200,
				"message" => 'User wallet details fetched successfully.',
				"data" => array(
					"user" => $user_data,
					"card" => $card_data,
					"kyc" => $kyc_data,
					"wallet" => array($wallet_balances)
				)                
			); 
		}
    
                
                public function debitwallet($debit, $dwallet, $currency, $description) {
            $ewallet_id = $dwallet;
	    $user_id = $this->CI->session->userdata('ids');
            $email_id = $this->CI->session->userdata('email');
            $transid = rand(119990,2312312312312321);
            $dt = new DateTime('NOW');
		    $date_time = $dt->format('Y-m-d H:i:s');    
            $update = array (
                'transaction_id'=> $transid,
                'checkout_session_id'=> $transid,
                'user_id'=> $user_id,
                'created_at'=> $date_time,
                'updated_at'=> $date_time,
                'amount'=> $debit * -1,
                'currency'=> $currency,
                'multiplier'=> "100",
                'ewallet_id'=> $ewallet_id,
                'customer_id'=> $user_id,
                'customer_email'=> $email_id,
                'payment_intent_id'=> $transid,
                'payment_status'=> "paid",
                'transaction_status'=> "Completed",
                'description'=> $description,
                'transaction_type'=> "Debit"
            );
          
            $result_insert = $this->CI->common->insert_record('wallet_transactions', $update);
            $balance_update = $this->update_master_wallet($currency, $debit, "debit", $ewallet_id, $user_id);   
        }
        
        public function creditwallet($credit, $cwallet, $cid, $cemail, $currency, $description) {
            $ewallet_id = $cwallet;
	    $user_id = $cid;
            $email_id = $cemail;
            $transid = rand(119990,2312312312312321);
            $dt = new DateTime('NOW');
		    $date_time = $dt->format('Y-m-d H:i:s');  
            $update = array (
                "transaction_id"=> $transid,
                "checkout_session_id"=> $transid,
                "user_id"=> $user_id,
                "created_at"=> $date_time,
                "updated_at"=> $date_time,
                "amount"=> $credit,
                "currency"=> $currency,
                "multiplier"=> "100",
                "ewallet_id"=> $ewallet_id,
                "customer_id"=> $user_id,
                "customer_email"=> $email_id,
                "payment_intent_id"=> $transid,
                "payment_status"=> "paid",
                "transaction_status"=> "Completed",
                "description"=> $description,
                "transaction_type"=> "Credit"
            );
           $result_insert = $this->CI->common->insert_record('wallet_transactions', $update);
           $balance_update = $this->update_master_wallet($currency, $credit, "credit", $ewallet_id, $user_id);  
        }
                
                
                        }
?>