<?php
$hostname = "localhost";
$database = "mws";
$username = "root";
$password = "vertrigo";
$extrato = mysql_pconnect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db($database, $extrato);
?>

<html>
    <head>
        <title>Teste</title>
        <meta charset="utf-8">
        <style>
            tr:hover{
                background-color: rgba(178, 255, 148, 0.500);
            }
        </style>
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script>

        </script>
    </head>
    <body>
        <table align="center">
            <tr>
                <th>Nome</th>
                <th>Código</th>
                <th>Data de Lançamento</th>
                <th>Promo?</th>
            </tr>
            <?php
            $sql = mysql_query("SELECT * FROM nsets") or die ("Erro ao consultar dados");

            while($item = mysql_fetch_array($sql)){
                $nome = $item['Nname'];
                $codigo = $item['Ncode'];
                $data = $item['Ndate'];
                $promo = $item['Nis_promo'];

                echo "<tr>";
                    echo "<td><a href='set.php?set=$codigo'>".$nome."</a></td>";
                    echo "<td>$codigo</td>";
                    echo "<td>$data</td>";
                    if($promo=="True"){
                        echo "<td><img src='img/sim.jpg'/></td>";
                    }else{
                        echo "<td><img src='img/nao.jpg'/></td>";
                    }
                echo "</tr>";

            }
            ?>
        </table>
    </body>
</html>