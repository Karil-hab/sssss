<?php 
  $con = mysqli_connect("127.0.0.1","root","","dodopica") ;
  $content = mysqli_query($con,"SELECT * FROM tovar WHERE id='{$_GET['id_pica']}'");
  $cotant_tr=$content->fetch_assoc();

  $ins = "INSERT INTO trash (name,Описание,img,цена) VALUES ('{$cotant_tr['name']}','{$cotant_tr['Описание']}','{$cotant_tr['img']}','{$cotant_tr['цена']}')";
  $content_trash = mysqli_query($con,$ins);

	
header('Location:index.php');	

