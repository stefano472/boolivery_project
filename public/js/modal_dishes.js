console.log('ok modal dishes js');
// let open_modal_index = document.querySelectorAll('.open-modal');
let modal_container_index = document.querySelectorAll('.modal-container');
let close_modal_index = document.querySelectorAll('.close-modal');

document.querySelectorAll('.open-modal').addEventListener('click', () => modal_container_index.classList.add('show'));
close_modal_index.addEventListener('click', () => modal_container_index.classList.remove('show'));