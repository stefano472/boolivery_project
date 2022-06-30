console.log('backoffice js ok');
let checkboxs = document.querySelectorAll(".categoryInput");
// console.log(checkboxs);
const updateInput = document.getElementById("updateDish");
const createDish = document.getElementById("updateDish");
// updateInput.addEventListener("click", valthisform);
// createDish.addEventListener("click", valthisform);
// document.getElementById("updateDish").addEventListener("click", valthisform);
const checkboxError = document.getElementsByClassName('checkboxError');

function valthisform()
{
    let okay=false;
    console.log(okay);
    for(let i=0;i<checkboxs.length;i++)
    {
        if(checkboxs[i].checked)
        {
            okay=true;
            break;
        }
    }
    // // if(okay)alert("Thank you for checking a checkbox");
    if(!okay) {
    //     checkboxError.className = "display-show";
    //     alert('ciao')
    // };
    // let form_data = new FormData(document.querySelector("form"));
    // console.log(form_data);
    // if(form_data.getAll("categories[]").length < 1){
        document.getElementById("alert").style.display = "block";
        // console.log('non va bien')
        return false;
    }
    else
    {
        // console.log('va bien')
        document.getElementById("alert").style.display = "none";
    }
    return true;
}
console.log('JS OK');

const open_modal = document.getElementById('open-modal');

const modal_container = document.getElementById('modal-container');

const close_modal = document.getElementById('close-modal');


open_modal.addEventListener('click', () => modal_container.classList.add('show'));

close_modal.addEventListener('click', () => modal_container.classList.remove('show'));
