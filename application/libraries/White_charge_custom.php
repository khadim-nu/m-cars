<?php   
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once __DIR__.'/white_payments/vendor/autoload.php';

class White_charge_custom extends White{
    
    private $charge = '';
    
    public function __construct() {
        $this->set_api_key('sk_test_1234567890abcdefghijklmnopq');
        
        $this->charge = new White_Charge();
    }
    
    public function charge($amount, $currency, $card_number, $expiry_month, $expiry_year, $card_cvc, $description) {
        
        $obj = $this->charge;
        
        $result = $obj::create(array(
          "amount" => $amount,
          "currency" => $currency,
          "card" => array(
            "number" => $card_number,// 4242424242424242
            "exp_month" => $expiry_month,// 11
            "exp_year" => $expiry_year,// 2014
            "cvc" => $card_cvc// 123
          ),
          "description" => $description
        ));
        
        return $result;
    }
    
    public function set_api_key($key) {
        parent::setApiKey($key);
    }
}