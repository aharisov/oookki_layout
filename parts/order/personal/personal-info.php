<section class="personal-block personal-info">
    <h3>Informations personnelles</h3>

    <div class="personal-block__inner">
        <div class="form-line full-line">
            <label class="form-line__title" data-name="civilité">Civilité <span class="red">*</span></label>

            <div class="form-line__content radio-group">
                <label class="radio">
                    <input type="radio" name="sex" value="f" required>
                    <span>Madame</span>
                </label>
                <label class="radio">
                    <input type="radio" name="sex" value="m" required>
                    <span>Monsieur</span>
                </label>
            </div>    
        </div>
        <div class="form-line">
            <label for="first-name" class="form-line__title" data-name="prénom">Prénom <span class="red">*</span></label>
            <input id="first-name" type="text" name="firstName" autocomplete="given-name" required>
        </div>
        <div class="form-line">
            <label for="last-name" class="form-line__title" data-name="nom">Nom <span class="red">*</span></label>
            <input id="last-name" type="text" name="lastName" autocomplete="family-name" required>
        </div>
        <div class="form-line">
            <label for="birth-date" class="form-line__title" data-name="date de naissance">Date de naissance <span class="red">*</span></label>
            <input id="birth-date" type="text" name="birthDate" placeholder="JJ/MM/AAAA" maxlength="10" required>
        </div>
        <div class="form-line with-list">
            <label for="birth-region" class="form-line__title" data-name="département de naissance">Département de naissance <span class="red">*</span></label>
            <div class="inner">
                <input id="birth-region" type="text" name="birthRegion" autocomplete="off" required>
                <ul id="region-datalist" class="datalist" aria-hidden="true"></ul>
            </div>
        </div>
        <div class="form-line with-list country-select" aria-hidden="true">
            <label for="birth-country" class="form-line__title" data-name="pays de naissance">Pays de naissance <span class="red">*</span></label>
            <div class="inner">
                <input id="birth-country" type="text" name="birthCountry" autocomplete="off">
                <ul id="country-datalist" class="datalist" aria-hidden="true"></ul>
            </div>
        </div>
        <div class="form-line birth-city-select">
            <label for="birth-city" class="form-line__title" data-name="ville de naissance">Ville de naissance <span class="red">*</span></label>
            <input id="birth-city" type="text" name="birthCity" autocomplete="address-level2">
        </div>
        <div class="form-line">
            <label for="phone-number" class="form-line__title" data-name="numéro de contact">Numéro de contact <span class="red">*</span></label>
            <input id="phone-number" type="text" name="phoneNumber" placeholder="Ex : 07 00 01 02 03" autocomplete="tel" required>
        </div>
        <div class="form-line">
            <label for="email" class="form-line__title" data-name="email">Email <span class="red">*</span></label>
            <input id="email" type="email" name="email" placeholder="Ex : email@gmail.com" autocomplete="email" required>
        </div>
        <div class="form-line">
            <label for="email-confirm" class="form-line__title" data-name="email">Confirmez votre email <span class="red">*</span></label>
            <input id="email-confirm" type="email" name="emailConfirm" autocomplete="email" required>
        </div>
        <div class="form-line full-line">
            <div class="note">
                <i>i</i>
                <span>Votre confirmation de commande et vos identifiants vous seront envoyés à l'adresse email renseignée ci-dessus. Vous devez donc en être titulaire et pouvoir y accéder.</span>
            </div>
        </div>
        <div class="form-line">
            <label for="last-name" class="form-line__title">Société (facultatif)</label>
            <input id="last-name" type="text" name="lastName" autocomplete="organization">
        </div>
    </div>
</section>