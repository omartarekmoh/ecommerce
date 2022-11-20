<?php

namespace App\Http\Controllers\board;

use App\Models\Discount;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\board\discount\DiscountStore;

class DiscountController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      $discounts = Discount::latest()->get();
      return view('board.discount.index', compact('discounts'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      return view('board.discount.create');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(DiscountStore $request)
   {
      $request->validated();

      $discount = Discount::create([
         'code' => $request->code,
         'discount' => $request->discount,
         'type' => $request->type,
         // 'user_id' => auth()->user()->id,
         'start_date' => $request->start_date,
         'end_date' => $request->end_date,
      ]);

      return redirect()->route('discount.index');
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
   public function edit(Discount $discount)
   {
      // dd($discount);
      return view('board.discount.edit', compact('discount'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Discount  $discount
    * @return \Illuminate\Http\Response
    */
   public function update(DiscountStore $request, Discount $discount)
   {
      $request->validated();

      $discount->update([
         'code' => $request->code,
         'discount' => $request->discount,
         'type' => $request->type,
         'start_date' => $request->start_date,
         'end_date' => $request->end_date,
      ]);

      return redirect()->route('discount.index');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Discount  $discount
    * @return \Illuminate\Http\Response
    */
   public function destroy(Discount $discount)
   {
      $discount->delete(); 

      return redirect()->back();
   }
}
