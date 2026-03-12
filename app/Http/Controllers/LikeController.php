<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Recipe;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    // Toggle like (like jika belum, unlike jika sudah)
    public function toggle(Request $request, $id)
    {
        $recipe = Recipe::find($id);

        if (!$recipe) {
            return response()->json(['message' => 'Resep tidak ditemukan'], 404);
        }

        $like = Like::where('user_id', $request->user()->id)
            ->where('recipe_id', $id)
            ->first();

        if ($like) {
            // Sudah like, maka unlike
            $like->delete();
            return response()->json([
                'message'     => 'Like dibatalkan',
                'likes_count' => $recipe->likes()->count(),
            ]);
        } else {
            // Belum like, maka like
            Like::create([
                'user_id'   => $request->user()->id,
                'recipe_id' => $id,
            ]);
            return response()->json([
                'message'     => 'Resep berhasil di-like',
                'likes_count' => $recipe->likes()->count(),
            ]);
        }
    }
}
