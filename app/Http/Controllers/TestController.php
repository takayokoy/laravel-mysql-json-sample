<?php

namespace App\Http\Controllers;

use App\Tests;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function index()
    {
        $tests = Tests::orderBy('id', 'DESC')->get()->all();
        return view('index', ['tests' => $tests]);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $jsonData = $request->json_data;

        if (!empty($jsonData)) {
            Tests::create([
                'json_data' => json_encode(json_decode($jsonData)),
            ]);
        }

        $tests = Tests::orderBy('id', 'DESC')->get()->all();

        return view('index', ['tests' => $tests]);
    }

    public function show($id)
    {
    }
    public function edit($id)
    {
    }
    public function update(Request $request, $id)
    {
    }
    public function destroy($id)
    {
    }

    public function search(Request $request)
    {
        $key = $request->json_key;
        $value = $request->json_value;

        $query = Tests::query();

        if (empty($key) && empty($value)) {
            $tests = $query->orderBy('id', 'DESC')->get()->all();
        } else {
// JSON型カラムのWhere句は「'column->jsonのkey'」で指定する
//            例：ふつうの検索）
//            $tests = Tests::where('json_data->first_name' , 'Fname1')->orderBy('id', 'DESC')->get()->all();
//            例：like検索）
//            $tests = Tests::where('json_data->first_name' , 'like', '%name1%')->orderBy('id', 'DESC')->get()->all();
//            例：MYSQLのJSON型に対してWHERE〜IN句は使用できない
//            ✕　$tests = Tests::whereIn('json_data->first_name' , ['Fname1', 'Fname3', 'Fname6'])->orderBy('id', 'DESC')->get()->all();
            $tests = Tests::where('json_data->'. $key , $value)->orderBy('id', 'DESC')->get()->all();
        }

        return view('index', ['tests' => $tests]);
    }
}
