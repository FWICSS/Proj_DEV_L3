<?php
include_once('header.php');
?>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center d-flex-row text-center">
            <div class="col-12 col-lg-4 h-50 ">
                <div class="card shadow">
                    <div class="card-body mx-auto">
                        <h4 class="card-title mt-3 text-center">Connexion</h4>
                        <form method="POST" action="index.php?useCase=student&action=logIn">
                            <div class="form-group input-group mb-3">
                                <input name="login" class="form-control" placeholder="Mail" type="email" required>
                            </div>
                            <div class="form-group input-group mb-3">
                                <input name="password" class="form-control" placeholder="Mot de passe" type="password"
                                       required>
                            </div>
                            <div class="form-group mb-2">
                                <button type="submit" class="btn btn-outline-primary">Se connecter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('footer.php');

