const firstForm = document.querySelector('.first-form');
const secondForm = document.querySelector('.second-form');
const thirdForm = document.querySelector('.input-jadwal-dokter');
const BtnNextFirst = document.getElementById('nextFirst');
const BtnBackSecond = document.getElementById('backSecond');
const BtnNextSecond = document.getElementById('nextSecond');
const BtnBackThird = document.getElementById('backThird');

BtnNextFirst.addEventListener('click' , function(){
    firstForm.style.display = 'none'
    secondForm.style.display = 'flex'
});

BtnBackSecond.addEventListener('click' , function(){
    firstForm.style.display = 'flex'
    secondForm.style.display = 'none'
});

BtnNextSecond.addEventListener('click' , function(){
    secondForm.style.display = 'none'
    thirdForm.style.display = 'flex'
});

BtnBackThird.addEventListener('click' , function(){
    thirdForm.style.display = 'none'
    secondForm.style.display = 'flex'
});
