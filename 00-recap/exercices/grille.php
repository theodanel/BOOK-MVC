<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grille de multiplication</title>
    <style>
        table {
            border: 1px solid #000;
            border-collapse: collapse;
        }

        th, td {
            text-align: center;
            width: 25px;
            height: 25px;
        }

        .legend-right {
            border-right: 1px solid #000;
        }

        .legend-bottom {
            border-bottom: 1px solid #000;
        }
    </style>
</head>
<body>
    <h1>Grille de multiplication</h1>

    <table>
        <tr>
            <th class="legend-bottom legend-right">x</th>
            <?php for ($i = 0; $i <= 10; $i++) { ?>
                <th class="legend-bottom"><?= $i; ?></th>
            <?php } ?>
        </tr>
        <?php for ($row = 0; $row <= 10; $row++) { ?>
            <tr>
                <th class="legend-right"><?= $row; ?></th>
                <?php for ($col = 0; $col <= 10; $col++) { ?>
                    <td><?= $row * $col; ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
