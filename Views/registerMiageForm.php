<?php
include_once('header.php');
?>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center d-flex-row text-center">
            <div class="col-12 col-lg-4 h-50 ">
                <!--col-md-9 offset-md-4-->
                <div class="card shadow">
                    <div class="card-body mx-auto">
                        <form>
                            <div class="form-row">
                                <div class="form-group mb-3">
                                    <label >Prenom</label>
                                    <input type="text" class="form-control is-valid" name="First name" placeholder="Prenom" value="exemple" required>
                                    <div class="valid-feedback">
                                        semble correct
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label >Nom</label>
                                    <input type="text" class="form-control is-valid" name="Last name" placeholder="Nom" value="Otto" required>
                                    <div class="valid-feedback">
                                        semble correct
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <label >login</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend3">@</span>
                                        </div>
                                        <input type="text" class="form-control is-invalid" name="login" placeholder="Login" aria-describedby="inputGroupPrepend3" value="login" required>
                                        <div class="invalid-feedback">
                                            Votre login

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group mb-3">
                                    <label >Adresse complete</label>
                                    <input type="text" class="form-control is-invalid" name="adresse" placeholder="City" required>
                                    <div class="invalid-feedback">
                                        Donnez une adresse valide
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label >adresse complette des parents</label>
                                    <input type="text" class="form-control is-invalid" name="pays" placeholder="State" required>
                                    <div class="invalid-feedback">
                                        Donnez une adresse complette des parentsvalide
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label >ville</label>
                                    <input type="text" class="form-control is-invalid" name="pays" placeholder="State" required>
                                    <div class="invalid-feedback">
                                        Donnez une ville valide
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label >commune</label>
                                    <input type="text" class="form-control is-invalid" name="pays" placeholder="State" required>
                                    <div class="invalid-feedback">
                                        Donnez une commune valide
                                    </div>
                                </div>

                            </div>
                            <div class="form-group mb-3">
                                <div class="form-check mb-3">
                                    <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
                                    <label class="form-check-label" for="invalidCheck3">
                                        Agree to terms and conditions
                                    </label>
                                    <div class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include('footer.php');
?>