<?php

namespace App\Http\Controllers;

use App\Models\Download;
use App\Models\DownloadClass;
use App\Models\ProductClass;
use App\Models\SolutionClass;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Solution;

class IndexController extends Controller
{
    //
    public function index()
    {
//        $p = Product::getProdcuts(4);

        // 获取解决方案
        $solutions = Solution::getSolutionList(5);
        return view('index.index', compact('solutions'));
    }

    //
    public function about()
    {
        return view('index.about');
    }

    //
    public function contact()
    {
        return view('index.contact');
    }

    //
    // public function news()
    // {
    // 	return view('index.news');
    // }

    // 产品中心
    public function product(Request $request)
    {
        // 分类
        $class = ProductClass::getClass();

        // 产品
        $products = Product::getProdcuts('', $request->id, $request->title);
        return view('index.product', compact('class', 'products'));
    }

    // 解决方案
    public function solution(Request $request)
    {
        // 分类
        $class = SolutionClass::getClass();

        // 产品
        $solutions = Solution::getSolutions('', $request->id);
        return view('index.solution', compact('class', 'solutions'));
    }

    // 解决方案详情
    public function solutionDetail(Solution $solution)
    {
        return view('index.solution_detail', compact('solution'));
    }

    // 工程案例
    public function engineering()
    {
        return view('index.engineering');
    }

    //
    // public function rczp()
    // {
    // 	return view('index.rczp');
    // }

    // 下载中心
    public function download(Request $request)
    {
        // 分类
        $class = DownloadClass::getClass();

        // 产品
        $downloads = Download::getDownloads('', $request->id);
        return view('index.download', compact('class', 'downloads'));
    }
}
