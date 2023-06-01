<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AnnouncementController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


# Guest & User Routes
Route::middleware(["announcements"])->name("home.")->group(function (){
        Route::get("/",[HomeController::class,"index"])->name("index");
        Route::get("/categories",[HomeController::class,"categories"])->name("category.index");
        Route::get("/movie/{id}",[HomeController::class,"movie_show"])->name("movie_show");
        Route::get("/contact",[HomeController::class,"contact"])->name("contact");
        Route::post("/contact",[HomeController::class,"contact_message"])->name("contact_message");
        Route::get("/about",[HomeController::class,"about"])->name("about");
        Route::get("/faq",[HomeController::class,"faq"])->name("faq");
        Route::get("/announcements",[HomeController::class,"announcements"])->name("announcements");
        Route::get("/c/{id}/{slug}",[HomeController::class,"category_property"])->name("category.property");
});

# Admin Dashboard Routes
Route::middleware(["auth","admin"])->prefix("/admin")->name("admin.")->group(function(){
        Route::get("/",[AdminController::class,"index"])->name("dashboard");
        Route::prefix("/settings")->controller(AdminController::class)->name("settings.")->group(function(){
            Route::get("/","settings")->name("index");
            Route::put("/update","update")->name("update");
        });
        Route::prefix("/category")->name("category.")->controller(CategoryController::class)->group(function(){
           Route::get("/","index")->name("index");
           Route::get("/create","create")->name("create");
           Route::get("/show/{id}","show")->name("show");
           Route::post("/store","store")->name("store");
           Route::get("/edit/{id}","edit")->name("edit");
           Route::put("/update/{id}","update")->name("update");
           Route::delete("/delete/{id}","destroy")->name("destroy");
        });

        Route::prefix("/announcement")->name("announcement.")->controller(AnnouncementController::class)->group(function(){
            Route::get("/","index")->name("index");
            Route::get("/create","create")->name("create");
            Route::post("/store","store")->name("store");
            Route::get("/edit/{id}","edit")->name("edit");
            Route::get("/show/{id}","show")->name("show");
            Route::put("/update/{id}","update")->name("update");
            Route::delete("/delete/{id}","destroy")->name("destroy");
        });
        Route::prefix("/slider")->name("slider.")->controller(SliderController::class)->group(function(){
            Route::get("/","index")->name("index");
            Route::get("/create","create")->name("create");
            Route::post("/store","store")->name("store");
            Route::get("/show/{id}","show")->name("show");
            Route::get("/edit/{id}","edit")->name("edit");
            Route::post("/update/{id}","update")->name("update");
            Route::post("/delete/{id}","destroy")->name("destroy");
        });
        Route::prefix("/movie")->name("movie.")->controller(MovieController::class)->group(function(){
            Route::get("/","index")->name("index");
            Route::get("/create","create")->name("create");
            Route::post("/store","store")->name("store");
            Route::get("/show/{id}","show")->name("show");
            Route::get("/edit/{id}","edit")->name("edit");
            Route::put("/update/{id}","update")->name("update");
            Route::delete("/delete/{id}","destroy")->name("destroy");
        });
    Route::prefix("/series")->name("series.")->controller(MovieController::class)->group(function(){
        Route::get("/","index")->name("index");
        Route::get("/create","create")->name("create");
        Route::get("/show/{id}","admin_show")->name("show");
        Route::get("/edit/{id}","edit")->name("edit");
        Route::put("/update/{id}","update")->name("update");
        Route::delete("/delete/{id}","destroy")->name("destroy");
    });

        Route::prefix("/contact")->name("contact.")->controller(ContactMessageController::class)->group(function(){
            Route::get("/","index")->name("index");
            Route::get("/show/{id}","show")->name("show");
            Route::post("/update/{id}","update")->name("update");
            Route::delete("/delete/{id}","destroy")->name("destroy");
        });
        Route::prefix("/users")->name("user.")->controller(UserController::class)->group(function(){
            Route::get("/","index")->name("index");
            Route::get("/edit/{id}","edit")->name("edit");
            Route::get("/show/{id}","show")->name("show");
            Route::post("/update/{id}","update")->name("update");
            Route::delete("/delete/{id}","destroy")->name("destroy");
        });
});

# User Routes - IF logged in
Route::middleware(['auth',"announcements"])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


