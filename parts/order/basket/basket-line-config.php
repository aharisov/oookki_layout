<section class="basket-block line-config-block">
    <h3>Configuration de ma ligne</h3>

    <div class="config-options accordion-container">
        <input type="radio" id="phone-save-yes" name="phone_save" value="yes" checked>
        <div class="config-option accordion-item active">
            <div class="switch accordion-head">
                <label for="phone-save-yes">Je conserve mon numéro actuel</label>
                <i class="note">OOOKKI se charge de demander la résiliation et la portabilité de votre n° auprès de votre opérateur actuel.</i>
            </div>
            <div class="accordion-content">
                <div class="number-info">
                    <div class="form-line">
                        <label for="phone-number">Numéro de téléphone à conserver <span class="red">*</span></label>
                        <input id="phone-number" type="text" name="phoneNumber" placeholder="Ex : 06 00 00 00 00" maxlength="14" autocomplete="off">
                    </div>
                    <div class="form-line">
                        <label for="phone-rio">Numéro RIO <span class="red">*</span></label>
                        <input id="phone-rio" type="text" name="phoneRio" placeholder="Ex : 03 P 18XXXX 7F6" maxlength="15" autocomplete="off">
                        
                        <div class="note">
                            <i>i</i>
                            <span>Pour obtenir votre RIO, appelez gratuitement le 3179 depuis le téléphone dont vous souhaitez porter le numéro.</span>
                        </div>
                    </div>
                    <button type="button" class="btn btn-black__empty more-info open-modal" data-modal="number-transfer-modal">En savoir plus sur le transfert de numéro <i class="fa-solid fa-angles-right"></i></button>
                </div>
            </div>
        </div>
        <input type="radio" id="phone-save-no" name="phone_save" value="no">
        <div class="config-option accordion-item">
            <div class="switch accordion-head">
                <label for="phone-save-no">Je change le numéro</label>
                <i class="note">Un nouveau numéro vous sera attribué immédiatement après votre souscription.</i>
            </div>
        </div>
    </div>
</section>