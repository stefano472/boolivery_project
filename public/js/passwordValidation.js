console.log('validation-password OK!')

function checkPassword() 
{
    // alert('ciao')
    console.log('check password')
    // alert('ocio')
    // console.log('onchange ok')
    const password = document.querySelector('input[name=password]');
    const confirm = document.querySelector('input[name=password_confirmation]');
    if (confirm.value !== password.value) {
        document.getElementById("alert").style.display = "block";
        //   confirm.setCustomValidity('');
        return false;
    }else{
        document.getElementById("alert").style.display = "none";
        // console.log('non va bien')
    // console.log('va bien')
    }
    //   confirm.setCustomValidity('Passwords do not match');
    return true;

  }