<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class RowController extends Controller
{
    /**
     * Загрузка файла для парсинга.
     *
     * @param  request  $request
     * @return \Response\
     */
    public function store()
    {
        
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