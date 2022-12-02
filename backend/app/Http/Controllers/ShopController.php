<?php

namespace App\Http\Controllers;

use App\Product;
use App\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shops = Shop::get();
        $data = ['shops' => $shops];

        return view('shops.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $shop = new Shop();
        $data = ['shop' => $shop];

        return view('shops.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => 'required',
        ]);
        $shop = new Shop();
        $shop->user_id = \Auth::id();
        $shop->name = $request->name;
        $shop->description = $request->description;
        $shop->save();

        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        $products = Product::get()->where('shop_id', '==', $shop->id);
        $data = [
            'shop' => $shop,
            'products' => $products,
        ];

        return view('shops.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
        $this->authorize($shop);
        $data = ['shop' => $shop];

        return view('shops.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop)
    {
        $this->authorize($shop);
        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => 'required',
        ]);
        $shop->name = $request->name;
        $shop->description = $request->description;
        $shop->save();

        return redirect(route('shops.show', $shop));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
        $this->authorize($shop);
        $shop->delete();

        return redirect(route('home'));
    }
}
