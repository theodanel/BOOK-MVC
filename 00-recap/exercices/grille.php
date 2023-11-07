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

        td {
            text-align: center;
            width: 25px;
            height: 25px;
        }
    </style>
</head>
<body>
    <h1>Grille de multiplication</h1>

    <table>
        <?php for ($row = 0; $row <= 10; $row++) { ?>
            <tr>
                <?php for ($col = 0; $col <= 10; $col++) { ?>
                    <td><?= $row * $col; ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
