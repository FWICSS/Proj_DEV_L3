<?php
include_once('header.php');
?>
<form>
<div class="form-row">
    <div class="col-md-4 mb-3">
        <label >baccalaureat</label>
        <input type="text" class="form-control is-valid" name="baccalaureat" placeholder="baccalaureat" value="baccalaureat" required>
        <div class="valid-feedback">
            semble correct
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <label>Ier Cycle</label>
        <input type="text" class="form-control is-valid" name="Ier Cycle" placeholder="Ier Cycle" value="Ier Cycle" required>
        <div class="valid-feedback">
            semble correct
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <label>Diplomes</label>
        <input type="text" class="form-control is-valid" name="Diplomes" placeholder="Diplomes" value="Diplomes" required>
        <div class="valid-feedback">
            semble correct
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <label>si oui lesquel</label>
        <input type="text" class="form-control is-valid" name="si oui lesquel" placeholder="si oui lesquel" value="si oui lesquel" required>
        <div class="valid-feedback">
            semble correct
        </div>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
        <label class="custom-control-label" for="customRadioInline1">oui</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
        <label class="custom-control-label" for="customRadioInline2">non</label>
    </div>

    <div class="col-md-4 mb-3">
        <label>si oui lesquel</label>
        <input type="text" class="form-control is-valid" name="entreprise" placeholder="entreprise" value="entreprise" required>
        <div class="valid-feedback">
            semble correct
        </div>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="customRadioInline3" name="customRadioInline2" class="custom-control-input">
        <label class="custom-control-label" for="customRadioInline1">oui</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="customRadioInline4" name="customRadioInline2" class="custom-control-input">
        <label class="custom-control-label" for="customRadioInline2">non</label>
    </div>




</div>

</form>
<?php
include('footer.php');
?>