<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/styles.css">
    <title>Jeu devine</title>
</head>

<body class="container mt-3">
    <h1 class="text-center my-4">Jeu devine</h1>
    <div class="row d-flex">
        <div class="col-3">
            <h3>Instructions :</h3>
            <ul>
                <li>Choisir un nombre entre 0 et 99</li>
                <li>Additionner les 2 chiffres</li>
                <li>Soustraire le nombre trouvé au premier choisi</li>
            </ul>
        </div>
        <div class="col-9">
            <table class="table">
                <tbody>
                    <?php for ($j = 0; $j < 1; $j++) : ?>
                        <tr>
                            <?php for ($i = 0; $i < 9; $i++) : ?>
                                <td scope="col" class="table-primary"><?= $i ?></td>
                                <td><?= genererChaineAleatoire(1) ?></td>
                            <?php endfor ?>
                            <td class="table-primary">9</td>
                            <td><?= $array[$letter] ?></td>
                        </tr>
                    <?php endfor ?>

                    <?php for ($j = 0; $j < 1; $j++) : ?>
                        <tr>
                            <?php for ($i = 10; $i < 18; $i++) : ?>
                                <td scope="col" class="table-primary"><?= $i ?></td>
                                <td><?= genererChaineAleatoire(1) ?></td>
                            <?php endfor ?>
                            <td class="table-primary">18</td>
                            <td><?= $array[$letter] ?></td>
                            <td class="table-primary">19</td>
                            <td><?= genererChaineAleatoire(1) ?></td>
                        </tr>
                    <?php endfor ?>

                    <?php for ($j = 0; $j < 1; $j++) : ?>
                        <tr>
                            <?php for ($i = 20; $i < 27; $i++) : ?>
                                <td scope="col" class="table-primary"><?= $i ?></td>
                                <td><?= genererChaineAleatoire(1) ?></td>
                            <?php endfor ?>
                            <td class="table-primary">27</td>
                            <td><?= $array[$letter] ?></td>
                            <?php for ($i = 28; $i < 30; $i++) : ?>
                                <td scope="col" class="table-primary"><?= $i ?></td>
                                <td><?= genererChaineAleatoire(1) ?></td>
                            <?php endfor ?>
                        </tr>
                    <?php endfor ?>

                    <?php for ($j = 0; $j < 1; $j++) : ?>
                        <tr>
                            <?php for ($i = 30; $i < 36; $i++) : ?>
                                <td scope="col" class="table-primary"><?= $i ?></td>
                                <td><?= genererChaineAleatoire(1) ?></td>
                            <?php endfor ?>
                            <td class="table-primary">36</td>
                            <td><?= $array[$letter] ?></td>
                            <?php for ($i = 37; $i < 40; $i++) : ?>
                                <td scope="col" class="table-primary"><?= $i ?></td>
                                <td><?= genererChaineAleatoire(1) ?></td>
                            <?php endfor ?>
                        </tr>
                    <?php endfor ?>

                    <?php for ($j = 0; $j < 1; $j++) : ?>
                        <tr>
                            <?php for ($i = 40; $i < 45; $i++) : ?>
                                <td scope="col" class="table-primary"><?= $i ?></td>
                                <td><?= genererChaineAleatoire(1) ?></td>
                            <?php endfor ?>
                            <td class="table-primary">45</td>
                            <td><?= $array[$letter] ?></td>
                            <?php for ($i = 46; $i < 50; $i++) : ?>
                                <td scope="col" class="table-primary"><?= $i ?></td>
                                <td><?= genererChaineAleatoire(1) ?></td>
                            <?php endfor ?>
                        </tr>
                    <?php endfor ?>

                    <?php for ($j = 0; $j < 1; $j++) : ?>
                        <tr>
                            <?php for ($i = 50; $i < 54; $i++) : ?>
                                <td scope="col" class="table-primary"><?= $i ?></td>
                                <td><?= genererChaineAleatoire(1) ?></td>
                            <?php endfor ?>
                            <td class="table-primary">54</td>
                            <td><?= $array[$letter] ?></td>
                            <?php for ($i = 55; $i < 60; $i++) : ?>
                                <td scope="col" class="table-primary"><?= $i ?></td>
                                <td><?= genererChaineAleatoire(1) ?></td>
                            <?php endfor ?>
                        </tr>
                    <?php endfor ?>

                    <?php for ($j = 0; $j < 1; $j++) : ?>
                        <tr>
                            <?php for ($i = 60; $i < 63; $i++) : ?>
                                <td scope="col" class="table-primary"><?= $i ?></td>
                                <td><?= genererChaineAleatoire(1) ?></td>
                            <?php endfor ?>
                            <td class="table-primary">63</td>
                            <td><?= $array[$letter] ?></td>
                            <?php for ($i = 64; $i < 70; $i++) : ?>
                                <td scope="col" class="table-primary"><?= $i ?></td>
                                <td><?= genererChaineAleatoire(1) ?></td>
                            <?php endfor ?>
                        </tr>
                    <?php endfor ?>

                    <?php for ($j = 0; $j < 1; $j++) : ?>
                        <tr>
                            <?php for ($i = 70; $i < 72; $i++) : ?>
                                <td scope="col" class="table-primary"><?= $i ?></td>
                                <td><?= genererChaineAleatoire(1) ?></td>
                            <?php endfor ?>
                            <td class="table-primary">72</td>
                            <td><?= $array[$letter] ?></td>
                            <?php for ($i = 73; $i < 80; $i++) : ?>
                                <td scope="col" class="table-primary"><?= $i ?></td>
                                <td><?= genererChaineAleatoire(1) ?></td>
                            <?php endfor ?>
                        </tr>
                    <?php endfor ?>

                    <?php for ($j = 0; $j < 1; $j++) : ?>
                        <tr>
                            <?php for ($i = 80; $i < 81; $i++) : ?>
                                <td scope="col" class="table-primary"><?= $i ?></td>
                                <td><?= genererChaineAleatoire(1) ?></td>
                            <?php endfor ?>
                            <td class="table-primary">81</td>
                            <td><?= $array[$letter] ?></td>
                            <?php for ($i = 82; $i < 90; $i++) : ?>
                                <td scope="col" class="table-primary"><?= $i ?></td>
                                <td><?= genererChaineAleatoire(1) ?></td>
                            <?php endfor ?>
                        </tr>
                    <?php endfor ?>

                    <?php for ($j = 0; $j < 1; $j++) : ?>
                        <tr>
                            <?php for ($i = 90; $i < 90; $i++) : ?>
                                <td scope="col" class="table-primary"><?= $i ?></td>
                                <td><?= genererChaineAleatoire(1) ?></td>
                            <?php endfor ?>
                            <td class="table-primary">90</td>
                            <td><?= $array[$letter] ?></td>
                            <?php for ($i = 91; $i < 100; $i++) : ?>
                                <td scope="col" class="table-primary"><?= $i ?></td>
                                <td><?= genererChaineAleatoire(1) ?></td>
                            <?php endfor ?>
                        </tr>
                    <?php endfor ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="text-center">
        <?php if ($letter === count($array) - 1) : ?>
            <a href="index.php" class="btn btn-primary">Recommencer</a>
        <?php else : ?>
            <a href="index.php?jeu=<?= $letter + 1 ?>" class="btn btn-primary">Recommencer</a>
        <?php endif ?>
    </div>


</body>

</html>