<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Util\UtilCurl;
use Illuminate\Http\Request;

class GithubController extends Controller
{
    public function __constructor(){

    }

    public function getRepos($name){
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
