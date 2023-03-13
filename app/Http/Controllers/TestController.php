<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        $items = DB::select('select * from user_tbl');
        return view('test', ['items' => $items]);
    }

    public function add()
    {
        return view('add');
    }

    public function create(Request $request)
    {
        $param = [
            'pass' => $request->pass,
            'name' => $request->name,
            'mail' => $request->mail,
            'address' => $request->address
        ];
        DB::insert('INSERT INTO user_tbl(pass,username,usermail,address) VALUES (:pass,:name,:mail,:address)', $param);

        return redirect('test');
    }

    public function dell()
    {
        return view('dell');
    }

    public function delete(Request $request)
    {
        $param = [
            'id' => $request->id
        ];
        DB::delete('DELETE FROM user_tbl WHERE id = :id', $param);

        return redirect('test');
    }

    public function edit(Request $request)
    {
        $param = [
            'id' => $request->id
        ];
        $items = DB::select('SELECT * FROM user_tbl WHERE id = :id', $param);
        return view('edit', ['item' => $items[0]]);
    }

    public function update(Request $request)
    {
        $param = [
            'id' => $request->id,
            'pass' => $request->pass,
            'name' => $request->name,
            'mail' => $request->mail,
            'address' => $request->address
        ];
        DB::update('UPDATE user_tbl SET pass = :pass,username = :name, usermail = :mail, address = :address WHERE id = :id', $param);

        return redirect('test');
    }
}
