<?php
require './dataBase.php';
$pdo = new DataBase();

    if(!empty($_POST['nome']) && !empty($_POST['select'])){
        $nome = $_POST['nome'];
        $select = $_POST['select'];
        $pdo->inserir($nome,$select);
    }else{

    };
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
        <nav class="divNav">
            <a href="https://github.com/renandefariazk"><img src="./assets/GitHub-Mark github icone.png" alt="GitHub" class="iconNav"></a>
            <img src="./assets/linkedinIcon.png" alt="Linkedin" class="iconNav">
    </nav>
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
            <form class="form" method="post">
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
                        <th class="tableItens">Fruta</th>
                        <th class="tableItens">Votos</th>
                    </tr>
                    <?php
                        foreach($pdo->getCount() as $votos){
                            echo "<tr>"."<td class='tableItens'>".$votos['fruta']."</td>".
                            "<td class='tableItens'>".$votos['votos']."</td>"."</tr>";
                        };
                    ?>
                </table>
            </div>
        </div>
    </main>
    <script type="module" src="./script.js"></script>
</body>
</html>