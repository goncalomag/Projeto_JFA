

const image = document.getElementById( 'productImg' );
const btn = document.getElementsByClassName( 'btn' );

btn[0].addEventListener( 'click', function(){
    image.src='./imagens/cinza.png';
    for ( bt of btn){
        bt.classList.remove( 'active' );
    }
    this.classList.add( 'active' )
});
btn[1].addEventListener( 'click', function(){
    image.src='./imagens/azul.png'
    for ( bt of btn){
        bt.classList.remove( 'active' );
    }
    this.classList.add( 'active' )
});
btn[2].addEventListener( 'click', function(){
    image.src='./imagens/vermelho.png'
    for ( bt of btn){
        bt.classList.remove( 'active' );
    }
    this.classList.add( 'active' )
});
