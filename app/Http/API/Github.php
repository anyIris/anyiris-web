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

        $params = [
            'visibility' => 'public',
            'affiliation' => 'owner',
            'sort' => 'updated'
        ];
        
         $result = UtilCurl::connect('https://api.github.com/user/repos', false, $params ,$options);
         $result = json_decode($result);
         if(isset($result->message)){
             $result = [];
         }
        return $result;
    }
}
