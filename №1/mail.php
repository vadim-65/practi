<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251"/>
    <title> Ваше сообщение успешно отправлено</title>
</head> 
<body>
<?php
   $back="<p><a href=\"javascript:history.back()\">Вернуться назад</a></p>";
   if(!empty($_POST['name']) and !empty($_POST['mail']) and !empty($_POST['message']) and !empty($_POST['image'])){
    $name=trim(strip_tags($_POST['name']));
    $mail=trim(strip_tags($_POST['mail']));
    $message=trim(strip_tags($_POST['message']));
    $image=trim(strip_tags($_POST['image']));

    mail('vadimlukasenkov7@gmail.com','http://localhost/practic/index.php','Вам написал'.$name.'<br/>Его почта:'.$mail.'<br/>Его сообщение:'.$message.'<br/>Прикрепленный файл:'.$image,"Content-type:text/html;charset=windows-1251");

    
    echo"Ваше сообщение успешно отправлено!<Br>Вы получите ответ в ближайшее время<Br>$back";

    exit;
   }
   else{
    echo"для отправки сообщения заполните все поля!$back";
    
    exit;
   }

?>
</body>
</html>



   
    
   