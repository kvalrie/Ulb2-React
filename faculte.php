<?php


require 'bdd copie.php';

if(isset($_POST['fac']) === true && empty($_POST['fac']) === false ) {

    $fac = $_POST['fac'];

 $requete = $bdd->query("SELECT Faculte, Fac FROM ZFac WHERE Fac = '$fac' ");

while($bdd_unit_data= $requete->fetch()) {

    	 echo '<h1>' . htmlspecialchars($bdd_unit_data[('Faculte')]) . '</h1>';
    }
    $requete ->closeCursor();
}
    ?>

<div class="row">
  <div class="col-12 col-md-8">
    <div class="facdescription">
   <p>Description: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, veritatis, aut unde maiores ex sunt! Explicabo, repellendus excepturi suscipit fugiat recusandae cum odit, consequuntur quas aliquam ab in velit tempora.</p>
   </div>
   <div class="facunite">
       <?php
        $resultat_unit = $bdd->query("SELECT ZUnite.Nom FROM Zunite INNER JOIN ZUFac ON ZUnite.Idunite = ZUFac.Refunite WHERE Reffac = '$fac' ");

        while ($donnee = $resultat_unit->fetch()) {
            echo  htmlspecialchars($donnee[('Nom')]) ;

        }
        $resultat_unit->closeCursor();
?>
   </div>
   <div class="facContact">
     Contact
   </div>

  </div>
  <div class="col-6 col-md-4">
                  <div class="statistic d-flex align-items-center bg-white has-shadow">

                    <div class="text"><strong>234</strong><br><small>Unités</small></div>
                  </div>
                  <div class="statistic d-flex align-items-center bg-white has-shadow">

                    <div class="text"><strong>152</strong><br><small>Projets</small></div>
                  </div>
                  <div class="statistic d-flex align-items-center bg-white has-shadow">

                    <div class="text"><strong>147</strong><br><small>Chercheurs</small></div>
                  </div>

  </div>
</div>
