
<body>
      <div class="text-center   d-flex flex-column ">
        <table  >
            <h1>Liste des commandes</h1>
            <thead>
                <tr>
                    <th>Commande</th>
                    <th>Date de la commande</th>
                    <th>Date de livraison</th>
                    <th>Statut</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($orders as $order): ?>
                    <tr>
                        <td>
                            <a href="order-form.php?orderNumber=<?= $order['orderNumber'] ?>"><?= $order['orderNumber'] ?></a>
                        </td>
                        <td><?= $order['orderDate'] ?></td>
                        <td><?= $order['shippedDate'] ?></td>
                        <td><?= $order['status'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
            </table>
      </div>
