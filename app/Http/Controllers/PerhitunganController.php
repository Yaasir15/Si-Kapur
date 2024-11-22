<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class PerhitunganController extends Controller
{
    public function show()
    {
        $kecamatan = DB::select('select * from kecamatan');
        $kelurahan = DB::select('select * from kelurahan');

        // return response($data);
        return view('perhitungan')
            ->with('kecamatan', $kecamatan)
            ->with('kelurahan', $kelurahan);
    }

    public function insert(Request $request)
    {
        // $prov = $request->file('dokumen');
        $files = $request->file('dokumen');
        foreach ($files as $file) {
            // $path[] = $file->storeAs('dokumen', $request->user()->id);
        }

        return response('$path');
    }
}
