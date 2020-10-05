<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Simuler une prise de contact - Challenge</title>
</head>
<body>
    <form  action="thanks.php"  method="post">
        <div>
            <label  for="nom">Nom :</label>
            <input  type="text"  id="nom"  name="user_lastname">
        </div>
        <div>
            <label  for="prenom">Prénom :</label>
            <input  type="text"  id="prenom"  name="user_firstname">
        </div>
        <div>
            <label  for="courriel">Courriel :</label>
            <input  type="email"  id="courriel"  name="user_email">
        </div>
        <div>
            <label  for="phone_number">Tél. :</label>
            <input  type="tel"  id="phone_number"  name="user_phone">
        </div>
        <div>
            <label  for="sujet">Sujet :</label>
            <select id="sujet" name="user_subject">
                <option value="sujet1">Sujet 1</option>
                <option value="sujet2">Sujet 2</option>
                <option value="sujet3">Sujet 3</option>
            </select>
        </div>
        <div>
            <label  for="message">Message :</label>
            <textarea  id="message"  name="user_message"></textarea>
        </div>
        <div  class="button">
            <button  type="submit">Envoyer votre message</button>
        </div>
    </form>
</body>
</html>
