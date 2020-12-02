<?php

namespace App\Http\Controllers;

use App\Models\Ambiluang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Uang;
use App\Models\Modal;

class AmbiluangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DB::table('ambiluangs')
        ->orderBy('created_at', 'desc')
        ->get();
        return view('admin.ambiluang.index', ['ambiluang' => $data]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $data = DB::table('anggotas')->get();
        return view('admin.ambiluang.create', ['data' => $data]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'harga' => 'integer|min:1',
        ]);


        $data[0] = DB::table('uangs')->get();

        $data[1] = DB::table('modals')
                    ->where('nama', $request->nama)
                    ->get();

         foreach($data[1] as $row){
         $uanguser = $row->uang;
         $modaluser = $row->harga;
         }
           
         foreach($data[0] as $row){
            $untung = $row->untung;
            $pulangmodal = $row->pulang;
            }

            

            if($request->jenis == 'modal'){
                //dd($uanguser);
                if($pulangmodal >= $request->harga && $modaluser >= $request->harga && $uanguser >= $request->harga ){
                    //dd('asd1');
                    $pulangmodal = $pulangmodal - $request->harga;
                    $modaluser = $modaluser - $request->harga;
                    $uanguser = $uanguser - $request->harga;

                    
                  Uang::where('id', '1')
                  ->update([
                        'pulang' => $pulangmodal,
                      ]);

                      Modal::where('nama', $request->nama)
                      ->update([
                           'uang' => $uanguser,
                            'harga' => $modaluser,
                          ]);

                    Ambiluang::create([
                        'nama' => $request->nama,
                        'jenis' => $request->jenis,
                        'harga' => $request->harga,
                    ]);

                    return redirect('/ambiluang');

                }else{
                   // dd('asd2');
                    return redirect()->route('ambilcreate')->with('surat', 'Modal Terbatas');
                }


            }else{
                if($untung >= $request->harga && $uanguser >= $request->harga){
                    //dd('asd1');
                    $untung =  $untung - $request->harga;
                    $uanguser = $uanguser - $request->harga;

                    Uang::where('id', '1')
                    ->update([
                          'untung' => $untung,
                        ]);

                     Modal::where('nama', $request->nama)
                     ->update([
                        'uang' => $uanguser,
                    ]);

                    Ambiluang::create([
                        'nama' => $request->nama,
                        'jenis' => $request->jenis,
                        'harga' => $request->harga,
                    ]);

                    return redirect('/ambiluang');
                }else{
                   // dd('asd2');
                    return redirect()->route('ambilcreate')->with('surat', 'Untung Terbatas');
                }
            }



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ambiluang  $ambiluang
     * @return \Illuminate\Http\Response
     */
    public function show(Ambiluang $ambiluang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ambiluang  $ambiluang
     * @return \Illuminate\Http\Response
     */
    public function edit(Ambiluang $ambiluang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ambiluang  $ambiluang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ambiluang $ambiluang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ambiluang  $ambiluang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ambiluang $ambiluang)
    {
        //
    }
}
