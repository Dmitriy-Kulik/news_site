<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\News;

class WriteCountReadingController extends Controller
{

    public function write(Request $request)
    {

        $count = DB::table('news')->where('id', $request->arr[0])->update(
            ['count_readers' => $request->count]
        );

        return $request->count;

    }
}