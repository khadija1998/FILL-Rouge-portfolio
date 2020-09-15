const hum=document.getElementById('hum');
const menu=document.getElementById('menu');

let humOpen=false;

hum.addEventListener('click', ()=>{
    if(!humOpen){
        hum.classList.add('open');
        humOpen=true;
        menu.style.top="24%";
        menu.style.padding="3rem 1rem";
    }else{
        hum.classList.remove('open');
        menu.style.top="-30%";
        menu.style.margin='.5rem 0'
        humOpen=false;
    }
})
