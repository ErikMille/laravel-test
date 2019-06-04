<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * detail of a product
     */
    public function show()
    {
        $detail = view('product/show');

        $navigation = view('common/navigation');

        $content = view('common/layout', [
            'navigation' => $navigation,
            'detail' => $detail
        ]);

        $html = view('common/html', [
            'content' => $content
        ]);

        return $html;
    }
}
