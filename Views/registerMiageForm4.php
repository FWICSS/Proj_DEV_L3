<?php
include_once('header.php');
?>
<div class="container">
    <div class="progress">
        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar"
             aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
    </div>
</div>
<div class="container bg-white rounded-3 border border-5 shadow mt-3 ps-lg-5 pe-lg-5 pb-5">
    <div class="pt-2 text-center">
        <h2>1er Cycle</h2>
    </div>
    <form method="POST" action="index.php?useCase=student&action=form_4">
        <div class="row g-3 d-flex justify-content-center">
            <div class="pt-5 text-start">
                <h4>1ère Année</h4>
            </div>
            <div class="col-sm-3">
                <label for="firstName" class="form-label">Intitule</label>
                <input type="text" class="form-control" name="intitule_1" required>
            </div>
            <div class="col-sm-3">
                <label for="firstName" class="form-label">Année d'obtention</label>
                <input type="number" class="form-control" name="annee_obtention_1" required>
            </div>
            <div class="col-sm-3">
                <label for="username" class="form-label">Lieu</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" name="place_1" required>
                </div>
            </div>
            <div class="col-sm-3">
                <label for="username" class="form-label">Moyenne</label>
                <div class="input-group has-validation">
                    <input type="number" class="form-control" name="average_1" required>
                </div>
            </div>
            <div class=" text-start">
                <h4>2eme Année</h4>
            </div>
            <div class="col-sm-3">
                <label for="firstName" class="form-label">Intitule</label>
                <input type="text" class="form-control" name="intitule_2" required>
            </div>
            <div class="col-sm-3">
                <label for="firstName" class="form-label">Année d'obtention</label>
                <input type="number" class="form-control" name="annee_obtention_2" required>
            </div>
            <div class="col-sm-3">
                <label for="username" class="form-label">Lieu</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" name="place_2" required>
                </div>
            </div>
            <div class="col-sm-3">
                <label for="username" class="form-label">Moyenne</label>
                <div class="input-group has-validation">
                    <input type="number" class="form-control" name="average_2" required>
                </div>
            </div>
            <div class=" text-start">
                <h4>Autre(s) diplôme(s) obtenu(s)</h4>
            </div>
            <div class="col-sm-3">
                <label for="firstName" class="form-label">Intitule</label>
                <input type="text" class="form-control" name="intitule_3">
            </div>
            <div class="col-sm-3">
                <label for="firstName" class="form-label">Année d'obtention</label>
                <input type="number" class="form-control" name="annee_obtention_3">
            </div>
            <div class="col-sm-3">
                <label for="username" class="form-label">Lieu</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" name="place_3">
                </div>
            </div>
            <div class="col-sm-3">
                <label for="username" class="form-label">Moyenne</label>
                <div class="input-group has-validation">
                    <input type="number" class="form-control" name="average_3">
                </div>
            </div>
        </div>
        <div class="col-md-12 text-end mt-3">
            <button class="btn btn-primary" type="submit">Suivant</button>
        </div>
    </form>
</div>