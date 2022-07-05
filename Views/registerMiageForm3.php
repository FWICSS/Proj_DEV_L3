<?php
include_once('header.php');
?>
<div class="container">
    <div class="progress">
        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
    </div>
</div>
<div class="container bg-white rounded-3 border border-5 shadow mt-3 ps-lg-5 pe-lg-5 pb-5">
    <div class="py-5 text-center">
        <h2>Baccalauréat</h2>
    </div>
    <form method="POST" action="index.php?useCase=student&action=form_3">
        <div class="row g-3 d-flex justify-content-center">
            <div class="col-sm-3">
                <label for="firstName" class="form-label">Série</label>
                <input type="text" class="form-control" name="serie"   required>
            </div>

            <div class="col-sm-3">
                <label for="lastName" class="form-label">Mention</label>
                <select class="form-select" name="mention" aria-label="Default select example">
                    <option value="Null">Aucune mention</option>
                    <option value="AB">Assez-bien</option>
                    <option value="B">Bien</option>
                    <option value="TB">Très-bien</option>
                </select>
            </div>

            <div class="col-sm-3">
                <label for="username" class="form-label">Année</label>
                <div class="input-group has-validation">
                    <input type="number" class="form-control" name="year" required>
                </div>
            </div>
            <div class="col-sm-3">
                <label for="username" class="form-label">Lieu</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" name="place" required>
                </div>
            </div>
        </div>
        <div class="col-md-12 text-end mt-3">
            <button class="btn btn-primary" type="submit">Suivant</button>
        </div>
    </form>
</div>