<?php

namespace App\Http\Controllers\board;

use App\Http\Controllers\Controller;
use App\Http\Requests\board\offer\OfferRequest;
use App\Models\Discount;
use App\Models\Offer;
use App\Models\Product;
use Illuminate\Http\Request;

class OfferController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      $offers = Offer::latest()->get();
      // dd($offers);
      return view('board.offers.index', compact('offers'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      $products = Product::all();
      return view('board.offers.create', compact('products'));
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(OfferRequest $request)
   {
      $request->validated();

      Offer::create([
         'discount' => $request->discount,
         'product_id' => $request->product_id,
         // 'user_id' => auth()->user()->id,
         'start_date' => $request->start_date,
         'end_date' => $request->end_date,
      ]);

      return redirect()->route('offer.index');
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Discount  $discount
    * @return \Illuminate\Http\Response
    */
   public function show(Discount $discount)
   {
      //
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Discount  $discount
    * @return \Illuminate\Http\Response
    */
   public function edit(Offer $offer)
   {
      $products = Product::all();
      return view('board.offers.edit', compact('products', 'offer'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Discount  $discount
    * @return \Illuminate\Http\Response
    */
   public function update(OfferRequest $request, Offer $offer)
   {
      $request->validated();

      $offer->update([
         'discount' => $request->discount,
         'product_id' => $request->product_id,
         // 'user_id' => auth()->user()->id,
         'start_date' => $request->start_date,
         'end_date' => $request->end_date,
      ]);

      return redirect()->route('offer.index');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Discount  $discount
    * @return \Illuminate\Http\Response
    */
   public function destroy(Offer $offer)
   {
      $offer->delete();

      return redirect()->back();
   }
}
