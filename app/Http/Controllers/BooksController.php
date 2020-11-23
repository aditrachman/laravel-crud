<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Books;


class BooksController extends Controller
{
    public function home(){
        return view('welcome');
    }


    public function index(){
       $data = DB::table('Books')->get();
        return view('index', ['Books' => $Books]);
    }
    

    public function back(){
     return redirect ('/');
    }
    
    public function create(){
     return view('create');
    }

    public function view()
    {
      $data=Books::all();
      return view('view',compact('data'));
    }


    public function insert(Request $request){
     $data=new Books();
        $data->vendor=$request->get('vendor');
        $data->datamasuk=$request->get('datamasuk');
        $data->datakeluar=$request->get('datakeluar');
        $data->save();
     return redirect ('view');
    }


    public function destroy($id) 
   {
    DB::table('Books')->where('id', $id)->delete();
    return redirect('view')->with('status', 'Data Berhasil DiHapus');
   }

    public function edit($id){
     $data=Books::find($id);
     return view('edit',compact('data'));
    }
       
       
     public function update(Request $request) 
{
    // untuk validasi form
    $this->validate($request, [
        'datamasuk' => 'required',
        'datakeluar' => 'required',
    ]);
    // update data books
    DB::table('Books')->where('id', $request-> id)-> update([
        'datamasuk' => $request-> datamasuk,
        'datakeluar' => $request-> datakeluar,
    ]);
    // alihkan halaman edit ke halaman books
    return redirect('/view')->with('status', 'Data Buku Berhasil DiUbah');
}


    public function read($id){
     $data=Books::find($id);
     return view('read',compact('data'));
    }
}
