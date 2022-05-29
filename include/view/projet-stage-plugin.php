<div class="h-20vh w-100vw"></div>

<article id='up' class="typo bordure m-3 pt-5 Color-bg-darkBlue d-flex justify-content-center align-items-center">
  <div class="d-flex flex-column justify-content-around ">
    <h1 class="Color-lightBlue">La création d'un plugin pour WordPress</h1>
    <br>

  </div>
</article>

    <a href="index.php?page=projet-stage" class="lien typo bordure Color-bg-darkBlue m-3 p-2">REVENIR AU MENU PRECEDENT</a>
<div class="h-20vh w-100vw"></div>
<!-- article DESCRIPTION-->
<article id='premier_pas' class="typo bordure mx-3 Color-bg-darkBlue">
    <h1 class="Color-lightBlue">DESCRIPTION DE L'APPLICATION <span style="font-weight:normal;">: Tout commence ici !</span></h1>
    <div class='content_article d-flex '>
      <section class="d-flex justify-content-around">
        <p> <strong>La problématique :</strong> <br>L'entreprise utilise pour leur site et ceux de leur client, un plugin qui charge un preloader. Cependant les formes et les possibilités étant limité, le plugin actuel ne permet pas d'utiliser des animations créer sous After Effect et exporté en json pour le lecteur lotti file.<br> <br> <strong>La solution proposé : </strong> <br>En collaboration avec le responsable design, j'ai commencé par consulter les fichiers en sortie d'after effect et comment les exploiter. On a finis par conclure que la meilleur solution était de développer un nouveau plugin qui utilise les animations Lotti files. <br>Le Preloader Mocha est née.</p>
        <img class="img_tuto img_1" src="include/img/getting_start.png" alt="image du tuto demarrage">
      </section>
            
    </div>
    <br>
    <a href="#up" class="lien">RETOUR EN HAUT</a>

  </article>
<!-- article choix animation -->
  <article id='Choix_animation' class="typo bordure mx-3 Color-bg-darkBlue">
    <h1 class="Color-lightBlue">CHOIX DE L'ANIMATION</h1>
    <div class='content_article d-flex'>
      <section class="d-flex justify-content-around">
        <div>
          <p>Afin de posséder un plugin complet, On a décidé de laisser la possibilité de choisir parmis 3 type d'animation</p>
          <br>
          <ul>
            <li><b>Animation GIF</b><br><p>Le GIF peut être conçu via un logiciel d’animation ou encore via des outils en ligne tel que GIFFY. Quelque animation sont présente par défaut.</p> </li><br>
            <li><b>Animation Lottiefile</b> <br><p>L’animation LottieFile est beaucoup moins lourde qu’un Gif puisqu’elle est conçue en code, maximum 100 Ko. Vous pouvez la créer vous-même ou en sélectionner sur des sites spécialisés.Quelque animation sont présente par défaut</p></li><br>
            <li><b>Animation CSS</b> <br><p>L’animation en CSS est la plus optimisée pour le chargement, avec un poids réduit à maximum 10 Ko. L’inconvénient: On ne peut pas intégrer sont propre code. On a sélectionné une série d’animation CSS à choisir parmi une sélection et à personnaliser en terme de couleur ! </p></li>
          </ul>
        </div>
        <img class="img_tuto img_1" src="include/img/choix_animation.png" alt="image du tuto demarrage">
      </section>            
    </div>
    <br>
    <a href="#up" class="lien">RETOUR EN HAUT</a>

  </article>
<!-- article configurer animation gif -->
  <article id='Configurer_animation_gif' class="typo bordure mx-3 Color-bg-darkBlue">
    <h1 class="Color-lightBlue">CONFIGURER UNE ANIMATION GIF</h1>
    <div class='content_article d-flex'>
      <section class="d-flex justify-content-around">
        <div>
          <p><h2>Découvrez chaque réglage de configuration :</h2></p>
          <ul>
            <li><span class="underline">Choix du GIF :</span> <p>Vous pouvez choisir de sélectionner un gif pré-enregistré dans notre sélection ou intégrer un gif personnalisé. <br> Pensez à sauvegarder pour prévisualiser chaque animation. </p></li>
            <li><span class="underline">GIF URL (media) : </span> <p> Insérez ici l'URL de votre gif, à récupérer dans votre bibliothèque de média après l’avoir téléversé (voir tutoriel). Vous pouvez aussi utiliser des sites spécialisés tels que GIPHY…  </p></span></li>
            <li><span class="underline">Background-color : #</span> <p>Vous pouvez choisir la couleur de l'arrière plan, en code hexa. Ne saisissez que le code hexa sans le signe #.</p></li>
            <li><span class="underline">Duree animation : s</span> <p>Vous pouvez choisir la durée minimale de votre animation en seconde.</p></li>
            <li><span class="underline">Size: </span> <p>Vous pouvez choisir la grandeur de votre animation. La valeur est exprimée en échelle (exemple : 1.2).</p></li>
          </ul>

        </div>
        <img class="img_tuto img_1" src="include/img/configuration_gif.png" alt="image du tuto demarrage">
      </section>      
      <section class="player d-flex">
        <video src="include/player/video/configuration_gif.mkv" controls></video>
        
      </section>

    </div>
    <br>
    <a href="#up" class="lien">RETOUR EN HAUT</a>

  </article>
<!-- configurer animation lotti -->
  <article id='Configurer_animation_lotti' class="typo bordure mx-3 Color-bg-darkBlue">
    <h1 class="Color-lightBlue">CONFIGURER UNE ANIMATION LOTTIEFILE</h1>
    <div class='content_article d-flex'>
      <section class="d-flex justify-content-around">
        <div>
          <p><h2>Découvrez chaque réglage de configuration : </h2></p>
          <ul>
            <li><span class="underline">Choix du Lottie :</span> <p>Vous pouvez choisir de sélectionner une de nos animations pré-enregistrées* ou intégrer une nouvelle animation LottieFile, soit créée par vos soins, soit sélectionnée et personnalisée en terme de couleur sur https://lottiefiles.com. Attention à prendre une animation gratuite ou payer une licence.</p></li>
            <li><span class="underline">Lotti URL (media) : </span> <p>Insésez ici l'URL « assets » de votre animation Lottie personnalisée (voir tutoriel).</p></span></li>
            <li><span class="underline">Background-color : #</span> <p>Vous pouvez choisir la couleur de l'arrière plan, en code hexa. Ne saisissez que le code hexa sans le signe #.</p></li>
            <li><span class="underline">Duree animation : s</span> <p>Vous pouvez choisir la durée minimale de votre animation en seconde.</p></li>
            <li><span class="underline">Size : </span> <p>Vous pouvez choisir la grandeur de votre animation. La valeur est exprimée en échelle (exemple : 1.2).</p></li>
          </ul>

        </div>
        <img class="img_tuto img_1" src="include/img/configuration_lotti.png" alt="image du tuto demarrage">
      </section>
      <section class="player d-flex">
        <video src="include/player/video/configuration_lotti.mkv" controls></video>
        
      </section>
            
    </div>
    <br>
    <a href="#up" class="lien">RETOUR EN HAUT</a>

  </article>
<!-- article configurer animation css -->
  <article id='Configurer_animation_css' class="typo bordure mx-3 Color-bg-darkBlue">
    <h1 class="Color-lightBlue">CONFIGURER UNE ANIMATION CSS</h1>
    <div class='content_article'>
      <section class="d-flex justify-content-around">
        <div>
          <p><h2>Découvrez chaque réglage de configuration : </h2></p>
          <ul>
            <li><span class="underline">Choix du CSS :</span> <p>vous pouvez choisir de paramétrer un gif personnalisé ou bien de sélectionner un gif pré enregistré</p></li>
            <li><span class="underline">Background-color : #</span> <p>vous pouvez choisir la couleur de l'arrière plan, en code hexa. Ne saisissez que le code hexa sans le signe #</p></li>
            <li><span class="underline">Couleur animation : #</span> <p>vous pouvez choisir la couleur de l'aanimation, en code hexa. Ne saisissez que le code hexa sans le signe #, vous pouvez modifier trois couleurs dans l'animation</p></li>
            <li><span class="underline">Duree animation : s</span> <p>vous pouvez choisir la durée minimale de votre animation en seconde</p></li>
            <li><span class="underline">Size : </span> <p>Vous pouvez choisir la grandeur de votre animation. La valeur est exprimée en échelle (exemple : 1.2).</p></li>
          </ul>

        </div>
        <img class="img_tuto img_1" src="include/img/configuration_css.png" alt="image du tuto demarrage">
      </section>
      <section class="player d-flex">
        <video src="include/player/video/configuration_css.mkv" controls></video>
        
      </section>
      
    </div>
    <br>
    <a href="#up" class="lien">RETOUR EN HAUT</a>

  </article>
<!-- article configurer logo -->
  <article id='Configurer_animation_logo' class="typo bordure mx-3 Color-bg-darkBlue">
    <h1 class="Color-lightBlue">CONFIGURER VOTRE LOGO</h1>
    <div class='content_article'>
      <section class="d-flex justify-content-around">
        <div>
          <p><h2>Découvrez chaque réglage de configuration : </h2></p>
          <ul>
            <li><span class="underline">URL du logo (media) : </span> <p>Insérez ici l'URL de votre logotype, à récupérer dans votre bibliothèque de média après l’avoir téléversé (voir tutoriel).</p></span></li>
            <li><span class="underline">Scale : </span> <p>Vous pouvez choisir le scale de votre logo pour l'agrandir ou le rétrécir. La valeur est exprimée en échelle (exemple : 1.2).</p></li>
            <li><span class="underline">Visible</span> <p>vous pouvez choisir de ne pas utiliser de logo et de le rendre invsible.</p></li>
          </ul>

        </div>
        <img class="img_tuto img_1" src="include/img/configuration_logo.png" alt="image du tuto demarrage">
      </section>      
      <section class="player d-flex">
        <video src="include/player/video/configuration_logo.mkv" controls></video>
        
      </section>
      
    </div>
    <br>
    <a href="#up" class="lien">RETOUR EN HAUT</a>

  </article>