<form id="auth-form" class="signin-form auth-form" method="post">
    <div class="form-title">
        <i class="fa-solid fa-user-pen"></i>
        <h1>Connectez-vous à votre compte</h1>
    </div>
    <div class="form-line">
        <label for="field-email" class="form-line__title" data-name="e-mail">Votre e-mail <span class="red">*</span></label>
        <input id="field-email" class="form-control" name="email" type="email" placeholder="Ex : pauline.s@gmail.com" autocomplete="email" required="">
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
        <div class="note">
            <a href="restore-password.php" class="link">Mot de passe oublié ?</a>
        </div>
    </div>
    <div class="form-line button-line">
        <button id="submit-login" class="btn btn-black" type="submit">
            Connexion
        </button>
        <p>
            <a href="register.php" class="link">Pas de compte ? Créez-en un</a>
        </p>
    </div>
</form>