<link rel="stylesheet" href="/css/styles.css">
<form method="post" class="auth-form">
    <div class="form-line">
        <label for="login">Identifiant OOOKKI</label>
        <input type="text" name="login" id="login" placeholder="Votre adresse mail" tabindex="0">
    </div>
    <div class="form-line">
        <label for="login">Mot de pass</label>
        <input type="password" name="password" id="password" tabindex="1" autocomplete="off">
    </div>
    <div class="form-line btn-submit-wrap">
        <button type="submit" class="btn btn-black" tabindex="3">Se connecter</button>   
    </div>
    <a href="" target="_blank" class="link">Mot de passe oublié ?</a>
    <p class="note">En cliquant sur « se connecter » vous acceptez que vos informations personnelles soient récupérées de votre compte OOOKKI (votre nom et prénom, votre adresse mail et postale)</p>
</form>

<style>
    body {
        background: none;
    }
    .auth-form {
        background: none;
        box-shadow: none;
    }
</style>