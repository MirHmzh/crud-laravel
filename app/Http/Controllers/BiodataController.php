<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;
use App\Biodata;

class BiodataController extends Controller
{
    public function index()
    {
    	$biodata = Biodata::all();
    	return view('index', compact('biodata'));
    }

    public function baru()
    {
    	$jenis_kelamin = array(
    		'Laki-laki' => 'Laki-laki',
    		'Perempuan' => 'Perempuan'
    		);
    	return view('buat', compact('jenis_kelamin'));
    }

    public function buat()
    {
    	$input = Input::all();
    	$aturan = array(
    		'nama' => 'required|min:3',
    		'usia' => 'required',
    		'telepon' => 'required',
    		'email' => 'required|email'
    		);

    	$pesan = array(
    		'nama.required' => 'Inputan Nama Wajib diisi.',
    		'nama.min' => 'Inputan nama minimal 3 karakter',
    		'usia.required' => 'Inputan usia wajib di isi',
    		'telepon.required' => 'Inputan telepon wajib diisi',
    		'email.email' => 'Inputan harus berupa Email.'
    		);

    	$validasi = Validator::make($input, $aturan, $pesan);

    	if ($validasi->fails()) {
    		return Redirect::back()->withErrors($validasi)->withInput;
    	}else{
    		$nama = Input::get('nama');
    		$usia = Input::get('usia');
    		$jenis_kelamin = Input::get('jenis_kelamin');
    		$telepon = Input::get('telepon');
    		$email = Input::get('email');
    		Biodata::create(compact('nama','usia','jenis_kelamin', 'telepon', 'email'));
    		return Redirect::route('beranda')->withPesan('Biodata berhasil ditambahkan');
    	}
    }

    public function lihat($id)
    {
        $biodata = Biodata::find($id);
        return view('lihat', compact('biodata'));
    }

    public function ubah($id)
    {
        $jenis_kelamin = array(
            'Laki-laki' => 'Laki-laki',
            'Perempuan' => 'Perempuan'
            );
        $biodata = Biodata::find($id);
        return view('ubah', compact('jenis_kelamin', 'biodata'));
    }

    public function ganti($id)
    {
        $input = Input::all();
        $aturan = array(
            'nama'    => 'required|min:3',
            'usia'    => 'required',
            'telepon' => 'required',
            'email'   => 'required|email'
            );

        $pesan = array(
            'nama.required' => 'Inputan Nama wajib diisi.',
            'nama.min' => 'Inputan Nama minimal 3 karakter.',
            'usia.required' => 'Inputan Usia wajib diisi.',
            'telepon.required' => 'Inputan Telepon wajib diisi.',
            'email.required' => 'Inputan Email wajib diisi.',
            'email.email' => 'Inputan harus berupa Email.'
        );

        $validasi = Validator::make($input, $aturan, $pesan);
        if ($validasi->fails()) {
            return Redirect::back()->withErrors($validasi)->withInput();
        }else{
            $ganti = Biodata::find($id);
            $ganti->nama = Input::get('nama');
            $ganti->usia = Input::get('usia');
            $ganti->jenis_kelamin = Input::get('jenis_kelamin');
            $ganti->email = Input::get('email');
            $ganti->save();
        }

    }

	public function hapus($id)
	{
        Biodata::find($id)->delete();
        return Redirect::back()->withPesan('Biodata berhasil dihapus');
	}
}