<?php
if (!empty($_POST) && isset($_POST['button-form'])) {

    $errors = [];

    $lastname = trim($_POST['user_lastname']);
    $firstname = trim($_POST['user_firstname']);
    $email = trim($_POST['user_email']);
    $phone = trim($_POST['user_phone']);
    $subject = trim($_POST['user_subject']);
    $message = trim($_POST['user_message']);

    if (empty($lastname))
        $errors['user_lastname'] = 'Nom requis';
    if (empty($firstname))
        $errors['user_firstname'] = 'Prénom requis';
    if (empty($email))
        $errors['user_email'] = 'Courriel requis';
    if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL))
        $errors['user_email'] = 'Courriel non valide';
    if (empty($phone))
        $errors['user_phone'] = 'Numéro de téléphone requis';
    if (empty($subject))
        $errors['user_subject'] = 'Sujet requis';
    if (empty($message))
        $errors['user_message'] = 'Message requis';
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Simuler une prise de contact - Challenge</title>
</head>
<body>
<?php if (isset($errors['user_lastname'])): ?>
    <p style="color:red;"><?= $errors['user_lastname'] ?></p>
<?php endif; ?>
<?php if (isset($errors['user_firstname'])): ?>
    <p style="color:red;"><?= $errors['user_firstname'] ?></p>
<?php endif; ?>
<?php if (isset($errors['user_email'])): ?>
    <p style="color:red;"><?= $errors['user_email'] ?></p>
<?php endif; ?>
<?php if (isset($errors['user_phone'])): ?>
    <p style="color:red;"><?= $errors['user_phone'] ?></p>
<?php endif; ?>
<?php if (isset($errors['user_subject'])): ?>
    <p style="color:red;"><?= $errors['user_subject'] ?></p>
<?php endif; ?>
<?php if (isset($errors['user_message'])): ?>
    <p style="color:red;"><?= $errors['user_message'] ?></p>
<?php endif; ?>

<p>Merci <?= $_POST['user_firstname']; ?> <?= $_POST['user_lastname']; ?> de nous avoir contacté à propos de “<?= $_POST['user_subject']; ?>”.</p>
<p>Un de nos conseiller vous contactera soit à l’adresse <?= $_POST['user_email']; ?> ou par téléphone au <?= $_POST['user_phone']; ?> dans les plus brefs délais pour traiter votre demande :</p>
<p><?= $_POST['user_message']; ?></p>

</body>
</html>