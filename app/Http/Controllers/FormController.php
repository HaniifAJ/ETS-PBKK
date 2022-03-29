<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class FormController extends Controller
{
    public function formulir()
    {
        return view('form');
    }
 
    public function proses(Request $request)
    {
        $messagesError = [
            'required' => ':attribute ini wajib diisi!!',
            'min' => ':attribute harus diisi minimal :min karakter!!!',
            'max' => ':attribute harus diisi maksimal :max karakter!!!',
            'numeric' => ':attribute harus berisi angka'
        ];
        
        $this->validate($request,[
            'nama' => 'required|min:5|max:20',
            'nrp' => 'required|numeric',
            'jurusan' => 'required',
            'usia' => 'required|numeric',
            'berat' => 'required|numeric|between:2.50,99.99',
            'foto' => 'required|image|mimes:jpeg,png,jpg'
        ],$messagesError);

        return view('form',['data' => $request]);
    }
}