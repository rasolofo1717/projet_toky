(function () {
    const btnDelEtudiants = document.querySelectorAll('.btn-del-edudiant');

    btnDelEtudiants.forEach(el => {
        el.addEventListener('click', function (e) {
            e.preventDefault();

            const isConfirm = confirm("Etes vous sur de supprimer");

            if (isConfirm) location.href = e.target.href;
        })
    })

})();
