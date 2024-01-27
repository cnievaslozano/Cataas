<?php

namespace App\Http\Controllers;

use App\Models\CatImage;
use Illuminate\Http\Request;

class CatApiController extends Controller
{
    public function index(Request $request)
    {
        $query = CatImage::query();

        // Filtrar por cantidad si se proporciona el parámetro "cantidad"
        if ($request->has('cantidad')) {
            $cantidad = $request->input('cantidad');
            $query->limit($cantidad);
        }


        $cats = $query->get()->map(function ($cat) {
            return $this->transformCat($cat);
        });

        return response()->json($cats);
    }

    public function show($id)
    {
        $cat = CatImage::findOrFail($id);

        return response()->json($this->transformCat($cat));
    }

    public function search(Request $request, $tag)
    {
        // Escapamos el tag para asegurar el formato correcto
        $escapedTag = '"' . $tag . '"';

        // Realizamos la búsqueda utilizando el tag recibido
        $cats = CatImage::whereJsonContains('tags', $escapedTag)->get();

        // Devolvemos la respuesta JSON con los resultados de la búsqueda
        return response()->json($cats);
    }



    private function transformCat($cat)
    {
        return [
            '_id' => "https://cataas.com/cat/{$cat['_id']}",
            'mimetype' => $cat['mimetype'],
            'size' => $cat['size'],
            'tags' => $cat['tags'],
        ];
    }
}
