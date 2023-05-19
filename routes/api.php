<?php

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('users', function (Request $request) {
    $validated = $request->validate([
        'search' => 'sometimes|string|max:50',
    ]);

    return response()->json([
        'users' => User::query()
            ->when(
                isset($validated['search']),
                fn (Builder $query) => $query->where('email', 'like', "%{$validated['search']}%")
            )
            ->latest()
            ->limit(20)
            ->get(),
    ]);
});
