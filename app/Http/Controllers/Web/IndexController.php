<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index()
    {

        $list = array(
            array(
                'name' => '用户',
                'age' => '年龄',
                'sex' => '性别',
            ),
            array(
                'name' => '用户',
                'age' => '年龄',
                'sex' => '性别',
            ),
            array(
                'name' => '用户',
                'age' => '年龄',
                'sex' => '性别',
            ),
            array(
                'name' => '用户',
                'age' => '年龄',
                'sex' => '性别',
            ),
            array(
                'name' => '用户',
                'age' => '年龄',
                'sex' => '性别',
            ),
            array(
                'name' => '用户',
                'age' => '年龄',
                'sex' => '性别',
            )
        );

	    return view('Index.index', compact('list'));
    }
}
