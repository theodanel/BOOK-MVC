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

        .bg-dark {
            background-color: red;
        }

        .bg-light {
            background-color: blue;
        }
    </style>
</head>
<body>
    <h1>Grille de multiplication</h1>

    <table>
        <tr>
            <th class="legend-bottom legend-right bg-light">x</th>
            <?php for ($i = 0; $i <= 10; $i++) {
                /*
                if (true) {
                    echo 'A';
                } else {
                    echo 'B';
                }

                echo true ? 'A' : 'B'; // Opérateur ternaire
                */
                ?>
                <th class="legend-bottom <?= $i % 2 ? 'bg-light' : ''; ?>"><?= $i; ?></th>
            <?php } ?>
        </tr>
        <?php for ($row = 0; $row <= 10; $row++) { ?>
            <tr>
                <th class="legend-right <?= $row % 2 ? 'bg-light' : ''; ?>"><?= $row; ?></th>
                <?php for ($col = 0; $col <= 10; $col++) {
                    // Ici je fais la logique pour avoir la bonne classe en fonction du nombre
                    $class = '';

                    if ($row == $col) {
                        $class = 'bg-dark';
                    } else if ($row % 2 == $col % 2) { // Si on est sur 2 valeurs paires ou 2 valeurs impaires
                        $class = 'bg-light';
                    }
                ?>
                    <td class="<?= $class; ?>"><?= $row * $col; ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
