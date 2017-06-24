# Jiri

_Jiri_ est une application qui permet de tenir un jury pour les cours de _Design Web_ du 2ème bloc et de _Projets Web_ du 3ème bloc du bachelier en infographie organisé à la Haute École de la Province de Liège.

## Le contexte

Chaque année, des intervenants externes sont invités à venir évaluer les étudiants des cours de _Design Web_ et de _Projets Web_, et à leur donner par la même occasion un feedback sur leurs réalisations. 

Jusqu’à ce jour, la procédure habituelle a consisté à donner aux membres du jury des feuilles reprenant chacune le nom d’un étudiant, son heure de passage, le nom du jury et la liste des réalisations, et à leur demander de noter, pour chaque réalisation, une cote et des commentaires. Ils notent également sur ces feuilles un commentaire global et une cote globale (qui n’est pas forcément la moyenne arithmétique des travaux) concernant le profil et le niveau de compétence de l’étudiant tel qu’ils l’ont perçu à travers les réalisations examinées. À la fin de la journée, à l’aide de ces notes, les membres du jury délibèrent pour obtenir un consensus sur les qualités des travaux de chaque étudiant et en tirer une cote finale.

Afin de faciliter le processus d’encodage et de délibération de fin d’épreuve, nous vous passons commande d’une application utilisable le jour de l’examen par les membres du jury et par le professeur qui organise l’épreuve.

## Les rôles

Deux rôles sont à considérer dans l’utilisation de l’application : membre du jury classique et professeur responsable de l’épreuve. Voici les scénarios types que nous imaginons pour l’utilisation de l’application selon ces deux rôles.

### Le membre du jury classique

Au début de sa journée, le membre du jury s’installe à son poste. Il rencontre les étudiants les uns après les autres et utilise les différents projets de chacun. Lorsqu’il souhaite commenter un projet, il établit une connexion à l’application avec le ou les appareils qu’il utilise pour son évaluation. Son compte a déjà été créé par le professeur au préalable. Le jury doit seulement entrer un email et un mot de passe de 6 lettres, communiqué par le professeur au début de l’épreuve, pour ouvrir sa session.

Lorsqu’il est connecté, le professeur voit l’ordre de passage des étudiants qu’il doit voir. En choisissant dans cette liste l’étudiant dont il veut coter et commenter les travaux, il découvre la liste des travaux de l’étudiant. Après avoir choisi un travail, il peut remplir un formulaire constitué d’un `select` entre 0 et 20 pour la cote et un champ de texte pour le commentaire. Le lien vers le travail et vers le repo du travail sont également affichés, éditables si besoin et utilisables pour visiter le travail ou son repo. En plus de mettre une cote pour chaque travail, le professeur est aussi invité à donner une appréciation globale de l’étudiant, basée sur l’impression générale que lui a laissée son entrevue avec ce dernier.

Le membre du jury n’est pas obligé de remplir les deux champs en même temps, ce qui signifie que s’il réaffiche plus tard la page correspondant à un travail particulier d’un étudiant, il doit retrouver un formulaire pré-rempli avec ce qu’il y a déjà saisi. Lorsqu’il enregistre, il reste sur la même vue afin de pouvoir continuer son édition le cas échéant.

### Le professeur responsable

Le professeur prépare le jury et acte sa délibération lorsqu’il est fini. Pendant le jury, il peut agir comme un membre du jury classique. L‘interface lui propose donc les fonctions disponibles pour le membre du jury classique plus quelques autres. Par défaut, par contre, son interface lui affiche l’état actuel du jury (les cotes déjà attribuées par les membres du jury aux étudiants qu’ils ont vu), ce qui lui permet de monitorer l’avancement du jury.

Lorsqu’il prépare le jury, le professeur doit tout d’abord créer une nouvelle épreuve. Identifier l’épreuve permettra à plusieurs professeurs de créer différentes épreuves au fil des années. Une épreuve se caractérise par le nom du cours, l’année académique, la date et la session d’examen (première ou seconde). 

Quand il construit l’épreuve, le professeur doit ajouter des étudiants (avec une photo éventuelle). L’ajout des étudiants doit être facilité par une auto-complétion si l’étudiant est déjà dans la base de données ou créer un nouvel étudiant si ce n‘est pas le cas. 

Le professeur doit aussi ajouter des membres du jury (nom, prénom, email, mot de passe de 6 lettres, photo éventuelle), et cette création est assistée, comme pour les étudiants, par une auto-complétion si le membre du jury a déjà été ajouté lors d’une épreuve précédente, car certains membres du jury reviennent plusieurs années de suite. 

Quand des étudiants ont quitté l’école ou que certains membres de jury ne souhaitent plus participer à l’avenir, il serait problématique que la fonction d’auto-complétion continue de les proposer. Mais il serait aussi dommage de perdre la trace des épreuves passées. C’est pourquoi la suppression d’un étudiant et d’un membre du jury se fera en _soft-delete_.

Une fois les étudiants et les membres du jury ajoutés dans le système, le professeur peut mémoriser un ordre de passage (un membre du jury rencontre un étudiant entre telle heure et telle heure). 

Bien sûr, le professeur peut constamment éditer ces informations. Les formulaires restent donc ouverts et sont seulement équipés d’un bouton d’enregistrement.

Le professeur doit aussi ajouter des travaux (avec les urls du site et du repo et une courte explication du travail). 

Les différents travaux présentés lors du jury peuvent _peser_ différemment dans le calcul de la cote finale d’un étudiant. Quand il ajoute un travail à une épreuve, le professeur doit donc pouvoir ajouter une pondération (`0,2` équivaut par exemple à 20%). Pour un étudiant donné, chaque jury encode une cote pour chaque travail qu'il a examiné ainsi qu’une cote d'évaluation globale.

#### Note pour le calcul de la cote finale

La cote finale de l’étudiant se calcule en deux étapes :

1. Pour chaque travail de l’étudiant, on fait la moyenne des cotes des membres du jury qui ont évalué ce travail. Idem pour l’évaluation globale. On obtient donc une cote moyenne pour le travail 1 (ex. __CV__), une cote moyenne pour le travail 2 (ex. __CSSZG__), etc. et une cote  moyenne pour l’évaluation globale (__EG__). 
Par exemple, s'il y a cinq travaux, __CV__, CSS Zen Garden (__CSSZG__), Artiste (__ART__), Portfolio (__PF__) et site pour client réel (__CR__), on aura :
    __CV__ = (__CV__ du jury1 + __CV__ du jury3 + __CV__ du jury7) / 3
    __CSSZG__ = (__CSSZG__ du jury1 + __CSSZG__ du jury2) / 2
    __ART__ = (__ART__ du jury2 + __ART__ du jury3 + __ART__ du jury5 + __ART__ du jury6) / 4
    __PF__ = (__PF__ du jury2 + __PF__ du jury3 + __PF__ du jury4 + __PF__ du jury6 + __PF__ du jury7) / 5
    __CR__ =(__CR__ du jury1 + __CR__ du jury2 + __CR__ du jury4 + __CR__ du jury5 + __CR__ du jury6 + __CR__   du jury7) / 6
    __EGmoy__ = (__EG__ du jury1 + __EG__ du jury2 + __EG__ du jury3 + __EG__ du jury4 + __EG__ du jury5 + __EG__ du jury6 + __EG__ du jury7 ) / 7
2. La cote finale est la moyenne pondérée des cotes moyennes pour chaque travail. 
Par exemple, si on a décidé que le __CV__, __CSSZG__, __ART__ valaient chacun pour 10% des points, __PF__ pour 20% des points, __CR__ pour 30% des points et __EG__ pour 20% des points, la cote finale sera calulée comme suit :
__COTE__ = 0.1 * __CV__ + 0.1 * __CSSZG__ + 0.1 * __ART__ + 0.2 * __PF__ + 0.3 * __CR__ + 0.2 * __EG__

#### En plus

Pour la préparation d’une épreuve, l’application doit permettre d’imprimer :

- une feuille reprenant la liste de membres du jury (prévoir des séparations pointillées entre les différents membres du jury pour aider à couper des bandelettes distribuables aux membres du jury et faire attention aux sauts de pages) avec, pour chacun,
    - ses *credentials* (Nom, Prénom, email, mot de passe) ;
    - la liste des étudiants qu’il va voir avec les heures de passage (nom de l’étudiant, heure de début, heure de fin) ;
- une liste des étudiants (prévoir des séparations pointillées entre les différents étudiants pour aider à couper des bandelettes distribuables aux étudiants) reprenant pour chacun leur ordre de passage auprès des différents membres du jury (nom du jury, heure de début, heure de fin).

À tout moment, le professeur doit pouvoir monitorer ce qui se passe. Sa page d’accueil sur l’application reprendra donc une vue d’ensemble des cotes déjà encodées. La meilleure forme pour ce faire est un tableau qui croise les étudiants avec les membres du jury. Le but est de permettre au professeur de savoir où on en est dans l’avancement de l’épreuve.

Lorsque l’épreuve est terminée le professeur peut voir les résultats des élèves. Différentes vues sont possibles en plus de la vue générale décrite au paragraphe précédent. Le professeur peut choisir un étudiant dans l’interface et voir : sa cote finale calculée par l’application ; le détail du calcul ; un résumé des cotes des différents jurys pour un travail particulier ; un résumé des cotes mises par un membre du jury à un étudiant particulier ; une vue d’ensemble des cotes mises par un membre du jury à tous les étudiants qu’il a rencontré ; les commentaires associés à chaque cote et éventuellement, recliquer sur le lien d’un travail d’un étudiant pour le remontrer aux jurys. On peut encore imaginer d’autres vues, mais ce sont sans doute les plus utiles.

La cote finale calculée automatiquement n’est pas forcément la cote finale de l’étudiant qui se trouvera dans le bulletin de l’étudiant. En effet, si après le calcul par l’application, les membres du jury s’accordent oralement pour dire que celui-ci a créé une cote artificiellement élevée ou basse par rapport à l’estimation globale qu’ils ont des compétences de l’étudiant, il doit être possible d’encoder une cote finale manuellement. Par défaut, c’est la cote calculée qui est utilisée, mais on peut en ajouter une manuellement qui sera prise en compte à la place de la cote calculée. Naturellement, le professeur doit pouvoir voir tant le résultat du calcul que la cote mise manuellement.

Lorsqu’il le souhaite (par exemple lorsqu’il est de retour à la maison), le professeur peut imprimer un document (idéalement PDF et/ou Excel, mais au minimum, via des feuilles de styles adaptées à l’impression) récapitulatif des cotes configuré selon ses besoins :

- soit une liste simplifiée des étudiants avec leur cote finale ;
- soit une liste détaillée des cotes pour tous les travaux par étudiant (et bien sûr la cote finale);
- soit un tableau avec les cotes mises par chaque jury pour chaque étudiant (et bien sûr la cote finale). 

## Exigences techniques

Ce travail assez simple (le cahier des charges décrit en détail le contexte et des scénarios d’utilisation pour vous aider à sentir les besoins, mais les fonctionnalités sont basiques et peu nombreuses. La modélisation de la DB est simple également) propose des occasions d’enrichissement des interfaces. Vous devez créer un produit qui respecte les règles habituelles de l’accessiblité et peut donc fonctionner sans JS mais il est _impératif_ d’enrichir ensuite l’interface pour qu’elle propose une expérience moderne et confortable. En plus, elle doit être utilisable sur tout device (téléphone, tablette, desktop) que le membre du jury ou le professeur jugera utile d’utiliser.

Il y a beaucoup de formulaires dans cette application. Efforcez-vous de les rendre séduisants, qu’ils fassent oublier qu’ils sont des formulaires d’encodage mais sans casser non plus l’affordance. Tout est dans l’équilibre.

Le backend doit être implémenté à l’aide d’une architecture MVC existante. Vous êtes libres de choisir celle qui vous convient mais pour des raisons contingentes à l’infrastructure scolaire, elle doit être basée sur le langage PHP et la base de données Mysql. Laravel ou Lumen s’imposent donc naturellement.

Idéalement, un modèle de développement qui abstrait l’accès aux données et permet de les consommer avec des clients variés est souhaitable. Une API, REST idéalement, serait donc un vrai plus. Ne pas la faire ne sera pas une cause d’échec, mais la faire vous amènera un bon bonus.

Le(s) client(s) doi(ven)t pouvoir fonctionner sans JS, mais ne pas enrichir l’expérience de JS sera une cause de malus.

Bon travail !
