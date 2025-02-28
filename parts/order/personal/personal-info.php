<section class="personal-block personal-info">
    <h3>Informations personnelles</h3>

    <div class="personal-block__inner">
        <div class="form-line">
            <label class="form-line__title">Civilité <span class="red">*</span></label>

            <div class="form-line__content">
                <label class="radio">
                    <input type="radio" name="sex" value="f">
                    <span>Madame</span>
                </label>
                <label class="radio">
                    <input type="radio" name="sex" value="m">
                    <span>Monsieur</span>
                </label>
            </div>    
        </div>
        <div class="form-line">
            <label for="first-name" class="form-line__title">Prénom <span class="red">*</span></label>
            <input id="first-name" type="text" name="firstName" autocomplete="given-name" required>
        </div>
        <div class="form-line">
            <label for="last-name" class="form-line__title">Nom <span class="red">*</span></label>
            <input id="last-name" type="text" name="lastName" autocomplete="family-name" required>
        </div>
        <div class="form-line">
            <label for="birth-date" class="form-line__title">Date de naissance <span class="red">*</span></label>
            <input id="birth-date" type="text" name="birthDate" placeholder="JJ/MM/AAAA" maxlength="10" required>
        </div>
        <div class="form-line">
            <label for="birth-region" class="form-line__title">Département de naissance <span class="red">*</span></label>
            <input id="birth-region" type="text" name="birthRegion" autocomplete="off" required>
        </div>
        <div class="form-line">
            <label for="birth-country" class="form-line__title">Pays de naissance <span class="red">*</span></label>
            <input id="birth-country" type="text" name="birthCountry" autocomplete="off">
        </div>
        <div class="form-line">
            <label for="birth-city" class="form-line__title">Ville de naissance <span class="red">*</span></label>
            <input id="birth-city" type="text" name="birthCity" autocomplete="address-level2">
        </div>
        <div class="form-line">
            <label for="last-name" class="form-line__title">Société (facultatif)</label>
            <input id="last-name" type="text" name="lastName" autocomplete="organization">
        </div>
        <div class="form-line">
            <label for="phone" class="form-line__title">Numéro de contact <span class="red">*</span></label>
            <input id="phone" type="text" name="phoneNumber" autocomplete="tel" required>
        </div>
        <div class="form-line">
            <label for="email" class="form-line__title">Email <span class="red">*</span></label>
            <input id="email" type="text" name="email" autocomplete="email">

            <div class="note">
                <i>i</i>
                <span>Votre confirmation de commande et vos identifiants vous seront envoyés à l'adresse email renseignée ci-dessus. Vous devez donc en être titulaire et pouvoir y accéder.</span>
            </div>
        </div>
        <div class="form-line">
            <label for="email-confirm" class="form-line__title">Confirmez votre email <span class="red">*</span></label>
            <input id="email-confirm" type="text" name="emailConfirm" autocomplete="email">
        </div>
    </div>
</section>