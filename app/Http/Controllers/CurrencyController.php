<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Support\Facades\Http;

class CurrencyController extends Controller
{
    public function upsert()
    {
        $response = Http::get("https://cdn.jsdelivr.net/gh/fawazahmed0/currency-api@1/latest/currencies/brl.json")->object();

        foreach ($response->brl as $key => $value) {
            Currency::updateOrCreate(
                ["name" => $key],
                ["value" => $value]
            );
        }

        return response()->json("Success");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currencies = cache()->remember("currencies", 20, function () {
            return Currency::all();
        });

        return view("index", [
            "currencies" => $currencies
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Currency $currency)
    {
        return view("currency", compact($currency));
    }
}
