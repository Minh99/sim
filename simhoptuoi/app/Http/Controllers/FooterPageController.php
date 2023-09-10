<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class FooterPageController extends Controller
{
    public function buyAndPayment()
    {
        $viewPath = "layouts.footer_pages.mua-hang-va-thanh-toan";

        if (view()->exists($viewPath)) {
            return view($viewPath);
        } else {
            throw new NotFoundHttpException();
        }
    }

    public function deliveryPolicy()
    {
        $viewPath = "layouts.footer_pages.chinh-sach-van-chuyen";

        if (view()->exists($viewPath)) {
            return view($viewPath);
        } else {
            throw new NotFoundHttpException();
        }
    }

    public function returnPolicy()
    {
        $viewPath = "layouts.footer_pages.chinh-sach-doi-tra";

        if (view()->exists($viewPath)) {
            return view($viewPath);
        } else {
            throw new NotFoundHttpException();
        }
    }

    public function warrantyPolicy()
    {
        $viewPath = "layouts.footer_pages.chinh-sach-bao-hanh";

        if (view()->exists($viewPath)) {
            return view($viewPath);
        } else {
            throw new NotFoundHttpException();
        }
    }

    public function securityPolicy()
    {
        $viewPath = "layouts.footer_pages.chinh-sach-bao-mat";

        if (view()->exists($viewPath)) {
            return view($viewPath);
        } else {
            throw new NotFoundHttpException();
        }
    }

    public function termsAndCondition()
    {
        $viewPath = "layouts.footer_pages.dieu-khoan-va-dieu-kien";

        if (view()->exists($viewPath)) {
            return view($viewPath);
        } else {
            throw new NotFoundHttpException();
        }
    }
}
