<?php 
session_start();
session_destroy();

header("Location: indexnew.php");


// if (isset($_SESSION['student'])) {
// 	unset($_SESSION['student']);
// 	header("Location:indexnew.php");
// }else if(isset($_SESSION['teacher'])){
// 	unset($_SESSION['teacher']);
// 	header("Location:indexnew.php");
// }else if(isset($_SESSION['admin'])){
// 	unset($_SESSION['admin']);
// 	header("Location:indexnew.php");
// }else if(isset($_SESSION['office'])){
// 	unset($_SESSION['office']);
// 	header("Location:indexnew.php");
// }else if(isset($_SESSION['cafeteria'])){
// 	unset($_SESSION['cafeteria']);
// 	header("Location:indexnew.php");
// }else if(isset($_SESSION['library'])){
// 	unset($_SESSION['library']);
// 	header("Location:indexnew.php");
// }



 ?>