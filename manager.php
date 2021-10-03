<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <link rel="icon" href="images/favicon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Транспортная компания "AGROVERA" - грузовые перевозки, транспортные услуги, достака грузов</title>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
  <link rel="stylesheet" href="css/style.css">
  <meta name="keywords" content="транспортные услуги, грузоперевозки, грузовые перевозки, доставка грузов, транспортировка груза">
  <meta name="description" content="Компания «АГРОВЕРА» оказывает транспортные услуги во всех регионах России и осуществляет доставку грузов, не привлекая посредников!">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/scripts.js"></script>
  <script src="js/jquery.min.js" type="text/javascript"></script>
</head>
<body>


  <section>

<div class="containert">
         <div class="row">
            <div class="col-md-4 offset-md-4 mail-form">
               <h2 class="text-center">
                 Обратный Звонок
               </h2>
               <p class="text-center">
                  Введите свое имя и телефонный номер.
               </p>
               <!-- starting php code -->
               <?php
                  //first we leave this input field blank
                  $recipient = "";
                  //if user click the send button
                  if(isset($_POST['send'])){
                      //access user entered data
                     $recipient = $_POST['email'];
                     $subject = $_POST['subject'];
                     $message = $_POST['message'];
                     $sender = "From: shahiprem7890@gmail.com";
                     //if user leave empty field among one of them
                     if(empty($recipient) || empty($subject) || empty($message)){
                         ?>
               <!-- display an alert message if one of them field is empty -->
               <div class="alert alert-danger text-center">
                  <?php echo "All inputs are required!" ?>
               </div>
               <?php
                  }else{
                      // PHP function to send mail
                     if(mail($recipient, $subject, $message, $sender)){
                      ?>
               <!-- display a success message if once mail sent sucessfully -->
               <div class="alert alert-success text-center">
                  <?php echo "Ваше сообщение было отправлено на почту $recipient"?>
               </div>
               <?php
                  $recipient = "vovab1544@gmail.com";
                  }else{
                   ?>
               <!-- display an alert message if somehow mail can't be sent -->
               <div class="alert alert-danger text-center">
                  <?php echo "Что-то пошло не так. Повторите попытку!" ?>
               </div>
               <?php
                  }
                  }
                  }
                  ?> <!-- end of php code -->
               <form action="manager.php" method="POST">
                  <div class="form-group">
                     <input class="form-control" name="email" type="email" placeholder="Почта Agrovera" value="<?php echo $recipient ?>">
                  </div>
                  <div class="form-group">
                     <input class="form-control" name="subject" type="text" placeholder="Имя">
                  </div>
				  <div class="form-group">
                     <input class="form-control" name="message" type="text" placeholder="Телефон">
                  </div>
                  <div class="form-group">    
                  </div>
                  <div class="form-group">
                     <input class="form-control button btn-primary" type="submit" name="send" value="Отправить данные" placeholder="Subject">
                  </div>
               </form>

         </div>
      </div>
	</div>
  </section>


</body>
</html>