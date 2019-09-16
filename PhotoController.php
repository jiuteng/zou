<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booksss;
class PhotoController extends Controller
{
    public function index()
    {
        $model=new Booksss();
        $data=$model->get();
        return ['code'=>0,'msg'=>"查询成功","data"=>$data];
    }
}
