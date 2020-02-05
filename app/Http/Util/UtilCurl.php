<?php
namespace App\Http\Util;

class UtilCurl{
    public function __constructor(){

    }

    public static function connect($url, $isPost, $params=array(), $options=array()){
        $ch = curl_init();
        $url = ($isPost ? $url : $url.'?'.http_build_query($params, '', '&'));
        curl_setopt($ch, CURLOPT_URL, $url);
        if($isPost){
            curl_setopt($ch, CURLOPT_POST, $isPost);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        }
        
        foreach($options as $key=>$value){
            curl_setopt($ch, $key, $value);
        }

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;

    }
}