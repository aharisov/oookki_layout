<section class="orders-list">
    <h3>Vous trouverez ici vos commandes passées depuis la création de votre compte</h3>

    <table class="orders-table">
        <thead class="hidden-xs">
            <tr>
                <th>Référence de commande</th>
                <th>Date</th>
                <th>Prix total</th>
                <th class="hidden-md-down">Paiement</th>
                <th class="hidden-md-down">État</th>
                <th>Facture</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">PDXUFISVW</th>
                <td>04/03/2025</td>
                <td class="text-xs-right">34,80&nbsp;€</td>
                <td class="hidden-xs">Paiement en 4 fois</td>
                <td>
                    <span class="order-status status-payed">
                        Paiement accepté
                    </span>
                </td>
                <td class="order-bill">
                    <a href="../images/demo/FA000001.pdf" target="_blank"><i class="fa-solid fa-file-pdf"></i></a>
                </td>
                <td class="order-actions">
                    <span class="inner">
                        <a class="btn btn-black__empty" href="order-details.php" data-link-action="view-order-details">
                            Détails
                        </a>
                        <a class="reorder-link link" href="../order-step1.php"><i class="fa-solid fa-rotate-right"></i> Commander à nouveau</a>
                    </span>
                </td>
            </tr>
            <tr>
                <th scope="row">KLUQQZBCU</th>
                <td>27/01/2025</td>
                <td class="text-xs-right">68,93&nbsp;€</td>
                <td class="hidden-xs">Transfert bancaire</td>
                <td>
                    <span class="order-status status-created">
                        En attente de virement bancaire
                    </span>
                </td>
                <td class="order-bill hidden-xs">
                                -
                </td>
                <td class="order-actions">
                    <span class="inner">
                        <a class="btn btn-black__empty" href="order-details.php" data-link-action="view-order-details">
                            Détails
                        </a>
                        <a class="reorder-link link" href="../order-step1.php"><i class="fa-solid fa-rotate-right"></i> Commander à nouveau</a>
                    </span>
                </td>
            </tr>
        </tbody>
    </table>
</section>