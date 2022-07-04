
console.log('JS OK');


const modal_container = document.getElementById('modal-container');

const open_modal = document.getElementById('open-modal');

const close_modal = document.getElementById('close-modal');

open_modal.addEventListener('click', function() {

    return modal_container.classList.add('show')
});

// function apri_modale(){
//     modal_container.classList.add('show')
// }

close_modal.addEventListener('click', () => {
    return modal_container.classList.remove('show')
});
