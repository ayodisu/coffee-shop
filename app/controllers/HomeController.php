<?php

class HomeController extends Controller
{
    public function index()
    {
        $productModel = $this->model('Product');
        $reviewModel = $this->model('Review');

        $products = $productModel->getProductsByType('drink');
        $reviews = $reviewModel->getAllReviews();

        $data = [
            'products' => $products,
            'reviews' => $reviews
        ];

        $this->view('home/index', $data);
    }

    public function about()
    {
        $reviewModel = $this->model('Review');
        $reviews = $reviewModel->getAllReviews();

        $data = [
            'reviews' => $reviews
        ];

        $this->view('home/about', $data);
    }

    public function menu()
    {
        $productModel = $this->model('Product');
        $desserts = $productModel->getProductsByType('dessert');
        $drinks = $productModel->getProductsByType('drink');

        $data = [
            'desserts' => $desserts,
            'drinks' => $drinks
        ];

        $this->view('home/menu', $data);
    }

    public function services()
    {
        $this->view('home/services');
    }

    public function contact()
    {
        $this->view('home/contact');
    }
}
