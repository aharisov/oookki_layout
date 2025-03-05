<form id="register-form" class="signup-form auth-form personal-form" method="post">
    <div class="form-title">
        <i class="fa-solid fa-id-card"></i>
        <h2>Modifier mon compte OOOKKI</h2>
    </div>
    <p class="top-note">Ici vous pouvez modifier vos données personnelles.</p>
    <div class="form-line full-line">
            <label class="form-line__title" data-name="civilité">Civilité</label>

        <div class="form-line__content radio-group">
            <label class="radio">
                <input type="radio" name="sex" value="f">
                <span>Madame</span>
            </label>
            <label class="radio">
                <input type="radio" name="sex" value="m" checked>
                <span>Monsieur</span>
            </label>
        </div>    
    </div>
    <div class="form-line">
        <label for="field-firstname" class="form-line__title" data-name="prénom">Votre prénom <span class="red">*</span></label>
        <input id="field-firstname" name="firstname" type="text" value="Dominique" required="">
        <div class="note"><i>i</i>Seules les lettres et le point (.), suivi d'un espace, sont autorisés.</div>
    </div>
    <div class="form-line">
        <label for="field-lastname" class="form-line__title" data-name="nom">Votre nom <span class="red">*</span></label>
        <input id="field-lastname" class="form-control" name="lastname" type="text" value="Goulet" required="">
        <div class="note"><i>i</i>Seules les lettres et le point (.), suivi d'un espace, sont autorisés.</div>
    </div>
    <div class="form-line">
        <label for="birth-date">Votre date de naissance</label>
        <input id="birth-date" name="birthday" type="text" value="" placeholder="JJ/MM/AAAA">
    </div>
    <div class="form-line">
        <label for="field-email" class="form-line__title" data-name="e-mail">Votre e-mail <span class="red">*</span></label>
        <input id="field-email" class="form-control" name="email" type="email" value="monmail@gmail.com" required="">
    </div>
    <div class="form-line">
        <div class="inner">
            <label for="field-password" class="form-line__title" data-name="mot de passe">Votre mot de passe <span class="red">*</span></label>
            <input id="field-password" class="form-control js-child-focus js-visible-password" name="password" aria-label="Saisie du mot de passe" type="password" data-minlength="8" data-maxlength="72" data-minscore="3" autocomplete="current-password" value="" pattern=".{5,}" required="">
            <button type="button" class="btn btn-black js-toggle-pass">
                <i class="fa-solid fa-eye"></i>
                <i class="fa-solid fa-eye-slash"></i>
            </button>
        </div>
    </div>
    <div class="form-line">
        <div class="inner">
            <label for="field-new_password" class="form-line__title" data-name="mot de passe">Nouveau mot de passe</label>
            <input id="field-new_password" class="form-control js-child-focus js-visible-password" name="password" aria-label="Saisie du mot de passe" type="password" data-minlength="8" data-maxlength="72" data-minscore="3" autocomplete="current-password" value="" pattern=".{5,}" data-original-title title>
            <button type="button" class="btn btn-black js-toggle-pass">
                <i class="fa-solid fa-eye"></i>
                <i class="fa-solid fa-eye-slash"></i>
            </button>
        </div>
    </div>
    <div class="check-block">
        <div class="form-line with-checkbox">
            <label for="optin">
                <input name="optin" id="optin" type="checkbox" value="1">
                <span>Recevoir les offres de nos partenaires</span>
            </label>
        </div>
        <div class="form-line with-checkbox">
            <label for="psgdpr">
                <input name="psgdpr" id="psgdpr" type="checkbox" value="1" required="">
                <span>J'accepte les conditions générales et la politique de confidentialité <i class="red">*</i> </span>
            </label>
        </div>
        <div class="form-line with-checkbox">
            <label for="newsletter">
                <input name="newsletter" id="newsletter" type="checkbox" value="1">
                <span>Recevoir notre newsletter</span>
            </label>
            <div class="note"><i>i</i> Vous pouvez vous désinscrire à tout moment. Vous trouverez pour cela nos informations de contact dans les conditions d'utilisation du site.</div>
        </div>
        <div class="form-line with-checkbox">
            <label for="customer_privacy">
                <input name="customer_privacy" id="customer_privacy" type="checkbox" value="1" required="">
                <span>Message concernant la confidentialité des données clients <i class="red">*</i></span>
            </label>
            <div class="note"><i>i</i> Les données personnelles que vous nous fournissez sont utilisées pour répondre à vos questions, traiter vos commandes ou permettre l'accès à des informations spécifiques. Vous avez le droit de modifier et de supprimer toutes les informations personnelles figurant dans la page « Mon compte ».</div>
        </div>
    </div>
    
    <div class="form-line">
        <button id="submit-register" class="btn btn-black" type="submit">
            Enregistrer
        </button>
    </div>
    <div class="form-note success"></div>
    <div class="form-note"><span class="red">*</span> Champs obligatoires</div>
</form>