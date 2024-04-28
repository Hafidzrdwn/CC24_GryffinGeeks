<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product', [
            'product' => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_product', [
            'category' => Category::all()
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
        $credentials = $request->validate([
            'product_name' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'desc' => 'required',
            'category_id' => 'required'
        ]);
        $credentials['product_image'] =
            'storage/' . $request->product_image->store('images/products', 'public');
            $credentials['available_stock'] = 10;
        Product::create($credentials);
        return redirect(route('product.index'))->with('success', 'Data added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('show_product', [
            'product' => Product::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('edit_product', [
            'product' => Product::find($id),
            'category' => Category::all()
        ]);
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
        $credentials = $request->validate([
            'product_name' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'desc' => 'required',
            'category_id' => 'required'
        ]);

        $produk = Product::find($id);

        if ($request->hasFile('product_image')) {
            $credentials['product_image'] = 'storage' . $request->icon->store('images/product', 'public');
            unlink($produk->product_image);
        }

        $produk->update($credentials);
        return redirect(route('product.index'))->with('success', 'data updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect(route('product.index'))->with('success', 'data deleted');
    }
}
