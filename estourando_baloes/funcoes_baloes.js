var httpRequest;
var level_game;
var timer_id = null;
var id_balao_antigo = "b0";

    function requisicao(url, destino){

    level_game = document.getElementById('dificultity').value;

    httpRequest = new XMLHttpRequest();

    httpRequest.onreadystatechange = situacaoRequisicao;

    httpRequest.open('GET', url);
    httpRequest.send();

    

    }

function situacaoRequisicao() {

    if(httpRequest.readyState == 4){
        if(httpRequest.status == 200){
            document.getElementById('principal').innerHTML = httpRequest.responseText;
        }
    }
    start();
}




    function start(){

    if(level_game == 1) {
        time_game = 120;
    }

    if(level_game == 2) {
        time_game = 60;
    }

    if(level_game == 3) {
        time_game = 30;
    }
        
    var qtd_baloes = 80;

    document.getElementById("time_cro").innerHTML = time_game;
    document.getElementById("baloes_inteiros").innerHTML = qtd_baloes;
    document.getElementById("baloes_estourados").innerHTML = 0;

    cria_baloes(qtd_baloes);
    contagem_tempo(time_game + 1);

}



function cria_baloes(qtd_baloes) {

    for(var i = 1; i <= qtd_baloes; i++){

    var balao = document.createElement("img"); // Cria o elemento img na div do id "cenario"
    balao.src = "imagens/balao_azul_pequeno.png";// Chama a imagem a ser inserida no elemento img
    balao.style.margin = "8px";
    balao.style.paddingTop = "15px";
    balao.id = 'b' + i;
    balao.onclick = function(){estourar_baloes(this);};

    document.getElementById("cenario").appendChild(balao); // Cria diversos elementos img como filhos da div cenario

    }
    
}

function contagem_tempo(tempo){

    tempo = tempo - 1;

    if(tempo == -1){
        clearTimeout(timer_id);
        game_over();
        return false;
    }

    document.getElementById("time_cro").innerHTML = tempo;

    timer_id = setTimeout("contagem_tempo("+tempo+")", 1000);
}


function game_over(){
  
    alert("Fim de jogo! Você não conseguiu estourar todos os balões!"); 

}


function estourar_baloes(e){

    var id_balao_atual = e.id;

    if(id_balao_atual > id_balao_antigo){
        pontuacao(-1);
        id_balao_antigo = id_balao_atual;
        }
  
    document.getElementById(id_balao_atual).src = "imagens/balao_azul_pequeno_estourado.png";

}


function pontuacao(pont){

    var baloes_inteiros = document.getElementById("baloes_inteiros").innerHTML;
    var baloes_estourados = document.getElementById("baloes_estourados").innerHTML;

    baloes_inteiros = parseInt(baloes_inteiros);
    baloes_estourados = parseInt(baloes_estourados);
    
    baloes_inteiros = baloes_inteiros + pont;
    baloes_estourados = baloes_estourados - pont;

    document.getElementById("baloes_inteiros").innerHTML = baloes_inteiros;
    document.getElementById("baloes_estourados").innerHTML = baloes_estourados;

    victory(baloes_inteiros);
}


function victory(baloes_inteiros){
    if(baloes_inteiros == 0){
        alert("Parabéns, você venceu o jogo!");
        parar_jogo();
    }
}


function parar_jogo(){
    clearTimeout(timer_id);
}