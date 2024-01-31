<?php
include("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Busca</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>
        <h1>Lista de Veículos</h1>
        <form method="get">
            <input type="text" name="busca" id="busca" placeholder="Digite os termos de pesquisa" value="<?php if (isset($_GET['busca'])) echo $_GET['busca'];?>">
            <button type="submit">Pesquisar</button>
        </form>
        <table>
            <tr>
                <th>Marca</th>
                <th>Veículo</th>
                <th>Modelo</th>
            </tr>
            <?php
            if (!isset($_GET['busca'])) {
            ?>
                <tr>
                    <td colspan="3">Digite algo para pesquisar...</td>
                </tr>
                <?php
            } else {
                $pesquisa = $mysqli->real_escape_string($_GET['busca']);
                $sql_code = "SELECT * FROM veiculos
                    WHERE fabricante LIKE '%$pesquisa%' 
                    OR modelo LIKE '%$pesquisa%' 
                    OR veiculo LIKE '%$pesquisa%'";
                $sql_query = $mysqli->query($sql_code) or die("ERRO ao consultar! " . $mysqli->error);

                if ($sql_query->num_rows == 0) {
                ?>
                    <tr>
                        <td colspan="3">Nenhum resultado encontrado...</td>
                    </tr>
            <?php
                } else {
                    while ($dados = $sql_query->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $dados['fabricante'];?></td>
                            <td><?php echo $dados['veiculo'];?></td>
                            <td><?php echo $dados['modelo'];?></td>
                        </tr>
                        <?php 
                    }
                }
            }
            ?>
        </table>
    </main>
</body>

</html>