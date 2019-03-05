let littleImg = document.querySelectorAll(".vectors > div > img");
let vectorBg = document.querySelector('.main-vector');
let special = document.querySelector('.special');
let menInContainer = document.querySelector('.in-main-container');
let logoImg = document.querySelectorAll('.other-logos-own > .toggle-logos');
let logoModal = document.querySelector("#bull .modal-body");
let posterImg = document.querySelectorAll('.posters > div');
let posterModal = document.querySelector('#godof .modal-body')
let cardImg = document.querySelectorAll('.cards .toggle-logos');
let cardModal = document.querySelector('#card1 .modal-body');


if(logoImg){
    for(let i = 0; i < logoImg.length ; i++){  
    logoImg[i].addEventListener('click',()=>{
        logoModal.innerHTML = logoImg[i].innerHTML
        
    })
}
}

if(posterImg){
    for(let i = 0; i < posterImg.length ; i++){  
    posterImg[i].addEventListener('click',()=>{
        posterModal.innerHTML = posterImg[i].innerHTML
        
    })
}
}

if(cardImg){
    for(let i = 0; i < cardImg.length ; i++){  
    cardImg[i].addEventListener('click',()=>{
        cardModal.innerHTML = cardImg[i].innerHTML
        
    })
}
}

if(littleImg.length != 0){
    littleImg[0].addEventListener('click',()=>{
    vectorBg.style.backgroundImage = "url('../../src/img/vectorGrafhics/flower.png')";
    special.style.backgroundColor = "#f9f9f9" ;

});

littleImg[1].addEventListener('click',()=>{
    vectorBg.style.backgroundImage = "url('../../src/img/vectorGrafhics/car.png')";
    special.style.backgroundColor = "#4F45B5" ;

})

littleImg[2].addEventListener('click',()=>{
    vectorBg.style.backgroundImage = "url('../../src/img/vectorGrafhics/fish.jpg')";
    special.style.backgroundColor = "#005983" ;

})

littleImg[3].addEventListener('click',()=>{
    vectorBg.style.backgroundImage = "url('../../src/img/vectorGrafhics/night.jpg')";
    special.style.backgroundColor = "#2A2835" ;

})

littleImg[4].addEventListener('click',()=>{
    vectorBg.style.backgroundImage = "url('../../src/img/vectorGrafhics/plant.png')";
    special.style.backgroundColor = "#fff" ;

})

littleImg[5].addEventListener('click',()=>{
    vectorBg.style.backgroundImage = "url('../../src/img/vectorGrafhics/robot.jpg')";
    special.style.backgroundColor = "#A12525" ;

})

}

//--------------------------------

let submitBtn = document.querySelector('#submit');
if(submitBtn){
submitBtn.addEventListener('submit', getPhp)


function getPhp(e){
    e.preventDefault();
    
    let getName = $('#name').val();
    let getEmail = $('#email').val();
    let getSubject = $('#subject').val();
    let getMessage = $('#message').val();

    let xhr = new XMLHttpRequest();
    let name = 'name='+getName+'&';
    let email = 'email='+getEmail+'&';
    let subject = 'subject='+getSubject+'&';
    let message = 'message='+getMessage;  

xhr.open('post',"../html/getemail.php",true)
xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');

xhr.onload = ()=>{

    if(xhr.status == 200){
        console.log('vrai' +" "+ xhr.response);
    }else {
        console.log('false') }   
            
}
xhr.send( name + email +subject +message);
}
}


