// Habit Add Form
const pathSelected = document.querySelector("#pathSelect");
const callback = ()=>{
   
    const allAxeElement = document.querySelectorAll(".axes");
    allAxeElement.forEach((e)=>{
        e.removeAttribute("name");
        e.classList.add("invis");
    });
    const axeElement = document.getElementById(pathSelected.value);
    axeElement.setAttribute("name","axeId");
    axeElement.classList.remove("invis");

  
    }
    window.addEventListener("load",callback);
    pathSelected.addEventListener("change",callback);
