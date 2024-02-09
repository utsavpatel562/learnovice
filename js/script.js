
 const toggleSwitch = document.querySelector(".toggle-switch");

 toggleSwitch.addEventListener("change",() =>{
   if(toggleSwitch.checked){
   	document.querySelector(".pricing-main").classList.add("active");
   }
   else{
   	document.querySelector(".pricing-main").classList.remove("active");
   }
 });