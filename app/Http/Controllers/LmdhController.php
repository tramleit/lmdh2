<?php

namespace App\Http\Controllers;

// use db
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Lmdh;

class LmdhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return DB::table('data_barang')->get();
        return view('menu.list', [
            'data_barang' => DB::table('data_barang')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.index', [
            'last_id' => Lmdh::getLmdh()->id_barang
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $req = $request->input('barang', []);
        // if barang[]['name'] is empty, then unset it then validate
        $no = 0;
        $array = [];
        foreach ($req as $key => $value) {
            if (empty($value['nama']) || empty($value['harga'])) {
                unset($req[$key]);
            }
            $array[$no] = $value;
            $no++;
        }
        $request->validate([
            'barang.*.nama' => 'required|max:30',
            'barang.*.harga' => 'required|numeric'
        ]);
        // return error if validation failed
        if ($request->has('error')) {
            return redirect('/main/create')->with('error', $request->error);
        }
        // insert to database
        foreach ($array as $key => $value) {
            // get last id
            $last_id = Lmdh::getLmdh()->id_barang;
            $kode_br = 'LMDH2_' . ($last_id + 1);
            DB::table('data_barang')->insert([
                'kode_barang' => $kode_br,
                'nama_barang' => $value['nama'],
                'harga' => $value['harga'],
                'id_toko' => 1
            ]);
            // if insert failed then return error
            if (DB::table('data_barang')->where('kode_barang', $kode_br)->get()->isEmpty()) {
                return redirect('/menu/create')->with('error', 'Gagal menambahkan data');
            }
        }
        return redirect('/menu/create')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
