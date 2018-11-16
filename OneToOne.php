<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>La relation One To One</title>
  <meta name="description" content="Fiche sur symfony 3.4 ">
  <meta name="author" content="ChrisCo31">
</head>
<body>
  <h2> One To One ou 1..1 </h2>
    </br>
    <p> Elle correspond à une relation unique entre deux objets </p>
    <p> Elle correspond à la relation entre notre entite Media et notre entite Picture </p>
    <p> A chaque media ne correspond qu'une image et une seule et chaque image ne correspond qu'a un seul media</p>
    <p> Dans l'entite Media il y aura un attribut $image (+getter et setter) puisqu'elle e est l'entite proprietaire. Dans l'entite 'image', il n'y a rien puisque nous sommes en présence d'une relation unidirectionnelle
    (ie on peut faire => $media->getImage() mais pas $image->getMedia). Il est à note que dans le cadre de la relation Media/entite, nous devrons mettre en place une relations bidirectionnelles puisqu'il
    devra être possible de faire $media->getTag() comme $tag->getMedia(). De même le cascade devra être adapté</p>

</body>
</html>
