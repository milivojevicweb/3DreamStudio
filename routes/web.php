<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::pattern('id', '[0-9]+');

Route::get("/",[\App\Http\Controllers\PagesController::class, "home"])->name("home");

Route::get("/pocetna", [\App\Http\Controllers\PagesController::class, "home"])->name("home");

Route::get("/kontakt", [\App\Http\Controllers\ContactController::class, "page"])->name("page");

Route::post("/kontakt",[\App\Http\Controllers\ContactController::class, "sendMessage"])->name("sendMessage");

Route::get("/rr",function(){
    return view('front.pages.404');
});


Route::get("/odjava", [\App\Http\Controllers\AuthenticationController::class, "logout"])->name("logout")->middleware(["IsLoggedIn"]);



Route::middleware(['LoggedInPageDisallowed'])->group(function () {
    Route::get("/prijava",[\App\Http\Controllers\AuthenticationController::class, "loginPage"])->name("loginPage");
    Route::POST("/prijava",[\App\Http\Controllers\AuthenticationController::class, "login"])->name("login");

    Route::get("/registracija",[\App\Http\Controllers\AuthenticationController::class, "registrationPage"])->name("registrationPage");
    Route::post("/registracija",[\App\Http\Controllers\AuthenticationController::class, "registration"])->name("registration");

    Route::get("/zaboravljenaLozinka",[\App\Http\Controllers\AuthenticationController::class, "forgotPasswordPage"])->name("forgotPasswordPage");
    Route::post("/zaboravljenaLozinka",[\App\Http\Controllers\AuthenticationController::class, "forgotPassword"])->name("forgotPassword");

    Route::get("/obnavljanjeLozinke",[\App\Http\Controllers\AuthenticationController::class, "resetPasswordPage"])->name("resetPasswordPage")->middleware(["ResetPasswordMiddleware"]);;
    Route::post("/obnavljanjeLozinke",[\App\Http\Controllers\AuthenticationController::class, "resetPassword"])->name("resetPassword");
});

Route::prefix("/projekti")->group(function(){
    Route::get("/",[\App\Http\Controllers\ProjectController::class, "page"])->name("page");
    Route::get("/fetch_data",[\App\Http\Controllers\ProjectController::class, "fetch_data"])->name("fetch_data");
});

Route::get("/projekat/{id}",[\App\Http\Controllers\ProjectController::class, "getOneProject"])->name("getOneProject");

Route::prefix("/admin")->group(function(){
    Route::middleware(["AdminMiddleware"])->group(function(){

        Route::get("/", [\App\Http\Controllers\Admin\ContactController::class,"getContact"])->name("getContact");

        Route::prefix("/contact")->group(function(){

            Route::get("/", [\App\Http\Controllers\Admin\ContactController::class,"getContact"])->name("getContact");
            Route::get("/fetch_data",[\App\Http\Controllers\Admin\ContactController::class, "fetch_data"])->name("fetch_data");
            Route::post("/deleteContact",[\App\Http\Controllers\Admin\ContactController::class, "deleteContact"])->name("deleteContact");
            Route::get("/getContact",[\App\Http\Controllers\Admin\ContactController::class, "ajaxGetContact"])->name("ajaxGetContact");
            Route::post("/getContactText/{id}",[\App\Http\Controllers\Admin\ContactController::class, "getContactText"])->name("getContactText");
            Route::post("/sendAnswer",[\App\Http\Controllers\Admin\ContactController::class, "sendAnswer"])->name("sendAnswer");
            Route::get("/send",[\App\Http\Controllers\Admin\ContactController::class, "sendPage"])->name("sendPage");
            Route::post("/send",[\App\Http\Controllers\Admin\ContactController::class, "sendMail"])->name("sendMail");
        });

        Route::prefix("/project")->group(function(){

            Route::get("/",[\App\Http\Controllers\Admin\ProjectController::class, "getProject"])->name("getProject");
            Route::get("/insert",[\App\Http\Controllers\Admin\ProjectController::class, "projectForm"])->name("projectForm");
            Route::post("/insertProject",[\App\Http\Controllers\Admin\ProjectController::class, "insertProject"])->name("insertProject");
            Route::get("/fetch_data",[\App\Http\Controllers\Admin\ProjectController::class, "fetch_data"])->name("fetch_data");
            Route::post("/deleteProject",[\App\Http\Controllers\Admin\ProjectController::class, "deleteProject"])->name("deleteProject");
            Route::get("/getProject",[\App\Http\Controllers\Admin\ProjectController::class, "ajaxGetProject"])->name("ajaxGetProject");
            Route::get("/edit/{id}",[\App\Http\Controllers\Admin\ProjectController::class, "getProjectWithId"])->name("getProjectWithId");
            Route::post("/edit/updateProject",[\App\Http\Controllers\Admin\ProjectController::class, "updateProject"])->name("updateProject");
        });

        Route::prefix("/user")->group(function(){
            Route::get("/",[\App\Http\Controllers\Admin\UserController::class, "getUser"])->name("getUser");
            Route::get("/fetch_data",[\App\Http\Controllers\Admin\UserController::class, "fetch_data"])->name("fetch_data");
            Route::post("/deleteUser",[\App\Http\Controllers\Admin\UserController::class, "deleteUser"])->name("deleteUser");
            Route::get("/getUser",[\App\Http\Controllers\Admin\UserController::class,"ajaxGetUser"])->name("ajaxGetUSer");
            Route::get("/key",[\App\Http\Controllers\Admin\UserController::class, "getKey"])->name("getKey");
            Route::post("/updateKey",[\App\Http\Controllers\Admin\UserController::class, "updateKey"])->name("updateKey");
            Route::get("/insert",[\App\Http\Controllers\Admin\UserController::class, "addUserPage"])->name("addUserPage");
            Route::post("/insertUser",[\App\Http\Controllers\Admin\UserController::class, "addUser"])->name("addUser");
            Route::get("/edit/{id}",[\App\Http\Controllers\Admin\UserController::class, "editUserPage"])->name("editUserPage");
            Route::post("/editUser", [\App\Http\Controllers\Admin\UserController::class, "editUser"])->name("editUser");
        });

    });
});


Route::get("/sitemap.xml",[\App\Http\Controllers\SitemapController::class, "sitemap"])->name("sitemap");
