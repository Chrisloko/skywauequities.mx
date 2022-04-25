<?php

$name = $_POST['name'];
$email = $_POST['email'];
$dropdown = $_POST['dropdown'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "rodrigo.amansala@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader, $dropdown) or die("Error!");
echo "Thank You! $recipient";
?>

<?php
// function getRecipient($dropdown){
//     switch ($dropdown) {
//         case "Proveedores":
//             return "rodrigo.amansala@gmail.com";
//             break;
//         case "Venta de terrenos":
//             return "rodrigocesarc@hotmail.com";
//             break;
//         case "Venta de propiedades":
//             return "rodrigo@ssinvent.com";
//             break;
//         case "Recursos Humanos":
//             return "i es igual a 0";
//             break;
//         case "Otro":
//             return "i es igual a 0";
//             break;
//             default: return "rodrigocesarc@homail.com";
//     }
// }
// $name = $_POST['name'];
// $email = $_POST['email'];
// $dropdown = $_POST['dropdown'];
// $message = $_POST['message'];
// $formcontent="From: $name \n Message: $message";
// $recipient = "getRecipient($dropdown)";
// $subject = "Contact Form";
// $mailheader = "From: $email \r\n";
// mail($recipient, $subject, $formcontent, $mailheader, $dropdown) or die("Error!");
// echo "Thank You! $recipient";
?>

