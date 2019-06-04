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

        return $this->wrapContent($detail);
    }

    public function listing()
    {
        $list = view('product/list');

        return $this->wrapContent($list);
    }

    protected function wrapContent($content)
    {
        $navigation = view('common/navigation');

        $layout = view('common/layout', [
            'navigation' => $navigation,
            'content' => $content
        ]);

        $html = view('common/html', [
            'content' => $layout
        ]);

        return $html;
    }
}
