let navbar=document.querySelector('.navbar')

document.querySelector('#menu-btn').onclick= ()  =>{
    navbar.classList.toggle('active');

}

let navbar1=document.querySelector('.navbar1')

document.querySelector('#login-btn').onclick= ()  =>{
    navbar1.classList.toggle('active');

}

// let themeBtn= document.querySelector('#theme-btn');
// themeBtn.onclick = () =>{
//     themeBtn.classList.toggle("fa-sun");
//     if(themeBtn.classList.contains('fa-sun')){
//         document.body.classList.add('active');
//     }else{
//         document.body.classList.remove('active')
//     }
// }

function submit(){
    var r=confirm("Thanks for rating!");
    if(r == true){
        window.location="contactus.html";
        form.submit();

    }
}

