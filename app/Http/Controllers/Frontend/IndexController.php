<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\API\Github;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function __constructor(){}

    public function index(){
        $repos = Github::getRepos(env('GITHUB_USER_NAME'));

        $viewData = [
            "repos"=> $repos,
            "recentPost" => []
        ];
        return view('frontend.index',$viewData);
    }
}
