<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
  public function index()
   {
   		$siswa = Siswa::latest()->get();
    	return view ('siswa.index', compact('siswa'));
   }
  public function create()
   {
   		return view('siswa.create');
   }
   public function store(Request $request)	

   {
   		siswa::create($request->all());

   		return redirect()->route('siswa.index');
   }
   public function edit(Siswa $siswa)
    {
      return view('siswa.edit', compact('siswa'));
    }

   public function update(Request $request, Siswa $siswa)
    {
      $siswa->update($request->all());

      return redirect()->route('siswa.index');
    }

    public function destroy(Siswa $siswa)
    {
      $siswa->delete();

      return redirect()->back();
    }

  }
