<?php

require_once("model/Equipamento.php");
require_once("model/Inimigo.php");
require_once("model/Inimigos.php");
require_once("model/Item.php");
require_once("model/ItensMagicos.php");
require_once("model/Magico.php");
require_once("model/Material.php");
require_once("model/Personagem.php");
require_once("inimigos.php");
require_once("itens.php");
require_once("areas.php");

system('cls');//limpa a tela no windows
system('clear');//limpa a tela no linux
print("Na Era dos Antigos, o mundo era informe, envolto em névoa.\n"); 
sleep(2); 
print("Uma terra de penhascos cinzentos, Árvores Arcanas e Dragões Eternos.\n"); 
sleep(2); 
print("Mas então surgiu o Fogo e, com o fogo, veio a disparidade.\n"); 
sleep(3); 
print("Calor e frio, vida e morte, e, é claro, luz e trevas.\n"); 
sleep(2); 
print("Então, das trevas, Eles vieram e encontraram as Almas dos Lordes dentro da chama.\n"); 
sleep(4); 
print("Nito, o Primeiro dos Mortos, A Bruxa de Izalith e suas Filhas do Caos, Gwyn, o Senhor da Luz Solar, e seus fiéis cavaleiros.\n"); 
sleep(4); 
print("E o Furtivo Pigmeu, tão facilmente esquecido.\n"); 
sleep(3); 
print("Com a força dos Lordes, eles desafiaram os Dragões.\n"); 
sleep(3); 
print("Os poderosos raios de Gwyn despedaçaram suas escamas de pedra.\n"); 
sleep(3); 
print("As Bruxas teceram grandes tempestades de fogo.\n"); 
sleep(3); 
print("Nito liberou um miasma de morte e doença.\n"); 
sleep(3); 
print("E Seath, o Descamado, traiu os seus, e os Dragões não existiram mais.\n"); 
sleep(4); 
print("Assim começou a Era do Fogo.\n"); 
sleep(2); 
print("Mas logo as chamas irão se apagar e apenas a Escuridão permanecerá.\n"); 
sleep(4); 
print("Mesmo agora restam apenas brasas, e o homem já não vê luz, apenas noites infinitas.\n"); 
sleep(4); 
print("E entre os vivos são vistos portadores do amaldiçoado Sinal Negro.\n"); 
sleep(3); 
print("Sim, de fato. O Sinal Negro marca os Mortos-vivos.\n"); 
sleep(3); 
print("E nesta terra, os Mortos-vivos são aprisionados e levados ao norte, onde são trancafiados, aguardando o fim do mundo...\n"); 
sleep(5); 
print("Este é o seu destino.\n"); 
sleep(3); 
print("Porém, nas antigas lendas está escrito que, um dia, um morto-vivo será escolhido para deixar o asilo dos mortos-vivos, em peregrinação, para a terra dos antigos lordes, Lordran.\n"); 
sleep(6);

print("No meio do Asilo dos mortos vivos do Oeste, reside uma dessas criaturas.\n");
sleep(4);
print("A criatura se levanta de seu sono em sua cela, observando a mesma sala escura e úmida de sempre, nem mesmo o musgo parece crescer mais.\n");
sleep(6);
print("Então ela se movimenta ao pequeno espelho da cela, o que ela ve?\n");
sleep(3);
print("\n1.Um humano simples e ordinário, mediano em tudo que faz.\n");
sleep(3);
print("2.Um elfo de orelhas pontudas e um rosto chique, com um bom raciocinio e coordenação motora.\n");
sleep(5);
print("3.Um anão que mal alcança o espelho, usando sua força para pular e conseguir se ver suas cicatrizes.\n");

$personagem = new Personagem();

do {
    $escolha = readline("Escolha:");

    if($escolha == 1){
        $personagem->setBonusFor(1);
        $personagem->setBonusDex(1);
        $personagem->setBonusCon(1);
        $personagem->setBonusInt(1);
        $personagem->setBonusSab(1);
        $personagem->setBonusCar(1);

        print("O humano então passa sua mão sobre seu rosto, limpando um pouco de suor que suja seu rosto, vindo da cela quente que dormira.\n");
        sleep(5);
        print("O que o humano faz?");
    }elseif ($escolha == 2) {
        $personagem->setBonusDex(2);
        $personagem->setBonusInt(1);

        print("O elfo gentilmente passa sua mão sobre os contornos de seu rosto, se sentido orgulhoso de sua feição nobre.\n");
        sleep(4);
        print("O que o elfo faz?");
    }elseif($escolha == 3){
        $personagem->setBonusCon(2);

        print("O anão faz mais um salto para se observar e ajeita a sua barba ao aterrissar novamente.\n");
        sleep(4);
        print("O que o anão faz?");
    }
} while ($escolha > 3 && $escolha < 1);

$personagem->setVidaMax(($personagem->getBonusCon() + 1) + 7);

sleep(2);
print("1.Ele se deita no chão e usa seus braços para fazer flexões, como um bom lutador faria.\n");
sleep(3);
print("2.Ele começa a procurar cada canto de sua cela para ver se encontra alguma maneira de sair que não tinha visto antes\n");
sleep(4);
print("3.Ele pega seu artefato sagrado e se ajoelha, começando a rezar.\n");
sleep(3);

do {
    $escolha = readline("Escolha:");

    if($escolha == 1){
        array_push($personagem->itens, $espada);

        print("Depois de um tempo, coberto de suor ele para e se deita num pequeno pedaço de couro espalhado que mal pode ser chamado de cama");
        sleep(5);
    }elseif ($escolha == 2) {
        array_push($personagem->itens, $adaga);

        print("A mesma coisa de sempre acontece, nada, nenhuma saida.\n");
        sleep(4);
    }elseif($escolha == 3){
        array_push($personagem->itens, $cajado_simples);


        print("Depois de poucos minutos de concentração, seu rito matituno foi feito.\n");
        sleep(4);
    }
} while ($escolha > 3 && $escolha < 1);
