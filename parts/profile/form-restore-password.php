<form id="restore-form" class="restore-form auth-form" method="post">
    <div class="form-title">
        <i class="fa-solid fa-key"></i>
        <h1>Mot de passe oublié ?</h1>
    </div>
    <p class="top-note">Veuillez renseigner l'adresse e-mail que vous avez utilisée à la création de votre compte. Vous recevrez un lien temporaire pour réinitialiser votre mot de passe.</p>
    <div class="form-line">
        <label for="field-email" class="form-line__title" data-name="e-mail">Votre adresse e-mail <span class="red">*</span></label>
        <input id="field-email" class="form-control" name="email" type="email" value="" required="">
    </div>
    
    <div class="form-line">
        <button id="submit-restore" class="btn btn-black" type="submit">
          Envoyer un lien de réinitialisation
        </button>
    </div>
    
    <div class="form-note success">Si cette adresse e-mail est enregistrée dans notre boutique, vous recevrez un lien pour réinitialiser votre mot de passe sur <span></span>.</div>
    <div class="form-note"><span class="red">*</span> Champs obligatoires</div>
</form>