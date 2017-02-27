<?php
  require('Tools.php');
  require('Form.php');
  /*foo must be used in the form -->$var = new foo\filename();<--*/
  #$tools = new foo\Tools('books.json');
  $form = new foo\Form($_GET);# _GET makes the form available in the Form class
  $answer = $form->get('chk', '');#get pulls a value from the form

  $errors = [];
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
