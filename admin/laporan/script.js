let btninteraksi = document.querySelectorAll('.btn-interaktif button i');

btninteraksi.forEach(btn => {
    btn.addEventListener('click' , function(){
        let comment = btn.closest('.btn-interaktif')
        comment.querySelectorAll('i').forEach(reset => {
            reset.classList.remove('fa-solid')
            reset.classList.add('fa-regular')
        })
            btn.classList.add('fa-solid')
            btn.classList.remove('fa-regular')
    })
})