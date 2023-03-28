<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\GroupDescription;
use App\Models\Header;
use App\Models\HeaderDescription;
use App\Models\Product;
use App\Models\Variety;
use Carbon\Carbon;
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
//      dd($groups,$headers,$varieties,$products,$groupdescriptions,$headerdescriptions);

        return view('products.index', compact('products', 'varieties' , 'headers', 'headerdescriptions', 'groups', 'groupdescriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $group =  Header::orderBy('group')->get();
        return view('products.create',compact('group',));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (!Auth::check()) {
            return redirect(route('products.index'))->with('status', 'Access Denied');

        } else {
            $request->validate([
                'product_name' => ['required', 'unique:products,name', 'max:100'],
//                'product_description' => ['required', 'unique:products,description', 'max:255'],
                'product_description' => ['max:255'],
                'product_type' => ['required', 'exists:headers,name', 'max:100'],
//                'image_url' => ['required', 'max:255', 'unique:products,image', 'url', 'ends_with:.jpg,.png,.webp,.avif,.gif,.tiff,.jpeg'],
                'image_url' => ['max:255'],
                'product_price' => ['required', 'max:50', 'numeric']
            ]);
            $headerID = DB::table('headers')->where('name', '=', $request->product_type)->first()->id;
            //if ($request->product_available === '1') {
            //    $availability = true;
            //} else {
            //    $availability = false;
            //}
            //if ($request->product_stock === '1') {
            //    $stock = true;
            //} else {
            //    $stock = false;
            //}

            Product::create([
                'name' => $request->product_name,
                'description' => $request->product_description,
                'price' => $request->product_price,
                'image' => $request->image_url,
                'availability' => $request->product_available,
                'stock' => $request->product_stock,
                'header' => $headerID,

            ]);

            return redirect(route('products.index'))->with('status', 'Product Added');
        }
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
        $group = Header::orderBy('group')->get();
        return view('products.edit',compact(['product']),compact('group'));
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
//


        $request->validate([
            'name' => ['required', 'unique:products,name,'.$product->id,'max:100'],
            'description' => ['required', 'unique:products,description,'.$product->id, 'max:255'],
            'header' => ['required', 'max:100'],
            'image' => ['required', 'max:255', 'unique:products,image,'.$product->id, 'url', 'ends_with:.jpg,.png,.webp,.avif,.gif,.tiff,.jpeg'],
            'price' => ['required', 'max:50', 'numeric'],
        ]);


        if($request->get('stock') == null){
            $isStock = 0;
        }
        else{
            $isStock = request('stock');
        }

        if($request->get('availability') == null){
            $isAvailability = 0;
        }
        else{
            $isAvailability = request('availability');
        }

            $product->name= $request->name;
            $product->description = $request->description;
             $product->header = $request->header;
            $product->image= $request->image;
            $product->price= $request->price;
            $product->stock = $isStock;
        $product->availability = $isAvailability;
            $product->save();

        return redirect(route('products.index'));
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
       $deleted = $product->name." has been deleted!";
        $product->delete();
        return redirect(route('products.index'))->with('status', $deleted );
    }
}
