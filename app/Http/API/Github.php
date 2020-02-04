<?php
namespace App\Http\API;

use App\Http\Util\UtilCurl;
use Illuminate\Http\Request;

class Github
{
    public function __constructor(){

    }

    public static function getRepos($name){
        $options = [
            CURLOPT_HTTPHEADER => [
                'Authorization: token '.env('GITHUB_API_TOKEN'),
                'user-agent: '.env('GITHUB_API_USER_AGENT')
            ]
        ];
        $resSchema = UtilCurl::connect('https://api.github.com/users/'.$name.'/repos', false, [],$options);
        return $resSchema;
    }
}
