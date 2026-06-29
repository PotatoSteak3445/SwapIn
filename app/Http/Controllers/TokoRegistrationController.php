<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use Illuminate\Support\Facades\Auth;

class TokoRegistrationController extends Controller
{
    public function index()
    {
        return view("toko.create.start");
    }
    public function postStep1(Request $request)
    {
        // Put the data into the session so it's remembered for later
        session([
            "email" => $request->email,
            "phone" => $request->phone,
            "shop_name" => $request->shop_name,
            "shop_domain" => $request->shop_domain,
            "address" => $request->address,
        ]);

        return redirect()->route("toko.step2");
    }
    public function step1()
    {
        return view("toko.create.step1");
    }
    public function step2()
    {
        return view("toko.create.step2");
    }
    public function step3()
    {
        return view("toko.create.step3");
    }
    public function step4()
    {
        return view("toko.create.step4");
    }
    public function success()
    {
        return view("toko.create.success");
    }

    public function store(Request $request)
    {
        // For a UI/UX project, we'll save everything at the end or progressively.
        // Let's assume this is called after Step 4.
        Shop::create([
            "user_id" => Auth::id(),
            "shop_name" => $request->session()->get("shop_name"),
            "shop_domain" => $request->session()->get("shop_domain"),
            "phone_number" => $request->session()->get("phone"),
            "email" => $request->session()->get("email"),
            "address" => $request->session()->get("address"),
            "bank_name" => $request->bank_name,
            "bank_account" => $request->bank_account,
        ]);

        return redirect()->route("toko.success");
    }
}
