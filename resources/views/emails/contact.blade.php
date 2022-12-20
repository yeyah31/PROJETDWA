<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>Assistancia a votre service</h2>
    <p>Bonjour :</p>
    <ul>
      <li><strong>Nom</strong> : {{ $connexions['nom'] }}</li>
      <li><strong>Email</strong> : {{ $connexions['email'] }}</li>
      <li><strong>Message</strong> : Votre demande a ete{{ $connexions['status'] }}</li>
    </ul>
  </body>
</html>
