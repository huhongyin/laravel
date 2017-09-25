<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index()
    {
	$list = [
			[
				'name' => 'jack',
				'age' => '22',
			],
			[
                                'name' => 'jack1',
                                'age' => '23',
                        ],

	];
	return view('Index.index', compact('list'));
    }
}
