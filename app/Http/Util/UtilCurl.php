<?php
namespace App\Http\Util;

class UtilCurl{
    public function __constructor(){

    }

    public static function connect($host, $isPost, $params=[], $options=[]){
        $ch = curl_init($host);

        if($isPost){
            curl_setopt($ch, CURLOPT_POST, $isPost);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        }
        
        foreach($options as $key=>$value){
            var_dump($value);
            curl_setopt($ch, $key, $value);
        }

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $result = curl_exec($ch);
        var_dump($result);
        curl_close($ch);

        return $result;

    }
}