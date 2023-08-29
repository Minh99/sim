<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class NewsController extends Controller
{
    public function news(Request $request, string $slug)
    {
        $viewPath = "layouts.news.$slug";

        if (view()->exists($viewPath)) {
            return view($viewPath);
        } else {
            throw new NotFoundHttpException();
        }
    }

    public function simNews(Request $request, string $slug)
    {
        $viewPath = "layouts.sim-news.$slug";

        if (view()->exists($viewPath)) {
            return view($viewPath);
        } else {
            throw new NotFoundHttpException();
        }
    }
}
