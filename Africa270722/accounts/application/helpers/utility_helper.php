<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');
    
    function assets_url()
    {
        return base_url().'assets';
    }

    function assets_site_url()
    {
        return base_url().'assets';
    }

	/**
     * Check the Input value is null or empty string
     *
     * @param       string  $string         Input String
     * @return      bool    true            Success
     * @return      bool    false           Error
     * 
     */
    function is_null_or_empty_string($string) {
        try {
            return (!isset($string) || trim($string) === '' || trim($string) === null);
        }
        catch (Exception $exception) {
            log_message('error', "Exception in is_null_or_empty_string: ".$e->getMessage());
        }
    }    

    /**
     * Check the Input value is an array and not an empty array
     *
     * @param       array  $array         Input Array
     * @return      bool    true            Success
     * @return      bool    false           Error
     * 
     */
    function is_empty_array($array) {
        try {
            return (is_array($array) && empty($array) && sizeof($array) >= 0);
        }
        catch (Exception $exception) {
            log_message('error', "Exception in is_empty_array: ".$e->getMessage());
        }
    }

    /**
     * Generate Verification Key using Custom Hash Logic
     *
     * @param       array  $array         Input Array
     * @return      bool    true            Success
     * @return      bool    false           Error
     * 
     */
    function generate_verification_key($email) {
        $verification_data = array();
        try {
            $current_date_time = new DateTime(date('Y-m-d H:i:s'));
            $current_date_time->setTimezone(new DateTimeZone('UTC'));
            $current_date_time = $current_date_time->format('Y-m-d H:i:s');
            $link_generated_on = strtotime($current_date_time);

            $hash_string = $link_generated_on.'|'.$email.'|'.md5($link_generated_on);
            $verification_key = encode_with_skipped_escape_characters($hash_string);
            
            $verification_data = array(
                'verification_key' => $verification_key,
                'link_generated_on' => $current_date_time
            );
            return $verification_data;
        } catch (Exception $exception) {
            log_message('error', "Exception in is_empty_array: ".$e->getMessage());
        }
    }

    /**
     * Check the Input value is an array and not an empty array
     *
     * @param       array   $base_array     Input Array
     * @return      bool    copied_arr      Success / Error
     * 
     */
    function copy_array_elements($base_array) {
        $copied_array = array();
        try {
            for ($i = 0; $i < sizeof($base_array); $i++)  
            {  
                $copied_arr[$i] = $base_array[$i];  
            }
            return $copied_arr;
        }
        catch (Exception $exception) {
            log_message('error', "Exception in copy_array_elements: ".$e->getMessage());
        }
    }
    
    /**
     * create_guid
     *
     * @return void
     */
    function generate_guid() {
        $guid = '';
        $namespace = rand(11111, 99999);
        $uid = uniqid('', true);
        $data = $namespace;
        $data .= $_SERVER['REQUEST_TIME'];
        $data .= $_SERVER['HTTP_USER_AGENT'];
        $data .= $_SERVER['REMOTE_ADDR'];
        $data .= $_SERVER['REMOTE_PORT'];
        $hash = strtoupper(hash('ripemd128', $uid . $guid . md5($data)));
        $guid = substr($hash,  0,  8) . '-' .
                substr($hash,  8,  4) . '-' .
                substr($hash, 12,  4) . '-' .
                substr($hash, 16,  4) . '-' .
                substr($hash, 20, 12);
        return strtolower($guid);
    }
?> 