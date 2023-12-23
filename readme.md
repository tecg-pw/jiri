# Jiri

_Jiri_ est une application qui permet de tenir un jury. Par exemple, les cours de _Design Web_ du 2ème bloc et de _Projets Web_ du 3ème bloc du bachelier en infographie organisé à la Haute École de la Province de Liège se concluent par des jurys lors desquels les travaux des étudiants sont évalués par des externes.

## Le contexte

Chaque année, des intervenants externes sont invités à venir rencontrer les étudiants des cours de _Design Web_ et de _Projets Web_, et à leur donner par la même occasion un feedback sur leurs réalisations ainsi qu’une cote. 

Jusqu’à ce jour, la procédure habituelle a consisté à donner aux membres du jury des feuilles reprenant chacune le nom d’un étudiant, éventuellement son heure de passage, le nom du jury et la liste des réalisations, et à leur demander de noter, pour chaque réalisation, une cote et des commentaires. Ils notent également sur ces feuilles un commentaire global et une cote globale concernant le profil et le niveau de compétence de l’étudiant tel qu’ils l’ont perçu à travers les réalisations examinées. À la fin de la journée, à l’aide de ces notes, les membres du jury délibèrent pour obtenir un consensus sur les qualités des travaux de chaque étudiant et en tirer une cote finale.

Vous pouvez voir, en suivant les liens suivants, divers exemples des documents concernés, tels qu’utilisés cette année au jury de Design Web B2 de première session :

- [la feuille des ordres de passage à découper et à distribuer aux membres du jury et aux étudiants](https://docs.google.com/document/d/1prWdLEWeBah6CLL3XwAI4ohCylqM7SlbwvDnlsdnmgk/edit?usp=sharing) ;
- [la feuille de cotation remise à un membre du jury pour qu’il puisse évaluer les travaux d’un étudiant](https://docs.google.com/document/d/1m8Y-Yek-yei3goAIm5l9lqY0NftNhIKUmKXiiZU-3UI/edit?usp=sharing) ;
- [le dashboard final du professeur qui organise la séance, qui lui permet de voir toutes les cotes et lui calcule les moyennes](https://docs.google.com/spreadsheets/d/1_U417EZMub3Zr4WkLnUd8hqpu2v10bLzbVXx-Cf-RuM/edit?usp=sharing).

Afin de faciliter le processus d’encodage et de délibération de fin d’épreuve, nous passons commande d’une application utilisable le jour de l’examen par les membres du jury et par le professeur qui organise l’épreuve.

## Les rôles

Deux rôles sont à considérer dans l’utilisation de l’application : membre du jury classique et professeur responsable de l’épreuve. Voici les scénarios types que nous imaginons pour l’utilisation de l’application selon ces deux rôles.

### Le membre du jury classique

Au début de sa journée, le membre du jury s’installe à son poste. Il a normalement reçu un email contenant un lien. Ce lien lui permet d'accéder à l'application et de voir la liste des étudiants qui sont disponibles. Il rencontre les étudiants les uns après les autres et visite les différents projets de chacun.

Lorsqu’il est connecté, le membre du jury voit la liste des étudiants qui présentent leurs travaux. Quand un étudiant vient le voir pour lui présenter son travail, le membre du jury le choisit dans la liste. Il découvre alors la liste des travaux de l’étudiant. Après avoir choisi et regardé un travail, il peut remplir un formulaire constitué d’un champ pour la cote (peut contenir deux décimales, min. 0 et max. 20) et un champ de texte pour le commentaire. Le lien vers le travail et vers le repo du travail sont également affichés et utilisables pour visiter le travail ou son repo. En plus de mettre une cote pour chaque travail, le professeur est aussi invité à donner une appréciation globale de l’étudiant, basée sur l’impression générale que lui a laissée sa rencontre avec ce dernier.

Le membre du jury n’est pas obligé de remplir les deux champs en même temps, ce qui signifie que s’il réaffiche plus tard la page correspondant à un travail particulier d’un étudiant, il doit retrouver un formulaire pré-rempli avec ce qu’il y a déjà saisi.

### Le professeur responsable

Le professeur prépare le jury et acte sa délibération lorsqu’il est fini. Pendant le jury, il peut agir comme un membre du jury classique. L’interface lui propose donc les fonctions disponibles pour le membre du jury classique plus quelques autres. Par défaut, par contre, son interface lui affiche l’état actuel du jury (les cotes déjà attribuées par les membres du jury aux étudiants qu’ils ont vu), ce qui lui permet de monitorer l’avancement du jury (du push via websockets semble être la solution ici).

Lorsqu’il prépare un jury, le professeur doit tout d’abord créer une nouvelle épreuve. Identifier l’épreuve permettra à plusieurs professeurs de créer différentes épreuves au fil des années. Une épreuve se caractérise au minimum par le nom du jury et ses informations temporelles (date, durée).  

Quand il construit l’épreuve, le professeur doit ajouter des étudiants (avec une photo éventuelle) à celle-ci. L’ajout des étudiants doit être facilité par une auto-complétion si l’étudiant est déjà dans la base de données ou créer un nouvel étudiant si ce n’est pas le cas. 

Le professeur doit aussi ajouter des membres du jury à l’épreuve (nom, email, infos pour la connection, photo éventuelle), et cette création est assistée, comme pour les étudiants, par une auto-complétion si le membre du jury a déjà été ajouté lors d’une épreuve précédente, car certains membres du jury reviennent plusieurs années de suite. 

Quand des étudiants ont quitté l’école ou que certains membres de jury ne souhaitent plus participer à l’avenir, il serait peu pratique que la fonction d’auto-complétion continue de les proposer. Mais il serait aussi dommage de perdre la trace des épreuves passées. On gèrera donc un système d'archivage et aussi un système de consolidation de l'épreuve, ce qui signifie qu'une fois une épreuve finie, un document récapitulatif complet de celle-ci, figé, devra être produit. 

Le professeur doit aussi ajouter à l’épreuve les projets que doivent réaliser les étudiants avec une courte explication. Par défaut, tous les projets sont associés à tous les étudiants, mais le professeur peut en supprimer du programme d’un étudiant si un étudiant a une dispense partielle. S’il a les les urls du site et du repo, il les encode ainsi que la pondération éventuellement différente de la pondération par défaut, que peut avoir un travail particulier pour un étudiant particulier. 

#### Note pour le calcul de la cote finale d’un étudiant

Pour un étudiant donné, chaque jury encode une cote pour chaque travail qu'il a examiné ainsi qu’une cote d'évaluation globale. 

Les différents travaux peuvent _peser_ différemment dans le calcul de la cote finale d’un étudiant. Quand il ajoute un travail à une épreuve, le professeur doit donc pouvoir ajouter une pondération (`0.05` équivaut par exemple à un vingtième de la cote). Il n’encode pas explicitement la pondération de la cote d’évaluation globale, elle se calcule après avoir fait la somme des pondérations des autres projets. Attention, tous les étudiants ne sont pas concernés par les mêmes travaux. Il est donc possible, comme dit plus tôt, de mettre en relation pondération-étudiant-travail lors d’une session d’examen.

La cote finale de l’étudiant se calcule en deux étapes :

1. Pour chaque travail de l’étudiant, on fait la moyenne des cotes des membres du jury qui ont évalué ce travail. Idem pour l’évaluation globale. On obtient donc une cote moyenne pour le travail 1 (ex. __CV__), une cote moyenne pour le travail 2 (ex. __CSSZG__), etc. et une cote  moyenne pour l’évaluation globale (__EG__). Par exemple, s'il y a cinq travaux, __CV__, CSS Zen Garden (__CSSZG__), Artiste (__ART__), Portfolio (__PF__) et site pour client réel (__CR__), on aura :

    - __CV__ = (__CV__ du jury1 + __CV__ du jury3 + __CV__ du jury7) / 3
    - __CSSZG__ = (__CSSZG__ du jury1 + __CSSZG__ du jury2) / 2
    - __ART__ = (__ART__ du jury2 + __ART__ du jury3 + __ART__ du jury5 + __ART__ du jury6) / 4
    - __PF__ = (__PF__ du jury2 + __PF__ du jury3 + __PF__ du jury4 + __PF__ du jury6 + __PF__ du jury7) / 5
    - __CR__ =(__CR__ du jury1 + __CR__ du jury2 + __CR__ du jury4 + __CR__ du jury5 + __CR__ du jury6 + __CR__   du jury7) / 6
    - __EG__ = (__EG__ du jury1 + __EG__ du jury2 + __EG__ du jury3 + __EG__ du jury4 + __EG__ du jury5 + __EG__ du jury6 + __EG__ du jury7 ) / 7

2. La cote finale est la moyenne pondérée des cotes moyennes pour chaque travail. Par exemple, si on a décidé que le __CV__, __CSSZG__, __ART__ valaient chacun pour 2/20 des points, __PF__ pour 4/20 des points, __CR__ pour 6/20 des points, il reste 4/20 des points __EG__ et la cote finale sera calculée comme suit :
    
    - __COTE__ = 0.1 * __CV__ + 0.1 * __CSSZG__ + 0.1 * __ART__ + 0.2 * __PF__ + 0.3 * __CR__ + 0.2 * __EG__

La cote finale calculée automatiquement n’est pas forcément la cote finale qui se trouvera dans le bulletin de l’étudiant. En effet, si après le calcul par l’application, les membres du jury s’accordent oralement pour dire que celui-ci a créé une cote artificiellement élevée ou basse par rapport à l’estimation globale qu’ils ont des compétences de l’étudiant, il doit être possible d’encoder une cote finale manuellement. Par défaut, c’est la cote calculée qui est utilisée, mais on peut en ajouter une manuellement qui sera prise en compte à la place de la cote calculée. Naturellement, le professeur doit pouvoir voir tant le résultat du calcul que la cote mise manuellement.

#### En plus

À tout moment, le professeur doit pouvoir monitorer ce qui se passe. Un dashboard dans l’application reprendra donc une vue d’ensemble des cotes déjà encodées. Le but est de permettre au professeur de savoir où on en est dans l’avancement de l’épreuve. Cette vue est à réaliser impérativement, c’est la plus utile.

Différentes vues supplémentaires sont possibles en plus de la vue générale décrite au paragraphe précédent. Le professeur peut choisir un étudiant dans l’interface et voir : sa cote finale calculée par l’application ; le détail du calcul ; un résumé des cotes des différents jurys pour un travail particulier ; un résumé des cotes mises par un membre du jury à un étudiant particulier ; une vue d’ensemble des cotes mises par un membre du jury à tous les étudiants qu’il a rencontré ; les commentaires associés à chaque cote et éventuellement, recliquer sur le lien d’un travail d’un étudiant pour le remontrer aux jurys. On peut encore imaginer d’autres vues, mais ce sont sans doute les plus utiles. 

## Notes techniques

Il y a beaucoup de formulaires dans cette application. Efforcez-vous de les rendre séduisants, qu’ils fassent oublier qu’ils sont des formulaires d’encodage mais sans casser non plus l’affordance. Tout est dans l’équilibre.

Le backend doit être implémenté à l’aide d’une architecture MVC existante. Vous êtes libres de choisir celle qui vous convient. Laravel, Rails, Django, Express, ou encore une solution à base de Prisma/GraphQL sont toutes des solutions possibles.

Un modèle de développement qui abstrait l’accès aux données et permet de les consommer avec des clients variés est souhaitable. Un service Web, de type API Rest ou GraphQL est donc à réaliser côté backend.

Le client est à réaliser avec l’aide d’une librairie moderne, telle que VueJS ou React. Ce n’est cependant pas une raison pour brûler sur l’autel de la modernité la qualité de l’intégration. Pensez à produire du bon html.

### Aides
Je liste ici les principales entités et relations que j'imagine être utiles pour la réalisation de cette application. Veuillez noter que j'ai pris le parti de créer un vocabulaire signifiant. Laravel est construit de manière à vous permettre de diminuer la part des configurations si vous utilisez ses conventions. Mais celles-ci ne sont pas toujours propres à créer un vocabulaire signifiant. Ainsi, pour exprimer la relation `many to many` entre un `contact` et un `jiri`, vous devriez prévoir une table `contact_jiri` si vous respectiez les conventions prévues. Cependant, il peut être plus parlant de travailler avec le concept de `attendance`, qui signifie `participation` en anglais. De même la relation entre un `project` et un `jiri` devrait être `jiri_project`, mais il est plus intéressant de la nommer `duty`, ce qui signifie `devoir`. La liste qui suit détaille les entités et les relations que j'imagine donc, avec le vocabulaire que je crois pertinent. Les noms sont ceux des modèles et non des tables, qui sont juste les versions pluralisées des modèles.

- `jiri` liste les événements de type jury. Par exemple, _le jury de Design Web de 2e en juin pour 2016 - 2017_ ou _le jury de Projets Web de 3e en septembre pour 2016 - 2017._ Une clé étrangère, `user_id`, permet de savoir qui est le créateur/propriétaire de l’événement en question ;
- `user` liste les utilisateurs du système, donc les profs, qui ont l'autorisation de gérer les jurys ;
- `contact` liste les contacts du professeur. Lors de leur participation à un jury, ils reçoivent le rôle de `student` ou d'`evaluator`;
- `attendance` sert à mettre en relation des contacts avec des jury. Au final à sert à dire si une personne participe à un jury, avec quel rôle, et si ce dernier est `evaluator`, avec quel token de connexion ;
- `project` liste tous les projets réalisable à l’occasion d’un jury ;
- `duty` est le concept qui lie un project et un jiri. C'est l'idée d'un devoir à réaliser. Il peut être caractérisé par des liens et des tâches.
- `implementation` liste les réalisations, par les étudiants, des duties prévus pour un jiri donné. Si un jury compte 6 projets et 10 étudiants, ça fait un maximum de 60 implémentations pour ce jury. Chaque implémentation est associée à ses urls. Une colonne permet de stocker la cote moyenne qu’a obtenu cette implémentation et une autre, la pondération que doit avoir cette implémentation ;
- `score` contient les scores mis par un membre du jury à une implémentation. Un commentaire est également possible en plus de la cote (qui peut contenir deux décimales) ;
- `performance` stocke les cotes finales obtenues par un étudiant lors d’un événement. Il y a deux cotes, la cote calculée mathématiquement, et la cote ajustée suite la délibération ;
- `impression` stocke les notes d’évaluation générale qu’un membre du jury met à un étudiant.

Bon travail !
