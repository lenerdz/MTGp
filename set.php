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
        td>span {
            position: absolute;
            background-color: lightyellow;
            padding: 5px;
            left: -1000px;
            border: 1px dashed gray;
            visibility: hidden;
            color: black;
            text-decoration: none;
        }
        td:hover>span {
            visibility: visible;
            //top: 0;
            left: 0;
            z-index: 50;
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
    </tr>
    <?php
    $set = $_GET['set'];
    $sql = mysql_query("SELECT Nname,Nid,Nset FROM ncards WHERE Nset = '$set'") or die ("Erro ao consultar dados");

    while($item = mysql_fetch_array($sql)){
        $nome = $item['Nname'];
        $codigo = $item['Nid'];

        echo "<tr>";
        echo "<td>".$nome."<span><img src=\"http://mtgimage.com/set/$set/$nome.full.jpg\"</span></td>";
        echo "<td>$codigo</td>";
        echo "</tr>";

    }
    ?>
</table>
</body>
</html>