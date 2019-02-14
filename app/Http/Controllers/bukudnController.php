<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bukudn;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\input;
use DB;


class bukudnController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show']]);
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bukudns=bukudn::all();
        return view('daftarbukuDN.dn',compact('bukudns'));
       
    } 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('daftarbukuDN.createdn');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
            $this->validate($request,[
            'namaBuku'=> 'required',
            'penulis'=> 'required',
            'namaPenerbit'=> 'required',
            'tahunTerbit'=> 'required',
            'kotaPenerbit'=> 'required',
            'mataPelajaran'=> 'required',
            'bahasa'=> 'required',
            'tingkatPendidikan'=> 'required',
            'jurusan'=>'nullable',
            'edisi'=> 'required',
            'rakBuku'=> 'required',
            'jumlahBuku'=> 'required',
            'gambarBukuDepan' =>'image|max:1999'
            ]);

            //handle file upload
            if($request->hasFile('gambarBukuDepan')){
                //get filename with extension
                $filenameWithExt = $request->file('gambarBukuDepan')->getClientOriginalName();
                //get just file name
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                //get just ext
                $extension = $request->file('gambarBukuDepan')->getClientOriginalExtension();
                //filename to store
                $fileNameToStore= $filename.'_'.time().'.'.$extension;
                //upload Image
                $path = $request->file('gambarBukuDepan')->storeAs('public/coverBuku', $fileNameToStore);
            } else{
                $fileNameToStore = 'noimage.jpg';
            }
 

        $bukudn = new bukudn();
        $bukudn->namaBuku= $request->get('namaBuku');
        $bukudn->penulis= $request->get('penulis');
        $bukudn->namaPenerbit= $request->get('tahunTerbit');
        $bukudn->tahunTerbit= $request->get('tahunTerbit');
        $bukudn->kotaPenerbit= $request->get('kotaPenerbit');
        $bukudn->mataPelajaran= $request->get('mataPelajaran');
        $bukudn->bahasa= $request->get('bahasa');
        $bukudn->tingkatPendidikan= $request->get('tingkatPendidikan');
        $bukudn->jurusan= $request->get('jurusan');
        $bukudn->edisi= $request->get('edisi');
        $bukudn->rakBuku= $request->get('rakBuku');
        $bukudn->jumlahBuku= $request->get('jumlahBuku');
        $bukudn->gambarBukuDepan = $fileNameToStore;
        $bukudn->save();
      
        return redirect('/bukudn')->with('success', 'buku telah berhasil di input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $bukudn = \App\bukudn::find($id);
        return view('daftarbukuDN.show')->with('bukudn',$bukudn);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bukudn = \App\bukudn::find($id);
        return view('daftarbukuDN.edit',compact('bukudn','id'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'namaBuku'=> 'required',
            'penulis'=> 'required',
            'namaPenerbit'=> 'required',
            'tahunTerbit'=> 'required',
            'kotaPenerbit'=> 'required',
            'mataPelajaran'=> 'required',
            'bahasa'=> 'required',
            'tingkatPendidikan'=> 'required',
            'jurusan'=>'nullable',
            'edisi'=> 'required',
            'rakBuku'=> 'required',
            'jumlahBuku'=> 'required',
            'gambarBukuDepan' =>'image|max:1999'
            ]);

        $bukudn= \App\bukudn::find($id);
        $bukudn->namaBuku= $request->get('namaBuku');
        $bukudn->penulis= $request->get('penulis');
        $bukudn->namaPenerbit= $request->get('tahunTerbit');
        $bukudn->tahunTerbit= $request->get('tahunTerbit');
        $bukudn->kotaPenerbit= $request->get('kotaPenerbit');
        $bukudn->mataPelajaran= $request->get('mataPelajaran');
        $bukudn->bahasa= $request->get('bahasa');
        $bukudn->tingkatPendidikan= $request->get('tingkatPendidikan');
        $bukudn->jurusan= $request->get('jurusan');
        $bukudn->edisi= $request->get('edisi');
        $bukudn->rakBuku= $request->get('rakBuku');
        $bukudn->jumlahBuku= $request->get('jumlahBuku');

            //handle file upload
            if($request->hasFile('gambarBukuDepan')){
                //get filename with extension
                $filenameWithExt = $request->file('gambarBukuDepan')->getClientOriginalName();
                //get just file name
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                //get just ext
                $extension = $request->file('gambarBukuDepan')->getClientOriginalExtension();
                //filename to store
                $fileNameToStore= $filename.'_'.time().'.'.$extension;
                //upload Image
                $path = $request->file('gambarBukuDepan')->storeAs('public/coverBuku', $fileNameToStore);
                if ($request->hasFile('gambarBukuDepan')) 
                {
                    Storage::delete('public/coverBuku/' . $bukudn->gambarBukuDepan);
            
                }
                $bukudn->gambarBukuDepan = $fileNameToStore;
            }
        $bukudn->save();    
        return redirect('/bukudn')->with('success', 'data buku telah berhasil di ubah!');

         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bukudn = \App\bukudn::find($id);
        $bukudn->delete();
        Storage::delete('public/coverBuku/' . $bukudn->gambarBukuDepan);
        return redirect('/bukudn')->with('success','buku telah di hapus');
    }

   
}
