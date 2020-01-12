<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ImageController extends Controller
{
    public function show(Image $image)
    {
        return Inertia::render('Image/Show', [
            'image' => $image->only(
                'id',
                'title'
            ),
        ]);
    }
}
