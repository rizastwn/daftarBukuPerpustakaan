<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\bukuln;
use Illuminate\Support\Facades\Storage;

class bukulnController extends Controller
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
        $bukulns=\App\bukuln::all();
        return view('daftarbukuLN.ln',compact('bukulns'));
    }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('daftarbukuLN.createln');
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
            'negeriPenerbit'=>'required',
            'mataPelajaran'=> 'required',
            'bahasa'=> 'required',
            'tingkatPendidikan'=> 'required',
            'jurusan'=>'nullable',
            'edisi'=> 'required',
            'rakBuku'=> 'required',
            'jumlahBuku'=> 'required',
            'gambarBukuDepan' =>'image|required|max:1999'
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


        // membuat buku baru
        $bukuln = new bukuln();
        $bukuln->namaBuku= $request->get('namaBuku');
        $bukuln->penulis= $request->get('penulis');
        $bukuln->namaPenerbit= $request->get('tahunTerbit');
        $bukuln->tahunTerbit= $request->get('tahunTerbit');
        $bukuln->kotaPenerbit= $request->get('kotaPenerbit');
        $bukuln->negeriPenerbit= $request->get('negeriPenerbit');
        $bukuln->mataPelajaran= $request->get('mataPelajaran');
        $bukuln->bahasa= $request->get('bahasa');
        $bukuln->tingkatPendidikan= $request->get('tingkatPendidikan');
        $bukuln->jurusan= $request->get('jurusan');
        $bukuln->edisi= $request->get('edisi');
        $bukuln->rakBuku= $request->get('rakBuku');
        $bukuln->jumlahBuku= $request->get('jumlahBuku');
        
        $bukuln->save();
      
        return redirect('/bukuln')->with('success', 'buku telah berhasil di input');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $bukuln = \App\bukuln::find($id);
        return view('daftarbukuLN.show')->with('bukuln',$bukuln);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bukuln = \App\bukuln::find($id);
        return view('daftarbukuLN.edit',compact('bukuln','id'));
        
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
            'negeriPenerbit'=>'required',
            'mataPelajaran'=> 'required',
            'bahasa'=> 'required',
            'tingkatPendidikan'=> 'required',
            'jurusan'=>'nullable',
            'edisi'=> 'required',
            'rakBuku'=> 'required',
            'jumlahBuku'=> 'required',
            'gambarBukuDepan' =>'image|max:1999'
            ]);
        $bukuln= \App\bukuln::find($id);
        $bukuln->namaBuku= $request->get('namaBuku');
        $bukuln->penulis= $request->get('penulis');
        $bukuln->namaPenerbit= $request->get('tahunTerbit');
        $bukuln->tahunTerbit= $request->get('tahunTerbit');
        $bukuln->kotaPenerbit= $request->get('kotaPenerbit');
        $bukuln->negeriPenerbit= $request->get('negeriPenerbit');
        $bukuln->mataPelajaran= $request->get('mataPelajaran');
        $bukuln->bahasa= $request->get('bahasa');
        $bukuln->tingkatPendidikan= $request->get('tingkatPendidikan');
        $bukuln->jurusan= $request->get('jurusan');
        $bukuln->edisi= $request->get('edisi');
        $bukuln->rakBuku= $request->get('rakBuku');
        $bukuln->jumlahBuku= $request->get('jumlahBuku');

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
                    Storage::delete('public/coverBuku/' . $bukuln->gambarBukuDepan);
                }
                $bukuln->gambarBukuDepan = $fileNameToStore;
            }   
        $bukuln->save();
      
        return redirect('/bukuln')->with('success', 'data buku telah berhasil di ubah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bukuln = \App\bukuln::find($id);
        $bukuln->delete();
        Storage::delete('public/coverBuku/' . $bukuln->gambarBukuDepan);
        return redirect('/bukuln')->with('success','buku telah di hapus');
    }
}
