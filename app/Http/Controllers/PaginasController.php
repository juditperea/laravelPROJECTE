<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paginas; 

class PaginasController extends Controller
{

    public function show()
    {
        $paginas = Paginas::all();

        $images = [
            'public/img'
        ];
    
        return view('paginas', compact('paginas'),['images' => $images]);
    }

}
