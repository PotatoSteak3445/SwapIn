<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TokoRegistrationController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

// Public Routes
Route::get("/", function () {
    $products = Product::latest()->get(); // Get all products, newest first
    return view("welcome", compact("products"));
})->name("home");
Route::get("/register", function () {
    return view("auth.register");
})->name("register");

// Auth Logic
Route::post("/register", [AuthController::class, "register"])->name(
    "register.post",
);
Route::post("/login", [AuthController::class, "login"])->name("login");
Route::post("/logout", [AuthController::class, "logout"])->name("logout");

// Protected Routes (Must be logged in to access)
Route::middleware(["auth"])->group(function () {
    // 1. Dashboard Check
    Route::get("/toko", function () {
        if (auth()->user()->shop) {
            return view("toko.dashboard");
        } else {
            return redirect()->route("toko.create");
        }
    })->name("toko.dashboard");

    // 2. Handle the Step 1 Form Data (OUTSIDE the function above)
    Route::post("/toko/create/step-1", [
        TokoRegistrationController::class,
        "postStep1",
    ])->name("toko.step1.post");

    // 3. Add Product Page
    Route::get("/toko/tambah", function () {
        return view("toko.add_product");
    })->name("toko.tambah-produk");

    // 4. Onboarding GET Routes
    Route::get("/toko/create", [
        TokoRegistrationController::class,
        "index",
    ])->name("toko.create");
    Route::get("/toko/create/step-1", [
        TokoRegistrationController::class,
        "step1",
    ])->name("toko.step1");
    Route::get("/toko/create/step-2", [
        TokoRegistrationController::class,
        "step2",
    ])->name("toko.step2");
    Route::get("/toko/create/step-3", [
        TokoRegistrationController::class,
        "step3",
    ])->name("toko.step3");
    Route::get("/toko/create/step-4", [
        TokoRegistrationController::class,
        "step4",
    ])->name("toko.step4");
    Route::get("/toko/create/success", [
        TokoRegistrationController::class,
        "success",
    ])->name("toko.success");

    // 5. Final Save to MySQL
    Route::post("/toko/create/save", [
        TokoRegistrationController::class,
        "store",
    ])->name("toko.store");
});
