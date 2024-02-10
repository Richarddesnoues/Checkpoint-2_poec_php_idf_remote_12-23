<?php

namespace App\Controller;

use App\Model\AccessoryManager;

/**
 * Class AccessoryController
 *
 */
class AccessoryController extends AbstractController
{
    /**
     * Display accessory creation page
     * Route /accessory/add
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function add()
    {
        $succes = "";
        if ($_SERVER["REQUEST_METHOD"] === 'POST') {
            $errors = [];
            $newAccessory = array_map('trim', $_POST);
            $this->checkAccessoryForm($newAccessory, $errors);
            if (empty($errors)) {
                (new AccessoryManager())->createAccessory($newAccessory);
                var_dump($succes);
                header('Location:/accessory/add');
                $succes = "Votre accéssoire a été créé";
            }
        }

        return $this->twig->render('Accessory/add.html.twig', [
            'errors' => $errors ?? null,
            'post' => $_POST,
            'succes' => $succes,
        ]);
    }

    private function checkAccessoryForm(array $form, array &$errors): void
    {
        foreach ($form as $key => $value) {
            if (empty($value)) {
                $errors[] = "Le champ " . $key . " n'est pas renseigné";
                var_dump($errors);
            }
        }
    }

    /**
     * Display list of accessories
     * Route /accessory/list
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function list()
    {
        //TODO Add your code here to retrieve all accessories
        $accessoryManager = new accessoryManager();
        $accessories = $accessoryManager->selectAll('name');
        return $this->twig->render('Accessory/list.html.twig', ['accessories' => $accessories]);
    }
}
