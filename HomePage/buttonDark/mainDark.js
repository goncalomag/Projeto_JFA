let trigger = document.getElementById('trigger')
let body=document.querySelector('body')
let texto=document.getElementById('texto')

trigger.addEventListener('click',()=>{
    trigger.classList.toggle('dark')
    body.classList.toggle('dark')
})
