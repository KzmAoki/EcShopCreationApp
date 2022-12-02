<?php

namespace App\Http\Controllers;

use App\Product;
use App\Shop;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        $data = ['products' => $products];

        return view('products.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $product = new Product();
        $data = [
            'product' => $product,
            'shop_id' => $id,
        ];

        return view('products.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'shop_id' => 'required',
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);
        $product = new Product();
        $product->shop_id = $request->shop_id;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->save();

        $shop = Product::find($request->shop_id);

        return redirect(route('shops.show', $shop));
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $data = ['product' => $product];

        return view('products.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $data = ['product' => $product];

        return view('products.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->save();

        return redirect(route('products.show', $product));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $shop = Product::find($product->shop_id);
        $product->delete();

        return redirect(route('shops.show', $shop));
    }

    public function checkout(Product $product)
    {
        if ($product->stock <= 0) {
            return redirect(route('shops.index'));
        }

        $line_items = [];
        $line_item = [
            'price_data' => [
                'currency' => 'jpy',
                'unit_amount' => $product->price,
                'product_data' => [
                    'name' => $product->name,
                    'description' => $product->description,
                ],
            ],
            'quantity' => 1,
        ];
        array_push($line_items, $line_item);

        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [$line_items],
            'success_url' => route('success', $product),
            'cancel_url' => route('products.show', $product),
            'mode' => 'payment',
        ]);

        return view('products.checkout', [
            'product' => $product,
            'session' => $session,
            'publicKey' => env('STRIPE_PUBLIC_KEY'),
        ]);
    }

    public function success(Product $product)
    {
        --$product->stock;
        $product->save();

        return redirect(route('shops.index'));
    }

    public function csvExport(Shop $shop)
    {
        $product = new product();
        $response = new StreamedResponse(function () use ($product, $shop) {
            $stream = fopen('php://output', 'w');

            // 文字化け回避
            stream_filter_prepend($stream, 'convert.iconv.utf-8/cp932//TRANSLIT');

            // ヘッダー行を追加
            fputcsv($stream, $product->csvHeader());

            $results = $product->getCsvData($shop);

            if (empty($results[0])) {
                fputcsv($stream, [
                        'データが存在しませんでした。',
                    ]);
            } else {
                foreach ($results as $row) {
                    fputcsv($stream, $product->csvRow($row));
                }
            }
            fclose($stream);
        });
        $response->headers->set('Content-Type', 'application/octet-stream');
        $response->headers->set('content-disposition', 'attachment; filename="登録商品一覧.csv"');

        return $response;
    }
}
