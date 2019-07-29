<?php
/**
 * E-shop Skiresort Card
 * @author Martin Dobry
 * @link http://skiresortcard.cz
 * @version 1.0
 */

namespace SkiresordCard;

class Eshop {
    
    public $server;
    public $user;
    public $pass;
    public $detail;
    
    public function __construct()
    {
        $this->server = ""; // url adresa serveru
        $this->user = ""; // uzivatelske jmeno
        $this->pass = ""; // heslo
        $this->detail = false;
    }
    
    private function sendData($dataIn) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->server);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "json=" . base64_encode(json_encode($dataIn)));
        curl_setopt($ch, CURLOPT_TIMEOUT, 1000);
        $dataOut = curl_exec($ch);
        curl_close($ch);
        return $dataOut;
    }
    
    public function Test($test) {
        
        $data = array(
            'user' => $this->user,
            'pass' => $this->pass,
            'detail' => $this->detail,
            'data' => $test
        );
        
        return json_decode($this->sendData($data), 1);
    }
    
}
