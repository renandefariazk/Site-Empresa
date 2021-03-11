export default class Home{
    tempo(){
        const horario = document.querySelector('#horarioAtual');
        const status = document.querySelector('#status');
        const atualHora = new Date();
        horario.innerText = horario.innerText +' '+ atualHora.getHours() + ':' + atualHora.getMinutes();
        if(atualHora.getHours() >= 6 && atualHora.getHours() <= 17){
            status.innerText = status.innerText + ' Aberto';
            status.classList.add('pAberto');
        } else{
            status.innerText = status.innerText + ' Fechado';
            status.classList.add('pFechado');
        }
    }
    init(){
        this.tempo();
    }
}