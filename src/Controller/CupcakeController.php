<?php

namespace App\Controller;

use App\Service\Container;
use App\Model\CupcakeManager;

/**
 * Class CupcakeController
 *
 */
class CupcakeController extends AbstractController
{
    /**
     * Display cupcake creation page
     * Route /cupcake/add
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function add()
    {
        $succes = "";
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //TODO Add your code here to create a new cupcake
            $errors = [];
            $newCupcake = array_map('trim', $_POST);
            $this->checkCupcakeForm($newCupcake, $errors);
            if (empty($errors)) {
                (new CupcakeManager())->createCupcake($newCupcake);
                var_dump($succes);
                $succes = "Votre accéssoire a été créé";
                header('Location:/cupcake/list');
            }
        }
        //TODO retrieve all accessories for the select options
        return $this->twig->render('Cupcake/add.html.twig');
    }

    private function checkCupcakeForm(array $form, array &$errors): void
    {
        foreach ($form as $key => $value) {
            if (empty($value)) {
                $errors[] = "Le champ " . $key . " n'est pas renseigné";
                var_dump($errors);
            }
        }
    }

    /**
     * Display list of cupcakes
     * Route /cupcake/list
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function list()
    {
        //TODO Retrieve all cupcakes
        return $this->twig->render('Cupcake/list.html.twig');
    }
}
