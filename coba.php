<?php
    declare(strict_types = 1);
    namespace App\Controller;
    use App\View;
    class HomeController
    {
        public function index(): View
        {
            phpinfo();
            return View::make('index');
        }
    }
?>