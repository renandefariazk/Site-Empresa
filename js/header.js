export default class Header{
    run() {
        const headerConta = document.querySelector('.contaContainer')
        headerConta.addEventListener('mouseover',(element)=>{
            const contaAba = document.querySelector('.contaAba');
            contaAba.classList.add('ativo');
            this.liOver();
            element.currentTarget.addEventListener('mouseleave',()=>{
                //desativa apenas quando tirar a mouse do contaAba e contaContainer
                contaAba.classList.remove('ativo');
            });
        });
    }
    liOver(){
        const liConta = document.querySelectorAll('.liStyleNone');
        liConta.forEach(function(iten){
            iten.addEventListener('mouseover',(element)=>{
                element.currentTarget.classList.add('mouseOverRed');
                element.currentTarget.addEventListener('mouseleave',(element)=>{
                    element.currentTarget.classList.remove('mouseOverRed');
        })
            });
        });
    }
    //criar um function para piscar a div p no headerContainerSecond ao passar o mouse 
    init() {
        this.run();
    }
}