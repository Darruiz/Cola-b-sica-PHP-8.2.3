<?php 
//Minha cola de PHP as vezes esqueço o básico rsrsrs

//sem encher linguiça  var$ 

// Dentro de uma fução = Locais 

//globais =  Só são reconhecidas dentro deste arquivo e abaixo de onde está localizada 

// super globais = Disponivel ná aplicação inteira independente do local de criação  

//tomar cuidado com a tipagem dinâmica 

//var_dump() serve para saber valor e tipo da variavel  

//concatenação juntar valor de string + $ exemplo &orção = "Seu nome é" . $name; pós isso posos juntar com mais uma informação por ex &oração .= "e faço aniversário em" . $anv; 


//try catch exeções tratadas pelo codigo em orientação a objeto dentro do try catch o PHP vai TENTAR! executar o codigo se ele não conseguir executar ele dispara a exeção no catch por isso o nome TRY CATCH 
//Neste caso usei a exception para colocar ele dentro da variavel $e para receber um objeto de exeção para exibir uma msg como objetivo final
// Irei utilizar a forma de controle mais basica de todas o if para chamar uma estrutura interna do PHP (empty($oq_quer_conferir_se_esta_preenchido_ou_n))

//operador lgc NOT = !
// exp de concatenação com try catch com função empty


try {
    // validação SUPER simples 
    if (!empty($_GET["modelo"])  ){

        if(strlen($_GET["modelo"]) < 2) //strlen para conferir tamanho da string 
        throw new Exception("Modelo precisa ter mais que 2 caracteres exemplo Up/Volws."); 
    }

    else{
        //se as $ estiverem vazias ent disparar exeção, empty = boolean TRUE ent levar para catch
        throw new Exception("Modelo não está preenchido ou incorreto."); 
    }

    if (empty($_GET["ano"])  )
        //se as $ estiverem vazias ent disparar exeção, empty = boolean TRUE ent levar para catch
        throw new Exception("Preenche ai vacilão");



$carro = $_GET["modelo"]; 

$Ano = (int) $_GET["ano"]; // no caso do ano vou usar casting para forçar um tipo de numero int já que sempre será numero se proteger de sql injection

$espcs = "Meu carro é um" . $carro;
$espcs .= "Ano" . $Ano; 

echo $espcs; 
} catch (Exception $e) {

echo $e->getMessage();

}

