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
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <?php foreach ($tableHeader  as $key => $header) : ?>
                    <th><?= $header ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <?php foreach ($tableBody as $key => $body) : ?>
            <tbody>
                <tr>
                    <td><?= date('M d, Y', strtotime($body[0])); ?></td>
                    <td><?= $body[1] ?></td>
                    <td><?= $body[2] ?></td>
                    <td><?= $body[3] ?></td>
                </tr>
            </tbody>
        <?php endforeach; ?>
        <tfoot>
            <tr>
                <th colspan="3">Total Income:</th>
                <td>
                    <!-- YOUR CODE -->
                </td>
            </tr>
            <tr>
                <th colspan="3">Total Expense:</th>
                <td>
                    <!-- YOUR CODE -->
                </td>
            </tr>
            <tr>
                <th colspan="3">Net Total:</th>
                <td>
                    <!-- YOUR CODE -->
                </td>
            </tr>
        </tfoot>
    </table>
</body>

</html>