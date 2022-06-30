<form>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label >Prenom</label>
            <input type="text" class="form-control is-valid" name="First name" placeholder="Prenom" value="Prenom" required>
            <div class="valid-feedback">
                semble correct
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label >Nom</label>
            <input type="text" class="form-control is-valid" name="Last name" placeholder="Nom" value="Nom" required>
            <div class="valid-feedback">
                semble correct
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label >date de naissance</label>
            <select id="inputJour" class="form-control">
                <option selected> jour</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>13</option>
                <option>14</option>
                <option>15</option>
                <option>16</option>
                <option>17</option>
                <option>18</option>
                <option>19</option>
                <option>20</option>
                <option>21</option>
                <option>22</option>
                <option>23</option>
                <option>24</option>
                <option>25</option>
                <option>26</option>
                <option>27</option>
                <option>28</option>
                <option>29</option>
                <option>30</option>
                <option>31</option>
            </select>
            <select id="inputMois" class="form-control">
                <option selected> Mois</option>
                <option>JANVIER</option>
                <option>FEVRIER</option>
                <option>MARS</option>
                <option>AVRIL</option>
                <option>MAI</option>
                <option>JUIN</option>
                <option>JUILLET</option>
                <option>AOUT</option>
                <option>SEPTEMBRE</option>
                <option>OCTOBRE</option>
                <option>NOVEMBRE</option>
                <option>DECEMBRE</option>
            </select>
            <select id="inputAnnee" class="form-control">
                <option selected>Annee </option>
                <option>1994</option>
                <option>1995</option>
                <option>1996</option>
                <option>1997</option>
                <option>1998</option>
                <option>1999</option>
                <option>2000</option>
                <option>2001</option>
                <option>2002</option>
                <option>2003</option>
                <option>2004</option>
            </select>
            <input type="text" class="form-control is-invalid" name="pays" placeholder="State" required>
            <div class="invalid-feedback">
                Donnez une date valide
            </div>
        </div>

        <div class="col-md-4 mb-3">
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
        <div class="col-md-6 mb-3">
            <label >Adresse complete</label>
            <input type="text" class="form-control is-invalid" name="adresse" placeholder="pays" required>
            <input type="text" class="form-control" placeholder="ville"name="ville"placeholder="ville" required>
            <input type="text" class="form-control" placeholder="commune"name="communee"placeholder="commune" required>
            <div class="invalid-feedback">
                Donnez une adresse valide
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label >adresse complette des parents</label>
            <input type="text" class="form-control is-invalid" name="pays1" placeholder="pays" required>
            <input type="text" class="form-control" placeholder="ville"name="ville" required>
            <input type="text" class="form-control" placeholder="commune"name="communee1" required>

            <div class="invalid-feedback">
                Donnez une adresse complette des parentsvalide
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <label >commune</label>
            <input type="text" class="form-control is-invalid" name="pays" placeholder="State" required>
            <div class="invalid-feedback">
                Donnez une commune valide
            </div>
        </div>

    </div>
    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
            <label class="form-check-label" for="invalidCheck3">
                Agree to terms and conditions
            </label>
            <div class="invalid-feedback">
                You must agree before submitting.
            </div>
        </div>
    </div>
    <button class="btn btn-primary" type="submit">Suivant</button>
</form>