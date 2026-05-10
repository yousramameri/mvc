<?php
declare(strict_types=1);
namespace app;  // ✅ vérifier que c'est bien app
use core\Controller;

class PageController extends Controller
{
    public function index(): void
    {
        $this->renderView("page/home");
    }

    public function show(): void
    {
        $this->injectData("h1_title", "Comment dire...");
        $this->renderView("page/other");
    }
}