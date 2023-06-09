<?php

namespace App\Http\Controllers;

use App\Models\pajak;
use App\Models\PajakModel;
use Illuminate\Http\Request;

class TaxController extends Controller
{
    public function tax_index()
    {
        $data = pajak::all();
        return  view('Tax.index', compact('data'));
    }

    public function tax_add()
    {
        return  view('Tax.add');
    }

    public function tax_insert(Request $request)
    {
        pajak::create($request->all());
        return redirect()->route('tax');
    }

    public function tax_edit($id)
    {
        $data = pajak::find($id);
        return  view('Tax.edit', compact('data'));
    }

    public function tax_update(Request $request, $id)
    {
        $data = pajak::find($id);
        $data->update($request->all());
        return redirect()->route('tax');
    }

    public function tax_delete($id)
    {
        $data = pajak::find($id);
        $data->delete();
        return redirect()->route('tax');
    }
}
