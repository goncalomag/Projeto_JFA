window.addEventListener('scroll',function(){
    let scroll = document.querySelector('.scrollTop');
        scroll.classList.toggle('active', window.scrollY > 150);
})

function voltaCima(){
    window.scrollTo({
        top:0,
        behavior: 'smooth',
    })
}