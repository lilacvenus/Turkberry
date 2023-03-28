<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\GroupDescription;
use App\Models\Header;
use App\Models\HeaderDescription;
use App\Models\Variety;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VarietyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $group =  Header::orderBy('group')->get();
        return view('varieties.create',compact('group',));
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
                'variety_name' => ['required', 'unique:variety,name', 'max:100'],
//                'variety_description' => ['required', 'unique:variety,description', 'max:255'],
                'variety_description' => ['max:255'],
                'variety_type' => ['required', 'exists:headers,name', 'max:100'],
//                'image_url' => ['required', 'max:255', 'unique:variety,image', 'url', 'ends_with:.jpg,.png,.webp,.avif,.gif,.tiff,.jpeg'],
                'image_url' => ['max:255']
            ]);
            $headerID = DB::table('headers')->where('name', '=', $request->variety_type)->first()->id;
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

            Variety::create([
                'name' => $request->variety_name,
                'description' => $request->variety_description,
                'image' => $request->image_url,
                'availability' => $request->variety_available,
                'stock' => $request->variety_stock,
                'header' => $headerID,

            ]);

            return redirect(route('products.index'))->with('status', 'Variety Added');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Variety  $variety
     * @return \Illuminate\Http\Response
     */
    public function show(Variety $variety)
    {
        return view('products.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Variety  $variety
     * @return \Illuminate\Http\Response
     */
    public function edit(Variety $variety)
    {
        //can't add varieties headers that weren't seeded with one?
        //$group = Header::orderBy('group')->join('varieties', 'varieties.header', '=', 'headers.id')->select('headers.*')->groupBy('id')->get();
        $group =  Header::orderBy('group')->get();
        return view('varieties.edit',compact(['variety']),compact('group'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Variety  $variety
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Variety $variety)
    {
        if (!Auth::check()) {
            return redirect(route('products.index'))->with('status', 'Access Denied');

        } else {
            $request->validate([
                'name' => ['required', 'unique:varieties,name,' . $variety->id, 'max:100'],
                'description' => ['required', 'unique:varieties,description,' . $variety->id, 'max:255'],
                'header' => ['required', 'max:100'],
                'image' => ['required', 'max:255', 'unique:varieties,image,' . $variety->id, 'url', 'ends_with:.jpg,.png,.webp,.avif,.gif,.tiff,.jpeg'],
            ]);


            if ($request->get('stock') == null) {
                $isStock = 0;
            } else {
                $isStock = request('stock');
            }

            if ($request->get('availability') == null) {
                $isAvailability = 0;
            } else {
                $isAvailability = request('availability');
            }

            $variety->name = $request->name;
            $variety->description = $request->description;
            $variety->header = $request->header;
            $variety->image = $request->image;
            $variety->stock = $isStock;
            $variety->availability = $isAvailability;
            $variety->save();

            return redirect(route('products.index'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Variety  $variety
     * @return \Illuminate\Http\Response
     */
    public function destroy(Variety $variety)
    {
        $deleted = "Variety: '".$variety->name."' has been deleted!";
        $variety->delete();
        return redirect(route('products.index'))->with('status', $deleted );
    }
}
