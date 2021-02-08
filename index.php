<?php
    $nome = $_GET['nome'];
    $select = $_GET['select'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Votacao Frutas</title>
</head>
<body>
    <header>

    </header>
    <main>
        <div class="imagensDiv">
            <img src="" alt="Manga">
            <img src="" alt="Uva">
            <img src="" alt="Laranja">
        </div>
        <div>
            <form action="index.php" method="get">
                <input type="name" name="nome" placeholder="Nome">
                <select name="select" id="escolha"></select>
                    <option value="manga">manga</option>
                    <option value="uva">uva</option>
                    <option value="laranja">laranja</option>
            </form>
        </div>
        <!-- <div>
            <table>
                <tr>
                    <th>Fruta</th>
                    <th>Votos</th>
                </tr>
                <?php
                    // foreach(getVotos() as $votos){
                    //     echo "<td>$votos[fruta]</td>
                    //         <td>$votos[votos]</td>"
                    // }
                ?>
            </table>
        </div> -->
    </main>
    <script type="module" src="./script.js"></script>
</body>
</html>