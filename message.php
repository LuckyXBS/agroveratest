<?php
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['where']);
  $website = htmlspecialchars($_POST['whom']);
  $volume = htmlspecialchars($_POST['volume']);
  $message = htmlspecialchars($_POST['message']);

  if(!empty($email) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $receiver = "vovab1544@gmail.com"; //enter that email address where you want to receive all messages
      $subject = "From: $name <$email>";
      $body = "Имя: $name\nПочта: $email\nОткуда: $phone\nКому:  $website\nОбъем: $volume\nИнформация: \n$message\n\nС Уважением,\n$name";
      $sender = "From: $email";
      if(mail($receiver, $subject, $body, $sender)){
         echo "Ваше сообщение было отправлено!";
      }else{
         echo "Извините, не удалось отправить сообщение!";
      }
    }else{
      echo "Введите корректный электронный адрес!";
    }
  }else{
    echo "Электронная почта и поле с информацией являются обязательными!";
  }
?>
