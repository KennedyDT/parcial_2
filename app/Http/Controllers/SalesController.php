<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index()
    {
        $datos['data_sales'] = Sale::paginate();
        return view('sales.index',$datos);
    }


    public function create()
    {
        return view('sales.create');
    }

    public function store(Request $request)
    {
        $data_sales = request() -> except('_token');
        Sale::insert($data_sales);
    }

    public function show()
    {

    }

    public function edit($id)
    {
        $sales = Sale::findOrFail($id);
        return view('sales.edit', compact('sales'));
    }

    public function update($id)
    {
        $data_sales = request() -> except(['_token','_method']);
        Sale::where('id', '=', $id)-> update($data_sales);

        $sale = Sale::findOrFail($id);
        return view('sales.edit', compact('sale'));
    }

    public function destroy($id)
    {
        Sale::destroy($id);
        return redirect('sales')->with('mensaje','venta borrada');
    }

}
