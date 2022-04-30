<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "php";

    $con = new mysqli($servidor, $usuario, $senha, $banco);
    $res = $con->query("SELECT titulo,autor FROM livros");
    $num_linhas = $res->num_rows;
    for($i=0; $i<$num_linhas; $i++){
        $dados = $res->fetch_row();
        $titulo = $dados[0];
        $autor = $dados[1];
        echo "$titulo - $autor <br>";
    }
    $con->close();

    //Banco de dados
    /*CREATE TABLE livros {
        isbn varchar(13);
        titulo varchar(80) NOT NULL;
        autor varchar(80) NOT NULL;
        paginas smallint NOT NULL;
        preco float NOT null

        //Inserindo dados na tabela
        INSERT INTO livros VALUES('1', 'DESENVOLVENDO WEBSITES COM PHP',
        'WEMERSON LUCAS', 320, 73);

        INSERT INTO livros VALUES('1', 'PHP PARA QUEM CONHECE PHP',
        'WEMERSON LUCAS', 520, 93);

        INSERT INTO livros VALUES('1', 'FRONTEND',
        'WEMERSON LUCAS', 100, 43);
    } */

    //affect_rows = Retorna o número de linhas afetadas pela operação anterior.
    //fetch_row = Armazena a linha atual do resultado em um array com índices numéricos.
    /*fetch_array = É uma versão estendida de fetch_rows.Armazena a linha atual do resultado
      em um array com índices numéricos e também com índices associativos
      (usando os nomes dos campos como chaves) */
    //fetch_object = Retorna a linha como um objeto.
    //num_rows = Retorna o número de linhas de uma consulta.
    //field_count = Retorna o número de colunas de uma consulta.
?>
