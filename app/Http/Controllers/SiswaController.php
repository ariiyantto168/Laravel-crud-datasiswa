<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
    	$data_siswa = \App\Siswa::all();
    	/*App adalah namaspace yang ada di model */
    	/* $data_siswa adalah variabel yang di buuat sendiri bebas mau kalimat variabel apa saja*/
    	/* Model siswa adalah nanti nya akan di ambil semua dengan data yang telah di buat*/
    	return view('siswa.index', ['data_siswa' => $data_siswa]); 
    	/* view adalah nama folder struktur yang di resource */
    	/* siswa adalah nama folder yang tersedia di dalam view */
    	/* dan index adalah nama file yang di buat di dalam foleder siswa */	
    }

    public function create(Request $request)
    {
    	\App\Siswa::create($request->all());
    	return redirect('/siswa')->with('sukses','Data Berhasil di input');
    }
    public function edit($id) /* $id di ambil dari web.php berasal dari route*/
    {
        $siswa = \App\Siswa::find($id);
        return view('siswa/edit',['siswa' => $siswa]); /*inilah yang namanya parsing*/
    }
    public function update(Request $request,$id)
    {

            $siswa = \App\Siswa::find($id);
            $siswa->update($request->all());
            return redirect('/siswa')->with('sukses','Data Berhasil di update');
    }
    public function delete($id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->delete($siswa);
        return redirect('/siswa')->with('sukses','Data Berhasil di hapus');
    }
}
