<?php
declare(strict_types=1);

namespace core;

class Controller
{
    // Stockage des données envoyées aux vues
    private array $_viewData = [];

    // Layout utilisé pour l'affichage global
    private string $_layout = 'default';

    // Affiche une vue + injecte les données + applique le layout
    protected function renderView(string $name): void
    {
        // Chemin vers la vue demandée
        $viewPath = ROOT.SEP.'app'.SEP.'views'.SEP
                  . str_replace('/', SEP, $name).'.php';

        if (!file_exists($viewPath)) {
            Error::printMessage("Vue introuvable : $name");
        }

        // Rend les variables accessibles dans la vue
        extract($this->_viewData);

        // Capture du contenu de la vue
        ob_start();
        require $viewPath;
        $content = ob_get_clean(); // contenu injecté dans le layout

        // Chemin du layout principal
        $layoutPath = ROOT.SEP.'app'.SEP.'views'.SEP.'layouts'.SEP.$this->_layout.'.php';

        if (!file_exists($layoutPath)) {
            Error::printMessage("Gabarit introuvable : {$this->_layout}");
        }

        // Affichage final avec layout
        require $layoutPath;
    }

    // Charge un modèle
    protected function getModel(string $name): mixed
    {
        $modelClass = ucfirst($name).'Model';
        $modelPath  = ROOT.SEP.'app'.SEP.'models'.SEP.$modelClass.'.php';

        if (!file_exists($modelPath)) {
            Error::printMessage("Modèle introuvable : $modelClass");
        }

        require $modelPath;

        $qualifiedName = '\app\\'.$modelClass;
        return new $qualifiedName();
    }

    // Injecte une variable vers la vue
    protected function injectData(string $key, mixed $value): void
    {
        $this->_viewData[$key] = $value;
    }

    // Change le layout global
    protected function setLayout(string $name): void
    {
        $this->_layout = $name;
    }
}