<?php
include_once('header.php');
?>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center d-flex-row text-center">
            <div class="col-12 col-lg-4 h-50 ">
                <div class="card shadow">
                    <div class="card-body mx-auto">
                        <h4 class="card-title mt-3 text-center">Créer votre compte </h4>
                        <form method="POST" action="index.php?useCase=student&action=register">
                            <div class="form-group input-group mb-3">
                                <input name="lastName" class="form-control" placeholder="Nom" type="text" required>
                            </div>
                            <div class="form-group input-group mb-3">
                                <input name="firstName" class="form-control" placeholder="Prenom" type="text" required>
                            </div>
                            <div class="form-group input-group mb-3">
                                <input name="mail" class="form-control" placeholder="Mail" type="email" required>
                            </div>
                            <div class="form-group input-group mb-3">
                                <input name="password" class="form-control" placeholder="Mot de passe" type="password"
                                       required>
                            </div>
                            <div class="form-group input-group mb-3">
                                <input name="passwordRepeat" class="form-control"
                                       placeholder="Confirmation du mot de passe"
                                       type="password" required>
                            </div>
                            <div class="form-group mb-2">
                                <button type="submit" class="btn btn-outline-primary">M'enregistrer</button>
                            </div>
                            <p class="text-center">Vous avez déja un compte!
                                <a href="index.php?useCase=logInView">Connectez-vous</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
