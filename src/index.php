<?php

namespace App;

use App\Entity\Question;

require_once __DIR__ . '/../vendor/autoload.php';

$template_fir = __DIR__ . '/templates';
$loader = new \Twig\Loader\FilesystemLoader($template_fir);
$twig = new \Twig\Environment($loader);

$Question = ["1"=>new Question(
    "Qu'est ce qu'un bon mot de passe ?",
    ['123456','password','azerty','admin','F5f{@rEv#x]_yU-W'],
    [4],
    'Un mot de passe long et complexe avec des lettre, des chiffres et des caractère spécial'
),"2"=>new Question(
    "Questionnaire 2",
    ['123456','password','azerty','admin','F5f{@rEv#x]_yU-W'],
    [4,2],
    'Un mot de passe long et complexe avec des lettre, des chiffres et des caractère spécial'
)];


$id = $_POST['id'] ?? 0;


if (isset($_POST['response']) && $id!=0 ){
    foreach($_POST['response'] as $reponse){
        echo $_POST['response'];
        echo '<br>';
        var_dump($_POST['response']);
        echo '<br>';
        echo $Question[$id]->getArrayRightAnswer();
        echo '<br>';
        var_dump($Question[$id]->getArrayRightAnswer());
        echo '<br>';
        echo '<br>';
        if ($Question[$id]->getArrayRightAnswer() == $_POST['response']){
            $alert = $_POST['response'];
        }
        // $Question[$id];
    }
    // $alert = $_POST['response'];
} else {
    $alert = [];
}


$id=$id+1;
if (isset($Question[$id])){
    
    echo $twig->render('index.html.twig',
        ['software_name' => 'Premier Pas Numérique',
        'Question'=>$Question[$id],
        'alert'=>$alert,
        'typeQuestion'=>'checkbox'
        // 'typeQuestion'=>'radio'
        ]
    );
} else {
    echo '<br>fin du Question';
}