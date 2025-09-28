<?php

include_once (__DIR__."/Form.php");

class Form2 extends Form {

    public function __construct($formTitle = "Formulaire", $input1 = "Name", $input2 = "Email", $choice1 = "Python", $choice2 = "C", $choice3 = "C#", $choice4 = "PHP") {
        parent::__construct($formTitle);

        $this->form = "
        <form action='' method='post'>
        <fieldset>
        <h2>{$this->formTitle}</h2>
        {$this->setText($input1, $input2)}
        {$this->setRadio($choice1, $choice2, $choice3, $choice4)}
        {$this->setCheckbox()}
        {$this->setSubmit()}
        </fieldset>
        </form>";
    }

    private function setRadio($choice1, $choice2, $choice3, $choice4) {
        
        return "
<legend>Select your favorite</legend>
<ul>
    <li>
        <label for='choice1'>{$choice1}</label>
        <input type='radio' name='choice1'></li>
    <li>
        <label for='choice2'>{$choice2}</label>
        <input type='radio' name='choice2'>
    </li>
    <li>
        <label for='choice3'>{$choice3}</label>
        <input type='radio' name='choice3'>
    </li>
    <li>
        <label for='choice4'>{$choice4}</label>
        <input type='radio' name='choice4'>
    </li>
    </ul>";
    }

    private function setCheckbox() {
        return "
        <ul>
            <li>
                <label for='checkTerms'>Agree with terms and policy</label>
                <input type='checkbox' name='checkTerms'>
            </li>
            <li>
                <label for='checkEmail'>Receive email from us</label>
                <input type='checkbox' name='checkEmail'>
            </li>
        </ul>
        
    ";
    }
}

?>

