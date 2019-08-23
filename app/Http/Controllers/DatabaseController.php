<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DatabaseController extends Controller
{
    public function insert()
    {
        DB::table('articles')->insert([
            [
                'category_id' => 2,
                'title' => '文章2',
                'content' => '内容2'
            ],
            [
                'category_id' => 3,
                'title' => '文章3',
                'content' => '内容3'
            ],
        ]);
    }
    
     /**
     * 查询数据
     */
    public function get()
    {
        $data = DB::table('articles')
                ->where('id',1)
                ->get();
        dump($data);
    }
}
