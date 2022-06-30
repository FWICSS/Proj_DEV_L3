<?php
include_once('header.php');
?>
<form>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label >M</label>
            <input type="text" class="form-control is-valid" name="M" placeholder="M" value="M" required>
            <div class="valid-feedback">

            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label >Né(e) le</label>
            <input type="text" class="form-control is-valid" name="Nee" placeholder="Nee" value="Nee" required>
            <label >à</label>
            <input type="text" class="form-control is-valid" name="a" placeholder="a" value="a" required>

            <div class="valid-feedback">

            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label >Titulaire du:</label><br>
            <textarea  type="text" row="3" class="form-control is-valid" name="M" placeholder="M" value="M" required></textarea>
            <div class="valid-feedback">

            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label >BTS</label>
            <input type="text" class="form-control is-valid" name="BTS" placeholder="BTS" value="BTS" required>
            <label >Option</label>
            <input type="text" class="form-control is-valid" name="option" placeholder="option" value="option" required>

            <div class="valid-feedback">

            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label >DUT</label>
            <input type="text" class="form-control is-valid" name="DUT" placeholder="DUT" value="DUT" required>
            <label >Option</label>
            <input type="text" class="form-control is-valid" name="option" placeholder="option" value="option" required>

            <div class="valid-feedback">

            </div>
        </div>
        <div>
            sollicite son admission en L3 MIAGE à l'université des Antilles pour l’année universitaire 2021-2022<br>
            _________________________________________________________________________________________<br>
            Avis du Responsable des Etudes<br>
            ou du Jury de Délibération du Lycée ou de l’I.U.T. fréquenté<br>
            sur la poursuite des études.<br>
            (Très favorable, Favorable, Réservé, …….)<br>
        </div>
        <div class="col-md-4 mb-3">
            <label >rang de classement de classement:</label>
            <input type="text" class="form-control is-valid" name="BTS" placeholder="BTS" value="BTS" required>
            <label >sur/</label>
            <input type="text" class="form-control is-valid" name="option" placeholder="option" value="option" required>
            <br>
            <label >Moyenne de l’étudiant (hors stage) :</label>
            <input type="text" class="form-control is-valid" name="moyenneetu" placeholder="moyenneetu" value="moyenneetu" required>
<br>
            <label >Moyenne de la promotion (hors stage) :</label>
            <input type="text" class="form-control is-valid" name="moyenneclasse" placeholder="moyenneclasse" value="moyenneclasse" required>

            <div class="valid-feedback">

            </div>
        </div>


    </div>
</form>
<?php
include('footer.php');
?>