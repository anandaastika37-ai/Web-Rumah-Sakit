const firstForm = document.querySelector('.first-form');
const firstFormRM = document.querySelector('.first-form-RM');
const secondForm = document.querySelector('.second-form');
const secondFormRM = document.querySelector('.second-form-RM');
const thirdForm = document.querySelector('.third-form');
const BtnNextFirst = document.getElementById('nextFirst');
const BtnNextFirstRM = document.getElementById('nextFirstRM');
const BtnBackSecond = document.getElementById('backSecond');
const BtnNextSecond = document.getElementById('nextSecond');
const BtnBackThird = document.getElementById('backThird');
const BtnBackThirdRM = document.getElementById('backThirdRM');



if (BtnNextFirst) {
    BtnNextFirst.addEventListener('click', function () {
        firstForm.style.display = 'none';
        secondForm.style.display = 'flex';
    });
}

if (BtnBackSecond) {
    BtnBackSecond.addEventListener('click', function () {
        firstForm.style.display = 'flex';
        secondForm.style.display = 'none';
    });
}

if (BtnNextSecond) {
    BtnNextSecond.addEventListener('click', function () {
        secondForm.style.display = 'none';
        thirdForm.style.display = 'flex';
    });
}

if (BtnBackThird) {
    BtnBackThird.addEventListener('click', function () {
        thirdForm.style.display = 'none';
        secondForm.style.display = 'flex';
    });
}


    BtnNextFirstRM.addEventListener('click', function () {
        firstFormRM.style.display = 'none';
        secondFormRM.style.display = 'flex';
    });



    BtnBackThirdRM.addEventListener('click', function () {
        secondFormRM.style.display = 'none';
        firstFormRM.style.display = 'flex';
    });
