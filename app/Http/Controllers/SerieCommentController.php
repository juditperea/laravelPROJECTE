<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SeriesComment;
use Illuminate\Support\Facades\Auth;

class SerieCommentController extends Controller
{
    //CREATE

    public function store(Request $request, $id)
    {
        
        $request->validate([
            'comment' => 'required|string',
        ]);

        
        SeriesComment::create([
            'user_id' => auth()->id(),
            'serie_id' => $id,
            'comment' => $request->comment,
        ]);

        return redirect()->back();
    }

    //DELETE
    
    public function delete($id)
    {
        
        $comment = SeriesComment::findOrFail($id);
    
        
        $comment->delete();
    
        return redirect()->back();
    }
    //UPDATE
    public function update(Request $request, $id)
{
    $comment = SeriesComment::findOrFail($id);

    $request->validate([
        'comment' => 'required|string',
    ]);

    $comment->update([
        'comment' => $request->comment,
    ]);

    return redirect()->back();
}

}
