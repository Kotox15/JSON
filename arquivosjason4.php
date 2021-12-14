<? php

// string json
// agora o primeiro emprego possui dependentes e os outros não.
// também foi criado um campo denominado "data", contendo a data do arquivo de empregados
$ json_str = '{"empregados":' .
		'[{"nome": "Jason Jones", "idade": 38, "sexo": "M", "dependente": ["Sedna Jones", "Ian Jones"]},' .
		'{"nome": "Ada Pascalina", "idade": 35, "sexo": "F"},' .
		'{"nome": "Delphino da Silva", "idade": 26, "sexo": "M"}' .
		'],
		"dados": "15/12/2012"} ' ;

// faz o parsing da string, criando o array "empregados"
$ jsonObj = json_decode ( $ json_str );


// cria o array de empregados
$ empregados = $ jsonObj -> empregados ;

// imprime a data do arquivo e navega pelos elementos do array, imprimindo cada uso.
// caso o uso possua dependente, estes também são selecionados.
echo  "<b> dados do arquivo </b>: $ jsonObj-> dados <br/>" ;
foreach ( $ empregados  as  $ e )
    {
	echo  "nome: $ e-> nome - idade: $ e-> idade - sexo: $ e-> sexo <br/>" ;

	if ( property_exists ( $ e , "dependente" )) {
		$ deps = $ e -> dependentes ;
		echo  "dependente: <br/>" ;
		foreach ( $ deps  as  $ d ) echo  "- $ d <br/>" ;
	}
    }
?>
