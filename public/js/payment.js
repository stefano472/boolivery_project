console.log('payment ok!!');

//define a function to set cookies
// function setCookie(name,value,days) {
//     let expires = "";
//     if (days) {
//         let date = new Date();
//         date.setTime(date.getTime() + (days*24*60*60*1000));
//         expires = "; expires=" + date.toUTCString();
//     }
//     document.cookie = name + "=" + (value || "")  + expires + "; path=/";
//  }
 
 //get your item from the localStorage
 const myItem = JSON.parse(localStorage.getItem('cart'));

 document.getElementById('cart').innerHTML = myItem;
//  setCookie('cartCookie', myItem, 1);

