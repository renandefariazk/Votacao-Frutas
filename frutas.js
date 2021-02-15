export default class Frutas{
    constructor(){
        this.frutas = document.querySelectorAll('.fotoFruta');

    }
    overFrutas(){
        this.frutas.forEach((itens)=>{
            itens.addEventListener('mouseover',function(element){
                element.currentTarget.classList.add('overFruta');
            })
        });
    }
    leaveFrutas(){
        this.frutas.forEach((itens)=>{
            itens.addEventListener('mouseout',function(element){
                element.currentTarget.classList.remove('overFruta');
            })
        })
    }
    init(){
        this.overFrutas();
        this.leaveFrutas();
    }
}