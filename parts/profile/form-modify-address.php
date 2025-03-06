<form id="address-form" class="address-form auth-form personal-form" method="post">
    <div class="form-line full-line">
        <label for="field-alias" class="form-line__title" data-name="prénom">Titre</label>
        <input id="field-alias" class="form-control" name="alias" type="text" value="Mon adresse" maxlength="32">
    </div>
    <div class="form-line">
        <label for="field-firstname" class="form-line__title" data-name="prénom">Prénom <span class="red">*</span></label>
        <input id="field-firstname" name="firstname" type="text" value="Dominique" required="">
    </div>
    <div class="form-line">
        <label for="field-lastname" class="form-line__title" data-name="nom">Nom <span class="red">*</span></label>
        <input id="field-lastname" class="form-control" name="lastname" type="text" value="Goulet" required="">
    </div>
    <div class="form-line">
        <label for="field-company">Société</label>
        <input id="field-company" class="form-control" name="company" type="text" value="" maxlength="255">
    </div>
    <div class="form-line">
        <label for="field-vat_number">Numéro de TVA</label>
        <input id="field-vat_number" class="form-control" name="vat_number" type="text" value="">
    </div>
    <div class="form-line">
        <label for="field-address1" class="form-line__title" data-name="adresse">Adresse <span class="red">*</span></label>
        <input id="field-address1" class="form-control" name="address1" type="text" value="45 avenue de la gare" maxlength="128" required="">
    </div>
    <div class="form-line">
        <label for="field-address2">Complément d'adresse</label>
        <input id="field-address2" class="form-control" name="address2" type="text" value="" maxlength="128">
    </div>
    <div class="form-line">
        <label for="field-postcode" class="form-line__title" data-name="code postal">Code postal <span class="red">*</span></label>
        <input id="field-postcode" class="form-control" name="postcode" type="text" value="34500" maxlength="12" required="">
    </div>
    <div class="form-line">
        <label for="field-city" class="form-line__title" data-name="ville">Ville <span class="red">*</span></label>
        <input id="field-city" class="form-control" name="city" type="text" value="BEZIERS" maxlength="64" required="">
    </div>
    <div class="form-line">
        <label for="field-country" class="form-line__title" data-name="pays">Pays <span class="red">*</span></label>
        <input id="field-country" class="form-control" name="country" type="text" value="France" maxlength="64" required="">
    </div>
    <div class="form-line">
        <label for="phone-number">Téléphone</label>
        <input id="phone-number" class="form-control" name="phone" type="text" placeholder="Ex : 07 00 01 02 03" value="" maxlength="32">
    </div>
    
    <div class="form-note success"></div>
    <div class="form-note"><span class="red">*</span> Champs obligatoires</div>
    
    <div class="form-line button-line">
        <button id="submit-address" class="btn btn-black" type="submit">
            Enregistrer
        </button>
    </div>
</form>