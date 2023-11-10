<?php
    use Twilio\Rest\Client;  

    class Twilio_CIC extends CI_Controller { 

        public function __construct() {
            parent::__construct();    
        }

        public function messageCustomer(){

            $c_name = $this->input->post('c_name');
            $to = $this->input->post('phone');
            $msg = 'Dear '.$c_name.', Your GiftableFunds order is ready! To confirm your payment swiftly, please share a payment receipt screenshot via WhatsApp +501 6275958.Thank you for choosing us! :)';
            
            $client = new Client(TWILIO_SID, TWILIO_TOKEN);
            $client->messages->create(
                '+501'.$to,
                array(
                    'from' => TWILIO_NUMBER,
                    'body' => $msg,
                    //'mediaUrl' => "https://climacons.herokuapp.com/clear.png",
                )
            );
        }   
        
        public function callCustomer(){

            $to = $this->input->post('phone');

            $client = new Client(TWILIO_SID, TWILIO_TOKEN);
            $client->account->calls->create(  
                '+501'.$to, //calling to
                TWILIO_NUMBER, //calling from
                array(
                    "url" => "http://demo.twilio.com/docs/voice.xml"
                )
            );
        }
    }
?>