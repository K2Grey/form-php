<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Simuler une prise de contact - Challenge</title>
</head>
<body>
<p>Merci <?=$_POST['user_firstname']?> <?=$_POST['user_lastname']?> de nous avoir contacté à propos de “<?=$_POST['user_subject']?>”.</p>
<p>Un de nos conseiller vous contactera soit à l’adresse <?=$_POST['user_email']?> ou par téléphone au <?=$_POST['user_phone']?> dans les plus brefs délais pour traiter votre demande :</p>
<p><?=$_POST['user_message']?></p>
</body>
</html>
