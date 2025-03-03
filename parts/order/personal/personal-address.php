<section class="personal-block personal-info">
    <h3>Votre adresse postale</h3>

    <div class="personal-block__inner">
        <div class="form-line">
            <label for="house-number" class="form-line__title" data-name="numéro de voie">Numéro de voie <span class="red">*</span></label>
            <input id="house-number" type="text" name="houseNumber" placeholder="Ex : 15" autocomplete="address-level4" required>
        </div>
        <div class="form-line">
            <label for="street-type" class="form-line__title" data-name="type de voie">Type de voie <span class="red">*</span></label>
            <input id="street-type" type="text" name="streetType" placeholder="Ex : Rue" autocomplete="address-level3" required>
        </div>
        <div class="form-line">
            <label for="street-name" class="form-line__title" data-name="nom de voie">Nom de voie <span class="red">*</span></label>
            <input id="street-name" type="text" name="streetName" placeholder="Ex : Victor Hugo" autocomplete="address-level3" required>
        </div>
        <div class="form-line">
            <label for="postal-code" class="form-line__title" data-name="code postal">Code postal <span class="red">*</span></label>
            <input id="postal-code" type="text" name="postalCode" placeholder="Ex : 34000" autocomplete="postal-code" required>
        </div>
        <div class="form-line">
            <label for="city-name" class="form-line__title" data-name="ville">Ville <span class="red">*</span></label>
            <input id="city-name" type="text" name="cityName" autocomplete="off" required>
        </div>
        <div class="form-line full-line">
            <label for="full-address" class="form-line__title">Complément d'adresse (facultatif)</label>
            <input id="full-address" type="text" name="fullAddress" autocomplete="off">
        </div>
    </div>
</section>