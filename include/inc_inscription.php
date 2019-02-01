      <div id="titre">
        <h1>Inscription</h1>&nbsp;&nbsp;
        <img id="interro3" src="img/speech-bubble.png" alt="interrogation"> 
      </div>
      <div id="modal3">
      <h2>Veuillez respecter les consignes suivantes :</h2>
        <ul>
          <li><strong>Nom </strong>et <strong>Prénom</strong> : chiffres et caractères spéciaux non autorisés. </li>
          <li><strong>Mot de passe</strong> : doit comporter au moins une minuscule, une majuscule, un chiffre et un caractère spécial (# ? ! $ % & * -).</li>
          <li>Les deux saisies du mot de passe doivent être identique. </li>
          <li>En cas d'erreur, le champ changera de couleur. </li>
          <li>Tous les champs doivent être complétés pour pouvoir valider votre inscription.</li>
          <li>Vous aurez la possibilité de modifier vos données sur la page 'mon profil' à tout moment.</li>
        </ul>
      </div>       
        <form method="post" action="request/trtInscription.php" onsubmit="return verifForm()"> 

          <div class="haut">

            <div class="donnee">
              <label for="pseudo">Pseudo *</label> 
              <input type="text" name="pseudo" placeholder="pseudo" required>
            </div> 
            <div class="donnee">
              <label for="nom">Nom *</label>
              <input type="text" name="nom" placeholder="nom" onblur="verifNom(this)" required>
            </div> 
            <div class="donnee">
              <label for="prenom">Prénom *</label>
              <input type="text" name="prenom" placeholder="prénom" onblur="verifNom(this)" required >
            </div> 
            <div class="donnee">
              <label for="email">Email *</label>
              <input type="email" name="email" placeholder="email" onblur="verifMail(this)" required>
            </div> 
            <div class="donnee">
              <label for="motdepasse">Mot de passe *</label>
              <input type="password" name="motdepasse" placeholder="mot de passe" onblur="verifPsw(this)" required>
            </div> 
            <div class="donnee">
              <label for="confmotdepasse">Confirmation <br/> du mot de passe * </label>
              <input type="password" name="confmotdepasse" placeholder="mot de passe" onblur="verifPsw2(this)" required>
            </div>
            <div class="donnee">
              <label for="statut">Statut</label>
                <select name="statut">
                  <option value="3">Abonné</option>
                  <option value="2">Lecteur</option>
                  <option value="1">Admin</option>
                </select>
            </div>


          </div>      
           
            <p class="texte" id="oblig">* données obligatoires</p>
            <div id="accord" >
                <input type="checkbox" name="accord" value="ok" required> <p class="texte" id="accordtext">J'accepte l'enregistrement de mes données.</p>
            </div>    
          </div> 
          <input type="submit" name="jeMinscris" value="Je m'inscris">
        </form>
        <div id="reponse">
        <?php //echo $_SESSION['message']; ?>
        </div>