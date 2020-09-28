Lancer le projet en local sur le port 8000 :
php -S localhost:8000 -t static


Récupérer les changements du projet GitHub : 
git pull


Envoyer les modifications à  Github :


1. git add * 
2. git commit -m "message du commit"
3. git push origin master 


Sortir d'une commande en cours sous PowerShell : Ctrl + C

pour créer ta branche et dev dessus :
1 git branch nom_branche
2 git checkout nom_branche

Pour récupérer les données d'une branche sur le master :
master >  git merge nom_branche

Pour delete une branche : 
git branch -d nom_branche

Pour lister une branche :
git branch

