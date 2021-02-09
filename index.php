<?php
    // if(!empty($_GET['nome']) && !empty($_GET['select'])){
    //     $nome = $_GET['nome'];
    //     $select = $_GET['select'];
    // }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Votacao Frutas</title>
</head>
<body>
    <header>
        <div class="divNav">
            <nav><img src="./assets/GitHub-Mark github icone.png" alt="GitHub" class="gitHubNav"></nav>
            <nav><img src="" alt="Linkedin"></nav>
        </div>
    </header>
    <main>
        <div class="afterHeader">
            <div class="imagensDiv">
                <img src="./assets/mangaFrutaFoto.jpg " alt="Manga" class="fotoFruta">
                <img src="./assets/uvaFrutaFoto.jpg" alt="Uva" class="fotoFruta">
                <img src="./assets/laranjaFrutaFoto.jpg " alt="Laranja" class="fotoFruta">
            </div>
        </div>
        <div class="divForm">
            <form class="form" method="get">
                <input type="name" name="nome" placeholder="Seu Nome" class="inputInf">
                <select name="select" id="escolha" class="inputInf">
                    <option value="manga">manga</option>
                    <option value="uva">uva</option>
                    <option value="laranja">laranja</option>
                    </select>
                <input type="submit" class="inputInf">
            </form>
            <div class="tableDiv">
                <table class="table">
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
            </div>
        </div>
    </main>
    <script type="module" src="./script.js"></script>
</body>
</html>