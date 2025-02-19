<section class="basket-block line-config-block">
    <h3>Choix de ma carte SIM</h3>
    <p class="sub-title">Votre nouveau téléphone est compatible avec les formats de SIM suivants, veuillez choisir celui qui vous convient.</p>

    <div class="config-options">
        <div class="config-option">
            <input type="radio" name="card" id="sim-card" value="sim">
            <label class="switch active" for="sim-card">
                <img src="images/ic-sim.svg" alt="SIM">
                <p>Carte SIM</p>
                <i class="note promo">Offerte</i>
            </label>
            <p class="config-text">Livrée avec votre téléphone (le délai de livraison sera calculé à l'étape livraison).</p>
        </div>
        <div class="config-option">
            <input type="radio" name="card" id="esim-card" value="esim">
            <label class="switch" for="esim-card">
                <img src="images/ic-esim.svg" alt="SIM">
                <p>Carte eSIM</p>
                <i class="note promo">Offerte</i>
            </label>
            <p class="config-text">Disponible dès le transfert de votre numéro effectué. Vous recevrez un SMS vous informant de la date de portabilité.</p>
        </div>
    </div>

    <div class="number-info" aria-hidden="false">
        <form>
            <div class="form-line">
                <label for="phone-number">
                    <p>Numéro de téléphone à conserver <span class="red">*</span></p>
                    <input id="phone-number" type="text" name="phoneNumber" placeholder="Ex : 06 00 00 00 00" maxlength="14" autocomplete="off">
                </label>
            </div>
            <div class="form-line">
                <label for="phone-rio">
                    <p>Numéro RIO <span class="red">*</span></p>
                    <input id="phone-rio" type="text" name="phoneRio" placeholder="Ex : 03 P 18XXXX 7F6" maxlength="15" autocomplete="off">
                </label>
                <div class="note">
                    <i>i</i>
                    <span>Pour obtenir votre RIO, appelez gratuitement le 3179 depuis le téléphone dont vous souhaitez porter le numéro.</span>
                </div>
            </div>
        </form>
        <button type="button" class="more-info">En savoir plus sur le transfert de numéro</button>
    </div>
</section>