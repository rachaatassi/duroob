//scroll button
let i = false;
window.addEventListener('scroll', () => {
    if (i === false) {
        const chev = document.createElement('p');
        chev.id = "ch";

        chev.textContent = "<"
        document.body.appendChild(chev);
        i = true;
    };

    var chevron = document.getElementById("ch");

    if (window.scrollY <= 800) {
        chevron.classList.add("invis");
    } else {
        chevron.classList.remove("invis");
    }
    chevron.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});


//button animation
const buttons = document.querySelectorAll('button');
buttons.forEach(button =>{

button.addEventListener('mouseover', () => {
    button.classList.add('button-animation');
});

button.addEventListener('mouseout', () => {
    button.classList.remove('button-animation');
});
});

//burget menu

const navbar = document.querySelector("header nav ul");
let burgerMenu = document.createElement("div");
const menu = document.querySelector(".menu");
burgerMenu.id = "bgMenu";

window.addEventListener("resize", e=>{
    if(window.innerWidth < 1800){
        navbar.classList.add("hide");

        if(!navbar.parentNode.contains(burgerMenu)){
            navbar.parentNode.appendChild(burgerMenu);
        }
    }
    else{
        navbar.classList.remove("hide");
        navbar.parentNode.removeChild(burgerMenu);
    }
});

window.addEventListener("DOMContentLoaded", e=>{
    if(window.innerWidth < 1800){
        navbar.classList.add("hide");

        if(!navbar.parentNode.contains(burgerMenu)){
            navbar.parentNode.appendChild(burgerMenu);
        }
    }
    else{
        navbar.classList.remove("hide");
        navbar.parentNode.removeChild(burgerMenu);
    }
});
burgerMenu.addEventListener("click", () => {
    console.log(menu.classList.value.includes("hide"));
    
    if (menu.classList.value.includes("hide")) {
        menu.classList.remove("hide");
        menu.classList.add("visible");
    }
    else{
        menu.classList.remove("visible");
        menu.classList.add("hide");
    }

});


   //habit number days (atchived days )
  // const habits =  document.querySelectorAll(".habit");
  // habits.forEach((habit)=>{
    //const numbers = habit.querySelectorAll(".number");
    //numbers.forEach((number)=>{
      //  console.log(number.innerTEXT);
    //});
   //});

   // button add day 
   const habits =  document.querySelectorAll(".habit");
   //console.log(habits);
   habits.forEach((habit)=>{
    const addDay = habit.querySelector("#addDay");
    addDay.addEventListener("click",()=>{
    
     const numbers = habit.querySelectorAll(".yellew");
     const formData = new FormData();
     formData.append("atchived_days",numbers.length +1);
     formData.append("habit_id",habit.getAttribute("id"));

    fetch("/index.php?controller=habit&action=update",{method:"POST",body:formData});
    if(numbers[numbers.length-1]){
        numbers[numbers.length-1].nextElementSibling.classList.add("yellew");
    }
   else{
     habit.querySelector(".number").classList.add("yellew");
   }


    });
   });


   
