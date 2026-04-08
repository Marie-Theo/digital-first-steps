<?php

namespace App;

use App\Entity\Quiz;

require_once __DIR__ . '/../vendor/autoload.php';

$template_fir = __DIR__ . '/templates';
$loader = new \Twig\Loader\FilesystemLoader($template_fir);
$twig = new \Twig\Environment($loader);

$Quiz = ["1"=>new Quiz(
    "Qu'est ce qu'un bon mot de passe ?",
    ['123456','password','azerty','admin','F5f{@rEv#x]_yU-W'],
    [4],
    'Un mot de passe long et complexe avec des lettre, des chiffres et des caractère spécial'
),"2"=>new Quiz(
    "Questionnaire 2",
    ['123456','password','azerty','admin','F5f{@rEv#x]_yU-W'],
    [4],
    'Un mot de passe long et complexe avec des lettre, des chiffres et des caractère spécial'
)];


$id = $_POST['id'] ?? 0;


if (isset($_POST['response']) && $id!=0 ){
    foreach($_POST['response'] as $reponse){
        echo $reponse,$Quiz[$id]->getArrayRightAnswer();//$Quiz[$id]->isRight($reponse),'<br>';
        // $Quiz[$id];
    }
    $alert = $_POST['response'];
} else {
    $alert = [];
}


$id=$id+1;
if (isset($Quiz[$id])){
    
    echo $twig->render('index.html.twig',
        ['software_name' => 'Premier Pas Numérique',
        'Quiz'=>$Quiz[$id],
        'alert'=>$alert,
        'typeQuestion'=>'checkbox'
        // 'typeQuestion'=>'radio'
        ]
    );
} else {
    echo '<br>fin du Quiz';
}