<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // WEEK 4
        // echo "HAI";
        $title = "hallo";

        //
        // $data = DB::select(DB::raw("select * from products"));

        //
        // $data = DB::table('products')->get();

        //
        $data = Product::all();

        // $sortedData = $data->sortBy('price');

        // dd($data);
        // foreach($sortedData as $d) {
        //     echo $d->name. "(====)". $d->category_id. "(====)";
        // }
        return view('product.index', compact('data', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        // echo "masuk ke controller produk mengambil produk ber id $id pada fungsi show";

        $objProduk = Product::find($id);

        return view('product.show', compact('objProduk'));
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

    // WEEK 7
    public function showInfo()
    {
        $result = Product::orderBy('price', 'DESC')->first();
        return response()->json(array(
            'status' => 'oke',
            'msg' => "<div class='alert alert-info'>
    Did you know? <br>The most expensive product is " . $result->name . "</div>"
        ), 200);
    }
}
