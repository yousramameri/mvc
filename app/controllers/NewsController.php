<?php
declare(strict_types=1);
namespace app;
use core\Controller;

class NewsController extends Controller
{
    public function allnews(): void
    {
        $model = $this->getModel('news');
        $news  = $model->getAllNewsFromDb();
        $GLOBALS['news'] = $news;
        $this->injectData('news', $news);
        $this->renderView('news/allnews');
    }
}