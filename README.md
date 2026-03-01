✅ Étape 1 – Cloner le dépôt
```bash
git clone https://github.com/thierrylachatpro/php-fondamental/
```

✅ Étape 2 – Vérifier la liste des branches disponibles
```bash
git branch -a
```

✅ Étape 3 – Se placer sur votre branche
```bash
git checkout eleve-lucas
```
ou
```bash
git checkout -b eleve-lucas origin/eleve-lucas
```

✅ Étape 4 – Récupérer les dernières mises à jour avant de commencer
```bash
git pull
```

✅ Étape 5 – Faire l'exercice demandé

✅ Étape 6 – Envoyer votre travail (commit et push)
```bash
git add .
git commit -m "Votre message"
git push
```

✅ Étape 7 – Créer une Pull Request depuis github.com
1. Retourner sur la page GitHub du repo
2. GitHub vous propose automatiquement une PR : "Compare & pull request" → cliquez
3. Vérifiez :
   - base repository : repo du formateur
   - base branch : main
   - compare branch : votre branche (ex : eleve-lucas)
4. Ajouter un petit message (ex : "Voici mon passage sur l'exercice PHP 2")
5. Cliquez sur Create pull request

