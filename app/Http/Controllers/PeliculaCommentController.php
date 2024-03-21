<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PeliculasComment; 

class PeliculaCommentController extends Controller
{
    //CREATE
    public function store(Request $request, $id)
    {
        
        $request->validate([
            'comment' => 'required|string',
        ]);

        
        PeliculasComment::create([
            'user_id' => auth()->id(),
            'pelicula_id' => $id,
            'comment' => $request->comment,
        ]);

        return redirect()->back();
    }
    //DELETE
    
    public function delete($id)
    {
        
        $comment = PeliculasComment::findOrFail($id);
    
        
        $comment->delete();
    
        return redirect()->back();
    }
    //UPDATE
    public function update(Request $request, $id)
{
    $comment = PeliculasComment::findOrFail($id);

    $request->validate([
        'comment' => 'required|string',
    ]);

    $comment->update([
        'comment' => $request->comment,
    ]);

    return redirect()->back();
}

    
}
