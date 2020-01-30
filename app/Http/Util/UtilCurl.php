<?
namespace App\Http\Util;

class UtilCurl{
    public function __constructor(){

    }

    public static function curlPost($host, $params=[], $options=[]){
        $ch = curl_init($host);

        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        foreach($options as $key=>$value){
            curl_setopt($ch, $key, $value);
        }
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $result = curl_exec($ch);
        curl_close($ch);

        return $result;

    }

    public static function curlGet($host, $option=[]){
        $ch = curl_init($host);
        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }

}