<?php
if(isset($_POST['fac']) === true && empty($_POST['fac']) === false ) {

    $fac = $_POST['fac'];


        $resultat_unit = $bdd->query("SELECT ZUnite.Nom FROM Zunite INNER JOIN ZUFac ON ZUnite.Idunite = ZUFac.Refunite WHERE Reffac = '$fac' ");

        while ($donnee = $resultat_unit->fetch()) {
            echo    '<li><a href="#">'.htmlspecialchars($donnee[('Nom')]).'</a></li>' ;

        }
        $resultat_unit->closeCursor();

?>
