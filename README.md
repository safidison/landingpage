# Test Technique de Développeur Frontend

# **Objectif**

Réaliser l'intégration d'une landing page à partir d'une maquette fournie. Vous utiliserez **Laravel** pour la structure de l'application, **TailwindCSS** pour la mise en page et les styles, et, si nécessaire, **Vue.js** pour des interactions dynamiques.

Le rendu attendu doit être **pixel-perfect**, **responsive**, et conforme aux consignes ci-dessous.

# **Informations générales :**

1. **Durée du test :** Vous avez 7 jours pour soumettre votre travail à partir de la réception de ces consignes.
2. **Maquette fournie :**
    - La maquette fournie est sur **Adobe XD** et comporte une page avec les vues Desktop et Mobile :
        - **Version Desktop (**https://xd.adobe.com/view/b64833e2-1a75-43a3-af47-305186a86c7b-e31b/**)**
        - **Version Mobile (**https://xd.adobe.com/view/b64833e2-1a75-43a3-af47-305186a86c7b-e31b/screen/12ecaa8f-1283-4a32-9736-e3d73507dd4d**)**
3. **Technologies obligatoires :**
    - **Laravel** : pour la structure de l’application.
    - **TailwindCSS** : framework CSS pour les styles et la mise en page.
    - **VanillaJS ou Vue.js** : pour gérer les interactions dynamiques.
4. **Point de départ :**
    - Un dépôt Git vous sera fourni contenant un projet Laravel préconfiguré avec :
        - **Vue.js et TailwindCSS installés.**
        - **Deux couleurs principales déjà configurées dans TailwindCSS.**
5. **Dépôt de travail :**
    - **Forkez le dépôt Git fourni.**
        - Lien du git : https://github.com/AAAEP/test-devfront
    - Effectuez toutes vos modifications dans votre propre fork.
    - Une fois le travail terminé, partagez le lien de votre dépôt Git avec nous (github).

# **Consignes spécifiques pour l’intégration**

1. Il n’est pas nécessaire de créer une base de données. Toutes les données sont statiques et si besoin, créez des fichiers JSON pour récupérer un grand nombre de données.
2. **Landing page :**
    - Reproduisez **scrupuleusement** le design fourni dans la maquette (**pixel-perfect**)
    - **Pixel-perfect** et **responsive** : breakpoint principal à **`lg`** (desktop : >=1024px, mobile : <1024px).
    - Remplacez toutes les images par des placeholders (par exemple : [https://fakeimg.pl](https://fakeimg.pl/)).
    - Utilisez des **icônes similaires** aux icônes présentes dans la maquette, en choisissant des ressources libres (FontAwesome, HeroIcons, etc.).
3. **Interactions dynamiques :**
    - **Liste des avis (carrousel) :**
        - Utilisez un fichier **JSON** pour récupérer les données de la liste des avis. Mettez-y les données dont vous avez besoin pour afficher les avis comme sur la maquette.
        - Implémentez un **carrousel** en pur **VanillaJS** ou **Vue.js** (aucune librairie externe ne doit être utilisée).
        - Le carrousel devra permettre de naviguer entre les avis via des flèches "précédent" et "suivant".
        - Le carrousel devra être responsive comme sur la maquette.
    - **Section "Préparez votre test psychotechnique" (accordéons) :**
        - Implémentez des **accordéons** pour afficher/masquer les contenus de cette section.
        - L’interaction doit être gérée avec **VanillaJS** ou **Vue.js**.
        - Texte à afficher :
            - **Titre 1 : "Qu'est-ce qu'un test psychotechnique ?"**
            Contenu : "Un test psychotechnique est une évaluation des aptitudes cognitives et comportementales, souvent utilisée pour valider ou reprendre un permis de conduire."
            - **Titre 2 : "Quels sont les documents nécessaires ?"**
            Contenu : "Les documents incluent une pièce d'identité, votre courrier d'annulation de permis, et votre attestation d'inscription."
            - **Titre 3 : "Combien de temps dure le test ?"**
            Contenu : "Le test dure en moyenne 45 minutes, incluant des exercices et des discussions avec un psychologue agréé."
    - **Barre de recherche :**
        - La barre de recherche sera **statique** (aucune fonctionnalité requise).
        - Intégrez uniquement le design selon la maquette.
    - **Filtres (mois, jour, demi-journée) :**
        - Implémentez des **listes déroulantes** pour les filtres en utilisant des données factices (ex. janvier, février pour mois, lundi, mardi pour jour, matin, après-midi pour demi-journée).
    - **Footer :**
        - Les sections “Les Tests par Départements” et “Les Préfectures de France” doivent être des listes déroulantes avec des données fictives.
