# pokemon-arena

Les Pokémon sont certes de très mignonnes créatures, mais ils sont également un
bon exemple pour illustrer l’héritage. 

Une classe Pokemon qui contient (entre autres) :

- un attribut nom qui représente le nom du Pokémon.
- un attribut hp (pour Health Points) qui représente les points de vie du Pokémon.
- un attribut qui s’appelle atk qui représente la force de base de l’attaque du Pokémon.
- un constructeur pour instancier des Pokémon adéquatement.
- des getters (accesseurs) qui permettent de consulter les attributs du Pokémon.
- une méthode isDead() qui retourne un boolean pour indiquer si un Pokémon est mort (hp == 0) ou non.
- une méthode attaquer(Pokemon p) qui permet au Pokémon appelant d’attaquer le Pokémon passé en paramètre. 
  L’attaque déduit atk des points de vie (hp) du Pokémon attaqué p.
- une redéfinition de la méthode toString qui affiche les informations du Pokémon.

En plus des Pokémon normaux (décrits à travers la classe Pokemon), on ressence trois types de Pokémon :
les Pokémons de type Feu, les Pokémons de type Eau et les Pokémons de type Plante.

- Les Pokémons de type Feu sont super efficaces contre les Pokémons de type Plante et leur infligent deux fois plus de dégâts (2*atk). 
Par contre, ils sont très peu efficaces contre les Pokémons de type Eau ou de type Feu et ne leur
infligent que la moitié des dégâts (0.5*atk). Ils infligent des dégâts normaux aux Pokémon de type Normal.

- Les Pokémons de type Eau sont super efficaces contre les Pokémons de type
Feu et leur infligent deux fois plus de dégâts (2*atk). Par contre, ils sont très
peu efficaces contre les Pokémons de type Eau ou de type Plante et ne leur
infligent que la moitié des dégâts (0.5*atk). Ils infligent des dégâts normaux aux Pokémons de type Normal.

- Les Pokémons de type Plante sont super efficaces contre les Pokémons de
type Eau et leur infligent deux fois plus de dégâts (2*atk). Par contre, ils sont
très peu efficaces contre les Pokémons de type Plante ou de type Feu et ne leur
infligent que la moitié des dégâts (0.5*atk). Ils infligent des dégâts normaux aux Pokémons de type Normal.

A faire :

- [x] Créez trois classes PokemonFeu, PokemonEau et PokemonPlante qui héritent de la classe Pokemon 
  et qui représentent les trois types de Pokémon susmentionnés.
- [x] Créez une fonction combat dans votre index.php qui va prendre 2 pokémons et les faire 
  combatre jusqu'a tant que l'un des 2 pokémon n'est pas ko et qui affiche le gagant. 
- [x] Ajoutez un attribut "sprite" à la classe Pokémon, qui stockera l'URL de l'image associée à chaque Pokémon.
- [x] Concevez un formulaire de création de Pokémon permettant d'instancier un objet Pokémon avec une option de 
  choix pour le type. Assurez-vous de stocker ces Pokémon créés dans la session pour une manipulation facile ultérieure.
- [x] Créez une page de sélection affichant tous les Pokémon créés, avec la possibilité d'en sélectionner deux. Intégrez 
  un bouton "Valider" pour rediriger vers la page de combat. Veillez à ce que les Pokémon sélectionnés soient
  également stockés dans la session.
- [x] Élaborez une page de combat permettant de faire s'affronter deux Pokémon créés, et affichez le Pokémon gagnant à la fin du combat.