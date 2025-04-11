<?php
// BACKEND VALIDATIE
$errors = [];

$name = strip_tags(trim($_POST['name']));
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
$address = strip_tags(trim($_POST['address']));
$city = strip_tags(trim($_POST['city']));
$postcode = strip_tags(trim($_POST['postcode']));
$country = strip_tags(trim($_POST['country']));

// Valideer velden
if (empty($name)) {
    $errors['name'] = 'Naam is verplicht.';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Ongeldig e-mailadres.';
}

if (empty($address)) {
    $errors['address'] = 'Adres is verplicht.';
}

if (empty($city)) {
    $errors['city'] = 'Plaats is verplicht.';
}

if (empty($postcode)) {
    $errors['postcode'] = 'Postcode is verplicht.';
}

if (empty($country)) {
    $errors['country'] = 'Land is verplicht.';
}

// Als alles goed is, toon verwerk_view
if (empty($errors)) {
    include 'verwerk_view.php';
} else {
    include 'index_view.php';
}
?>
