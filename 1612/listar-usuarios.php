<?php

$sql = "SELECT * FROM usuarios";

$res = $conexao->query($sql);

$qtd =$res ->num_rows;

while($row = $res->fetch_object()){
    print "<tr>";
    print "<td>" .$row-> id . "</td>";
    print "<td>" .$row-> nome . "</td>";
    print "<td>" .$row-> email . "</td>";
    print "<td>" .$row-> data_nasc . "</td>";
    print "<td>" .$row-> id . "</td>";

}