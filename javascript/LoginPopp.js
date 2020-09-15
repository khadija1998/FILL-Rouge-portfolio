const popup=document.body.firstElementChild
const login=document.getElementById('login')
const overlay=document.getElementById('overlay')


login.addEventListener("click", function LoginPopup(){
    popup.style.display='block';
})
overlay.addEventListener("click", function LoginPopup(){
    popup.style.display='none';
})