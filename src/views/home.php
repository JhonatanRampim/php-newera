<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        table tr th,
        table tr td {
            padding: 5px;
            border: 1px #eee solid;
        }

        tfoot tr th,
        tfoot tr td {
            font-size: 20px;
        }

        tfoot tr th {
            text-align: right;
        }

        .expense {
            color: red;
        }

        .income {
            color: green;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Check #</th>
                <th>Description</th>
                <th>Amount</th>
            </tr>
        </thead>
        <?php foreach ($expenseData as $key => $body) : ?>
            <tbody>
                <tr>
                    <td><?= date('M d, Y', strtotime($body['date'])); ?></td>
                    <td><?= $body['check'] ?></td>
                    <td><?= $body['description'] ?></td>
                    <?php if ($body['amount'] < 0) : ?>
                        <td class="expense"><?= addDollarSign($body['amount']) ?></td>
                    <?php elseif ($body['amount'] > 0) : ?>
                        <td class="income"><?= addDollarSign($body['amount']) ?></td>
                    <?php else : ?>
                        <td><?= addDollarSign($body['amount']) ?></td>
                    <?php endif; ?>
                </tr>
            </tbody>
        <?php endforeach; ?>
        <tfoot>
            <tr>
                <th colspan="3">Total Income:</th>
                <td class="income">
                    <?= addDollarSign(($totals['income'])) ?? 0 ?>
                </td>
            </tr>
            <tr>
                <th colspan="3">Total Expense:</th>
                <td class="expense">
                    <?= addDollarSign(($totals['expense'])) ?? 0 ?>
                </td>
            </tr>
            <tr>
                <th colspan="3">Net Total:</th>
                <?php if (isset($totals['net'])) : ?>
                    <td <?= ($totals['net'] > 0) ? 'class="income"' : 'class="expense"' ?>>
                        <?= addDollarSign($totals['net']) ?>
                    </td>
                <?php endif; ?>
            </tr>
        </tfoot>
    </table>
</body>

</html>