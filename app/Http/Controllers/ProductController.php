<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\GroupDescription;
use App\Models\Header;
use App\Models\HeaderDescription;
use App\Models\Product;
use App\Models\Variety;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
//        if (auth::check()) {
//            $products = Product::orderBy('header')->get();
//            $varieties = Variety::orderBy('header')->get();
//            $headers = Header::orderBy('group')->get();
//            $groups = Group::orderBy('id')->get();
////            dd($groups);
//        }
//        else {
//            $products = Product::orderBy('header')->where('availability', '=', true)->get();
//            $varieties = Variety::orderBy('header')->where('availability', '=', true)->get();
//            $productheader = Header::orderBy('group')->leftjoin('products', 'headers.id', '=', 'products.header')->where('products.availability', '=', '1')->select('headers.*');
//            $headers = Header::orderBy('group')->leftjoin('varieties', 'headers.id', '=', 'varieties.header')->where('varieties.availability', '=', '1')->select('headers.*')->union($productheader);
//            $groups = Group::orderBy('id')->joinSub($headers, 'headers', function ($join) {
//                $join->on('groups.id', '=', 'headers.group');
//            })->select('groups.*')->distinct()->get();
//            $headers = $headers->get();
//        }
//        $headerdescriptions = HeaderDescription::orderBy('header')->get();
//        $groupdescriptions = GroupDescription::orderBy('group')->get();
////       dd($groupdescriptions,$groups);
////        dd($headers);
//        return view('products.index', compact('products', 'varieties' , 'headers', 'headerdescriptions', 'groups', 'groupdescriptions'));


        $headerdescriptions = HeaderDescription::orderBy('header')->get();
        $groupdescriptions = GroupDescription::orderBy('group')->get();
        $products = Product::orderBy('header')->get();
            $varieties = Variety::orderBy('header')->get();
            $headers = Header::orderBy('group')->get();
            $groups = Group::orderBy('id')->get();
//            dd($groups,$headers,$varieties,$products,$groupdescriptions,$headerdescriptions);

        return view('products.index', compact('products', 'varieties' , 'headers', 'headerdescriptions', 'groups', 'groupdescriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // TODO: Add data validation (and make sure user is logged in)
        $headerID = DB::table('headers')->where('name', '=', $request->product_type)->first()->id;
        if ($request->product_available === '1') {
            $availability = true;
        } else {
            $availability = false;
        }
        if ($request->product_stock === '1') {
            $stock = true;
        } else {
            $stock = false;
        }

        Product::create([
            'name' => $request->product_name,
            'description' => $request->product_description,
            'price' => $request->product_price,
            'image' => $request->image_url,
            'availability' => $availability,
            'stock' => $stock,
            'header' => $headerID,
            'created_by' => Auth::id()
        ]);

        return redirect(route('products.index'))->with('status', 'Product Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        return view('products.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
