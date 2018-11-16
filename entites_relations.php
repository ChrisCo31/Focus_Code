<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Generalites sur les relations entre entites</title>
  <meta name="description" content="Fiche sur symfony 3.4 ">
  <meta name="author" content="ChrisCo31">
</head>
<body>
  <h2> Présentation </h2>
    </br>
    <p> Il y a plusieurs façons de lier des entités entre elles.</p>
      <ul>
        <li> One to One </li>
        <li> Many to One </li>
        <li> Many to Many </li>
      </ul>
    </br>
    <p> Dans une relation entre entites, il y a toujours une entite dite proprietaire et une dite inverse. L'entite proprietaire est celle qui contient la reference à l'autre entité.</br>
    C'est une notion purement technique.</p>
    <p> Une relation peut être à sens unique (unidirectionnelles) ou à double sens (bidirectionnelles). </p>
    </br>
    <p>Cela signifie que vous pourrez faire <B>$entiteProprietaire->getEntiteInverse() </B>, mais vous ne pourrez pas faire <B>$entiteInverse->getEntiteProprietaire()</B>.
     Attention, cela ne nous empêchera pas de récupérer les commentaires d'un article, on utilisera juste une autre méthode, via l'EntityRepository.

    Cette limitation nous permet de simplifier la façon de définir les relations. Pour bien travailler avec, il suffit juste de se rappeler qu'on ne peut pas faire $entiteInverse->getEntiteProprietaire().</p>
    <p> exemple : Dans mon site, j'ai une table media et une table selector. La table  Selector contient la colonne de la liaison media_id. Elle est donc proprietaire de la relation.</p>
    <p> Reprenons les differentes entites de notre site </p>
    </br>
    <ul>
      <li> Article, qui contient les articles d'une revue </li>
      <li> Media qui contient les differents medias repertories sur le site </li>
      <li> Picture qui contient les images utilisées sur le site</li>
      <li> Selector qui contient les selecteurs css de chaque revue afin de pouvoir la scraper </li>
      <li> Theme qui contient une liste de tags thematiques</li>
    </ul>
  <h2> Les relations de mes entites </h2>
    </br>
    <h3> La relation Media / Article </h3>
    </br>
    <p> c'est une relation <B> OneToMany </B> : un media a plusieurs articles, mais un article n'est pas rattache à plusieurs medias </p>
    <p> L'entite proprietaire de la relation est l'entite<B> Article</B> puisqu'elle contient la colonne media_id </p>
    </br>
    <h3> La relation Media / Picture </h3>
    <p> c'est une relation <B> OneToOne </B>: un media a une image et une seule et à chaque image correspond un media</p>
    <p> L'entite proprietaire de la relation est <B> l'entite Media</B> puisqu'elle contient la colonne picture_id </p>
    </br>
    <h3> La relation Media / Selector </h3>
    <p> c'est une relation <B> OneToMany </B> : un media a plusieurs selecteurs</p>
    <p> L'entite proprietaire de la relation est l'entite<B> Selector</B> puisqu'elle contient la colonne media_id </p>
    </br>
    <h3> La relation Article / Theme </h3>
    <p> c'est une relation <B> ManyToMany </B>: un media a plusieurs tags et chaque tag peut correspondre à plusieurs medias</p>
    </br>
    <h3> La relation Article / Picture </h3>
    <h3> La relation Article / Theme </h3>

    <h2> Definitions </h2>
      <h3> ORM </h3>
      <h3> Lazy Loading</h3>
</body>
</html>
