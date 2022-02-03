<?php
if(count($_GET) > 0) {
  print_r($_GET);
}
?>
<?php include "./inc/head.php"; ?>
<?php include "./inc/body.php"; ?>

        <h2 class="right__title">Nous contacter</h2>
        <div class="posts">
          <div class="post post--solo">
            <form action="./action/form.php">
              <div>
                <h3>Je suis : </h3>
                <label for="masculin">Homme</label>
                <input type="radio" name="genre" id="masculin" value="masculin" checked>
                <label for="feminin">Femme</label>
                <input type="radio" name="genre" id="feminin" value="feminin">
              </div>
              <div>
                <label for="prenom">Prénom : </label>
                <input type="text" name="prenom" id="prenom" placeholder="Morgan" value="Morgan">
              </div>
              <div>
                <label for="nom">Nom : </label>
                <input type="text" name="nom" id="nom" value="Corroyer">
              </div>
              <div>
                <label for="referent">J'ai connu le site grâçe à : </label>
                <select name="referent" id="referent">
                  <option value="facebook" checked>Facebook</option>
                  <option value="twitter">Twitter</option>
                  <option value="google">Google</option>
                  <option value="boucheAOreille">Bouche à oreilles</option>
                  <option value="autres">Autres</option>
                </select>
              </div>
              <div>
                <label for="mail">Répondez moi via : </label>
                <input type="mail" name="mail" id="mail" value="morgan@morgan.morgan">
              </div>
              <div>
                <label for="message">Je voulais vous dire que : </label>
                <textarea name="message" id="message" cols="30" rows="10">Coucou, je suis un dev</textarea>
              </div>
              <div>
                <label for="fichier">Je vous envoie aussi : </label>
                <input type="file" name="fichier" id="fichier">
              </div>
              <div>
                <label for="validation">Je valide mes données : </label>
                <input type="checkbox" name="validation" id="validation" checked>
              </div>
              <div>
                <input type="submit" value="Envoyer">
              </div>
              
            </form>
            
            <a href="./index.php" class="post__link">back to home</a>
          </div>
        </div>
<?php include "./inc/footer.php"; ?>