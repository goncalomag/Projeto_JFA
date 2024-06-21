let trigger = document.getElementById('trigger')
let body=document.querySelector('body')

trigger.addEventListener('click',()=>{
    trigger.classList.toggle('dark')
    body.classList.toggle('dark')
})
