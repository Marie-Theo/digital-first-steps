<?php

namespace App\Entity;

use Doctrine\DBAL\Schema\Table;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;

#[Entity]
#[Table(name: 'tbl_quiz')]
class Quiz {

    private static $Key = 1;
    #[Id]
    #[GeneratedValue]
    #[Column(type: 'integer')]
    private $id;
    #[Column(type: 'string')]
    private $question;
    #[Column(type: 'array')]
    private $options;
    #[Column(type: 'string')]
    private $rigthAnswer;
    #[Column(type: 'string')]
    private $correcitionOption;

    public function __construct($question, $options, $rigth, $correcitionOption) {
        $this->id = self::$Key;
        $this->question = $question;
        $this->rigthAnswer = $rigth;
        $this->options = $options;
        $this->correcitionOption = $correcitionOption;
        self::$Key++;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of question
     */ 
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set the value of question
     *
     * @return  self
     */ 
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get the value of options
     */ 
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Set the value of options
     *
     * @return  self
     */ 
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * Get the value of rigthAnswer
     */ 
    public function getRigthAnswer()
    {
        return $this->rigthAnswer;
    }

    /**
     * Set the value of rigthAnswer
     *
     * @return  self
     */ 
    public function setRigthAnswer($rigthAnswer)
    {
        $this->rigthAnswer = $rigthAnswer;

        return $this;
    }

    /**
     * Get the value of correcitionOption
     */ 
    public function getCorrecitionOption()
    {
        return $this->correcitionOption;
    }

    /**
     * Set the value of correcitionOption
     *
     * @return  self
     */ 
    public function setCorrecitionOption($correcitionOption)
    {
        $this->correcitionOption = $correcitionOption;

        return $this;
    }

    public function isRight($value){
        return in_array($value, $this->getArrayRightAnswer());
    }

    public function getArrayRightAnswer() {
        $RightAnswer = [];
        $option=$this->getOptions();
        foreach($this->rigthAnswer as $Answer){
            $RightAnswer.=$option[$Answer];
        }
        return $RightAnswer;
    }
}