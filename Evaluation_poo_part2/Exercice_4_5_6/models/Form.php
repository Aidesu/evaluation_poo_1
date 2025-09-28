<?php

class Form {

    protected string $formTitle;
    protected string $form;

    public function __construct($formTitle , $input1 = "Name", $input2 = "Email") {
        $this->formTitle = $formTitle;
        $this->form = "
        <form action='' method='post'>
        <fieldset>
        <h2>{$this->formTitle}</h2>
        {$this->setText($input1, $input2)}
        {$this->setSubmit()}
        </fieldset>
        </form>";
    }

    protected function setText($input1, $input2) {
        return "<label for='input1'>{$input1} : </label>
            <input type='text' name='input1' placeholder='Enter your name here'>
            <label for='input2'>{$input2} : </label>
            <input type='text' name='input2'>";
    }

    protected function setSubmit() {
        return "
        <button type='submit'>Submit</button>
        ";
    }
    
    public function getForm() {
        return $this->form;
    }
}
