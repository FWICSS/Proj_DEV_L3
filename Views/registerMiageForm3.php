<?php
include_once('header.php');
?>
<div class="container bg-white rounded-3 border border-5 shadow mt-5 ps-lg-5 pe-lg-5 pb-5">
    <div class="py-5 text-center">
        <h2>Baccalauréat</h2>
    </div>
    <form>
        <div class="row g-3 d-flex justify-content-center">
            <div class="col-sm-3">
                <label for="firstName" class="form-label">Série</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
            </div>

            <div class="col-sm-3">
                <label for="lastName" class="form-label">Mention</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
            </div>

            <div class="col-sm-3">
                <label for="username" class="form-label">Année</label>
                <div class="input-group has-validation">
                    <input type="month" class="form-control" id="username" placeholder="Optionnel" required>
                </div>
            </div>
            <div class="col-sm-3">
                <label for="username" class="form-label">Lieu</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" id="username" placeholder="Optionnel" required>
                </div>
            </div>
        </div>

        <div class="row g-3 d-flex justify-content-center mb-3">
            <div class="col-sm-3">
                <label for="username" class="form-label">Lieu</label>
                <div class="input-group has-validation">
                    <input type="date" class="form-control" id="username"
                           placeholder="date de naissance" required>
                    <div class="invalid-feedback">
                        Your username is required.
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <label for="username" class="form-label">Lieu de naissance</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" id="username"
                           placeholder="Lieu de naissance" required>
                </div>
            </div>
        </div>
        <div class="pt-5 pb-2 text-start">
            <h4>Adresse de l'étudiant</h4>
        </div>
        <div class="row g-3 d-flex justify-content-center">
            <div class="col-sm-6">
                <label for="firstName" class="form-label">Libellé Adresse</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
            </div>
            <div class="col-sm-4">
                <label for="firstName" class="form-label">Ville</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
            </div>
            <div class="col-sm-2">
                <label for="firstName" class="form-label">Code postale</label>
                <input type="number" class="form-control" id="firstName" placeholder="" value="" required>
            </div>
            <div class="col-sm-4">
                <label for="firstName" class="form-label">E-mail</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
            </div>
            <div class="col-sm-4">
                <label for="firstName" class="form-label">Tel</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
            </div>
            <div class="col-sm-4">
                <label for="firstName" class="form-label">Portable</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value=""
                       required>
            </div>
        </div>
        <div class="pt-5 pb-2 text-start">
            <h4>Adresse des parents</h4>
        </div>
        <div class="row g-3 d-flex justify-content-center">
            <div class="col-sm-6">
                <label for="firstName" class="form-label">Libellé adresse</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
            </div>
            <div class="col-sm-4">
                <label for="firstName" class="form-label">Ville</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
            </div>
            <div class="col-sm-2">
                <label for="firstName" class="form-label">Code postale</label>
                <input type="number" class="form-control" id="firstName" placeholder="" value="" required>
            </div>
            <div class="col-sm-4">
                <label for="firstName" class="form-label">E-mail</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
            </div>
            <div class="col-sm-4">
                <label for="firstName" class="form-label">Tel</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
            </div>
        </div>
    </form>
    <div class="col-md-12 text-end">
        <button class="btn btn-primary" type="submit">Suivant</button>
    </div>
</div>