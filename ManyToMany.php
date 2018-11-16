<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>La relation Many To Many</title>
  <meta name="description" content="Fiche sur symfony 3.4 ">
  <meta name="author" content="ChrisCo31">
</head>
<body>
  <h2>Many To Many ou n..n </h2>
    </br>
    <p>C'est la relation qui permet a plein d'objets d'être en relations avec pliens d'autres.</p>
    <p>Par exemple, les objets medias pourront être relié à plusieurs themes differents. Et a l'inverse, plusieurs themes pourront correspondre à des medais</p>
    <p> Doctrine va devoir créer une table intermediaire qui va faire la liaison entre les deux. Cette table media_theme ne contiendra que deux colonnes : media_id et theme_id</p>
    <p> Qui mettre en proprietaire ? les deux sont possible mais ils emble plus judicieux de mettre media en proprietaire. Du coup on aura un attribut $themes (avec un 'S')qui contient une liste d'objets.
     UnArrayCollectionest un objet utilisé par Doctrine2, qui a toutes les propriétés d'un tableau normal.
     Vous pouvez faire un foreach dessus, et le traiter comme n'importe quel tableau. Il dispose juste de quelques méthodes supplémentaires </p>

    <h2>Many To Many avec attributs </h2>
    <p>Si la relation sans attributs suffit souvent, elle peut parfois etre incomplete.</p>
</body>
</html>
