<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Util\UtilCurl;
use Illuminate\Http\Request;

class GithubController extends Controller
{
    public function __constructor(){

    }

    public function index(){
        $curlOption = [
            CURLOPT_HTTPHEADER => [
                'Accept: application/vnd.github.v3+json',
                'User-Agent: Awesome-Octocat-App'
            ]
        ];
        $resSchema = UtilCurl::curlGet('https://api.github.com/users/octocat/orgs',[], $curlOption);
        return $resSchema;
    }
}
