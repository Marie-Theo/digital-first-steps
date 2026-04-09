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
    if ($_POST['response'] == $Question[$id]->getArrayRightAnswer()){
        $alert = ['alert-success','La réponse est correct.'];
    } else {
        $alert = ['alert-danger','La réponse est fausse!'];
        $id=$id-1;
    }
} else {
    $alert = ['alert-info','Bienvenu sur le Quiz'];
}

if ($id+1 <= count($Question)){
    $id=$id+1;
}

if (isset($Question[$id])){

    if (count($Question[$id]->getRigthAnswer()) == 1){
        $typeQuestion = 'radio';
    } else {
        $typeQuestion = 'checkbox';
    }
    
    echo $twig->render('index.html.twig',
        ['software_name' => 'Digitak First Steps',
        'Question'=>$Question[$id],
        'alert'=>$alert,
        'typeQuestion'=>$typeQuestion
        ]
    );
} else {
    echo '<br>fin du Question';
}