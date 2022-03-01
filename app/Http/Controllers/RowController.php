<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7\Request;

class RowController extends Controller
{
    /**
     * Загрузка файла для парсинга.
     *
     * @param  request  $request
     * @return \Response\
     */
    public function store(Request $request)
    {
        echo "Test";   
    }

    /**
     * Отображения интерфейса с записями
     * 
     * @return \Illuminate\View\View;
     */

    public function index()
    {
        return "ee";
    }

}