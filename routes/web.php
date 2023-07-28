<?php

use App\Models\Newborn;
use Illuminate\Support\Facades\Route;
use IIIuminate\Http\Request;
use iIIuminate\Http\Response;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('newborn.index');
});

Route::get('/newborn', function () {
    return view('newborn/index', [ 
        'newborn' => Newborn::latest()->get()
]);
})->name('newborn.index');

Route::get('/newborn/create', function() {
    return view('newborn/create');
})->name('newborn.create');

Route::get('/newborn/{id}/edit', function ($id) {
    return view('newborn/edit', [
        'newborn' => Newborn::findOrFail($id)
    ]);
})->name('newborn.edit');

Route::get('/newborn/{id}', function ($id) {
    return view('newborn/index', [
        'newborn' => Newborn::findOrFail($id)
    ]);
})->name('newborn.show');

Route::post('/newborn', function (Illuminate\Http\Request $request) {
    $data = $request->validate([
        'mothers_name' => 'required|max:255',
        'mothers_age' => 'required',
        'infant_gender' => 'required',
        'infant_birtdate' => 'required',
        'gestational_age' => 'required',
        'height' => 'required',
        'weight' => 'required',
        'short_description' => 'required',
    ]);

    $newborn = new Newborn;
    $newborn->mothers_name = $data['mothers_name'];
    $newborn->mothers_age = $data['mothers_age'];
    $newborn->infant_gender = $data['infant_gender'];
    $newborn->infant_birtdate = $data['infant_birtdate'];
    $newborn->gestational_age = $data['gestational_age'];
    $newborn->height = $data['height'];
    $newborn->weight = $data['weight'];
    $newborn->short_description = $data['short_description'];

    $newborn->save();

    return redirect()->route('newborn.show', ['id' => $newborn->id])
        ->with('success', 'Task created successfully!');
})->name('newborn.store');

Route::put('/newborn/{id}', function ($id, Illuminate\Http\Request $request) {
    $data = $request->validate([
        'mothers_name' => 'required|max:255',
        'mothers_age' => 'required',
        'infant_gender' => 'required',
        'infant_birtdate' => 'required',
        'gestational_age' => 'required',
        'height' => 'required',
        'weight' => 'required',
        'short_description' => 'required',
    ]);

    $newborn = Newborn::findOrFail($id);
    $newborn->mothers_name = $data['mothers_name'];
    $newborn->mothers_age = $data['mothers_age'];
    $newborn->infant_gender = $data['infant_gender'];
    $newborn->infant_birtdate = $data['infant_birtdate'];
    $newborn->gestational_age = $data['gestational_age'];
    $newborn->height = $data['height'];
    $newborn->weight = $data['weight'];
    $newborn->short_description = $data['short_description'];

    $newborn->save();

    return redirect()->route('newborn.show', ['id' => $newborn->id])
        ->with('success', 'Task created successfully!');
})->name('newborn.update');

Route::delete('/newborn/{newborn}', function (Newborn $newborn) {
    $newborn->delete();

    return redirect()->route('newborn.index')
        ->with('success', 'Newborn deleted successfully!');
})->name('newborn.destroy');

Route::fallback(function () {
    return 'Still got somewhere !';
});
