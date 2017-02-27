<?php
  require('Tools.php');
  require('Form.php');
  require('myClass.php');
  /*foo must be used in the form -->$var = new foo\filename();<--*/
  $form = new foo\Form($_GET);# _GET makes the form available in the Form class
  $classContainer = new myClass();

  $errors = [];;
  if($form->isSubmitted()) {

      # array to be sent to validate function
      $errors = $form->validate([

              'email' => 'required',
              'password' => 'required'

          ]);
          if(!$errors)
          {
            header('Location: site.php');
          }

  }
  # myClass return string
  $string = "Correct!"; # to return this the return var must match inside function
  $functionReturn = ($classContainer->myFunction($string));
