<?php
include_once('header.php');
?>
<div class="container">
    <div class="progress">
        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
    </div>
</div>
<div class="container bg-white rounded-3 border border-5 shadow mt-3 ps-lg-5 pe-lg-5 pb-5">
    <div class="py-5 text-center">
        <h2>Adresse des parents</h2>
    </div>
    <form method="POST" action="index.php?useCase=parent&action=form_2">
        <div class="row g-3 d-flex justify-content-center">
            <div class="col-sm-6">
                <label for="firstName" class="form-label">Libellé adresse</label>
                <input type="text" class="form-control" name="lblParentAddress" required>
            </div>
            <div class="col-sm-4">
                <label for="firstName" class="form-label">Ville</label>
                <input type="text" class="form-control" name="lblParentCity" required>
            </div>
            <div class="col-sm-2">
                <label for="firstName" class="form-label">Code postale</label>
                <input type="number" class="form-control" name="lblParentCodePostal" required>
            </div>
            <div class="col-sm-4">
                <label for="firstName" class="form-label">E-mail</label>
                <input type="email" class="form-control" name="parentMail" required>
            </div>
            <div class="col-sm-4">
                <label for="firstName" class="form-label">Tel</label>
                <input type="text" class="form-control" name="parentTel" required>
            </div>
        </div>
        <div class="col-md-12 text-end mt-3">
            <button class="btn btn-primary" type="submit">Suivant</button>
        </div>
    </form>
</div>