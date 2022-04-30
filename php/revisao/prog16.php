<html>
<body>
<?php
    $vetor = array (1, 2, 3, 4);
    foreach($vetor as $v){
        print "O valor do atual do vetor é $v. <br>";
    }
    $a = array ( "UM" => 1, "DOIS" => 2, "TRES" => 3 );
    foreach($a as $chave => $valor){
        print "\$a[$chave] => $valor.<br>";
    }
?>
</body>
</html>