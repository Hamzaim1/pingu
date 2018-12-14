le Projet Java et un jeu de carte qui s'appelle PinguParty; la date d dépot c'est le 05 Janvier 2018.

Le total des cartes est 36 carte de 5 couleur.
On a 7 carte rouges, violettes, bleues, et jaune et 8 carte vertes.
Le joueur peut etre un joueur humain ou AI.
Les cartes sont mélangées, chaque joueur recoit un nombre de carte selon les modalités suivantes:
- 2 Joueurs: 14 carte chacun, le reste est inutilisable et cachés au autre joueurs
- 3 Joueurs: 12 carte chaqu'un
- 4 Joueurs: 9 carte chaqu'un
- 5 Joueurs: 7 carte chaqu'un et la carte restante est montrée au joueurs
- 6 Joueurs: 6 carte chaqu'un

chaque partie quantient un nombre de manches, dans chaque manche un joueur pose une carte.
Si le joueur peut pas jouer, alors il est éliminé de la manche.
le score de la manche correspond au nombre de carte qui lui reste au main pendant cette manche. la manche suivante commencera au tours du joueur suivant.

le but de la manche et de construire un triangle avec les cartes.
le triangle de compose de 8 étage, le premier content 8 cartes, le deuxième contient 7 et ainsi de suite jusqu'à le 8 eme qui contient une seule carte.

pour le cas de 2 joueur on part directement au cas de 1 étage avec 7 carte (il n'a pas d'étage de 8 carte).
Le joueur peut faire:
- Poser une carte au premier étage: 
- poser une carte au étage plus superieure de le premier: elle doit reposer sur deux carte qui ont au moin une qui a la meme couleur que celle qu'on veut disposer.
Ne rien faire, le joueur est éliminé de la manche
Le jeu se contienut en manche jusqu'à qu'il reste pas de joueurs, le score est une sommation des score des manches, le gangant est cellui qui a le score le plus petit.
au cas d'égalité on considère le nombre de manche gagné.s'il a toujours l'égalité on considère celui qui a posé le moin de carte vertes, s'il a toujours l'égalité on laisse le classement tel quel et les joueur partage la meme place.
