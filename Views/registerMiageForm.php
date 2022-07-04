<?php
include_once('header.php');
?>
<div class="container bg-white rounded-3 border border-5 shadow mt-5 ps-lg-5 pe-lg-5 pb-5">
    <div class="py-5 text-center">
        <h2>Fiche de renseignements</h2>
    </div>

    <form method="POST" action="index.php?useCase=student&action=firstForm">
        <div class="row g-3 d-flex justify-content-center">
            <div class="col-sm-3">
                <label for="firstName" class="form-label">Prénom</label>
                <input type="text" class="form-control " name="firstName" value=<?php echo $_SESSION['prenom']?> disabled>
            </div>
            <div class="col-sm-3">
                <label for="lastName" class="form-label">Nom</label>
                <input type="text" class="form-control" name="lastName" value=<?php echo $_SESSION['nom']?> disabled>
            </div>
            <div class="col-sm-3">
                <label for="username" class="form-label">Nom de jeune fille</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" name="maidenName" placeholder="Optionnel">
                </div>
            </div>
        </div>
        <div class="row g-3 d-flex justify-content-center mb-3">
            <div class="col-sm-3">
                <label for="username" class="form-label">Date de naissance</label>
                <div class="input-group has-validation">
                    <input type="date" class="form-control" name="dateOfBirth"
                           required>
                </div>
            </div>
            <div class="col-sm-3">
                <label for="username" class="form-label">Lieu de naissance</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" name="placeOfBirth"
                           required>
                </div>
            </div>
        </div>
        <div class="pt-5 pb-2 text-start">
            <h4>Adresse de l'étudiant</h4>
        </div>
        <div class="row g-3 d-flex justify-content-center">
            <div class="col-sm-6">
                <label for="firstName" class="form-label">Libellé Adresse</label>
                <input type="text" class="form-control" name="lblAddress" required>
            </div>
            <div class="col-sm-4">
                <label for="firstName" class="form-label">Ville</label>
                <input type="text" class="form-control" name="lblCity" required>
            </div>
            <div class="col-sm-2">
                <label for="firstName" class="form-label">Code postale</label>
                <input type="number" class="form-control" name="lblCodePostal" required>
            </div>
            <div class="col-sm-4">
                <label for="firstName" class="form-label">E-mail</label>
                <input type="email" class="form-control" name="mail"  value=<?php echo $_SESSION['mail']?> disabled>
            </div>
            <div class="col-sm-4">
                <label for="firstName" class="form-label">Tel</label>
                <input type="text" class="form-control" name="tel" required>
            </div>
            <div class="col-sm-4">
                <label for="firstName" class="form-label">Portable</label>
                <input type="text" class="form-control" name="phone" required>
            </div>
        </div>
        <div class="col-md-12 text-end">
            <button class="btn btn-primary" type="submit">Suivant</button>
        </div>
    </form>
</div>