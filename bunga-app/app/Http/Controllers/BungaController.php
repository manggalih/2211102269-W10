<?php

namespace App\Http\Controllers;

use App\Models\Bunga;
use Illuminate\Http\Request;

class BungaController extends Controller
{
    public function index()
    {
        $bungas = Bunga::all();
        return view('bunga.home', compact('bungas'));
    }

    public function manage()
    {
        $bungas = Bunga::all();
        return view('bunga.manage', compact('bungas'));
    }

    public function create()
    {
        return view('bunga.create');
    }

    public function store(Request $request)
    {
        Bunga::create($request->all());
        return redirect()->route('bunga.manage');
    }

    public function edit($id)
    {
        $bunga = Bunga::findOrFail($id);
        return view('bunga.edit', compact('bunga'));
    }

    public function update(Request $request, $id)
    {
        $bunga = Bunga::findOrFail($id);
        $bunga->update($request->all());
        return redirect()->route('bunga.manage');
    }

    public function destroy($id)
    {
        Bunga::destroy($id);
        return redirect()->route('bunga.manage');
    }
}
