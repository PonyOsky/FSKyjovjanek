<?php
$name = strip_tags(trim ($_POST["name"]));
$name = str_replace(array("\r","\n"),array(" "," "),$name);
$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
$message = trim(trim($_POST["message"]));

 /* Doplnit odkaz*/
if (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: http://localhost/projekty/jobs/FSKyjovj%C3%A1nek/kontakty.html?success=-1#form");
    exit;
}

/* Doplnit Švorbu*/
$recipient = "ondrejdudak007@gmail.com";
$subject = "Email z webu od: $name";
$email_content = "Jméno a příjmení: $name\n";
$email_content .= "Email: $email\n\n";
$email_content .= "Obsah: \n$message\n";
$email_headers = "Form: $name <$email>";
mail($recipient, $subject, $email_content, $email_headers);
header("Location: http://localhost/projekty/jobs/FSKyjovj%C3%A1nek/kontakty.html?success=1#form");
?>