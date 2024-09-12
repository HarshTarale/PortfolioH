document.querySelectorAll('a[href^="."]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

const manu =  document.querySelector(".manuList");
const manu1 =  document.querySelector("#manuList1");
const manu2 =  document.querySelector("#manuList2");
const manu3 =  document.querySelector("#manuList3");
const manu4 =  document.querySelector("#manuList4");



manu.addEventListener("click",()=>{
 const mam = manu.getAttribute("value");

 
    if( mam == "change"){

manu1.style.visibility="visible";
manu1.style.transform= "translateX(-50px)";

manu2.style.visibility="visible";
manu2.style.transform= "translate(-50px ,35px)";

manu3.style.visibility="visible";
manu3.style.transform= "translate(-50px ,70px)";


manu4.style.visibility="visible";
manu4.style.transform= "translate(-50px ,105px)";



 manu.setAttribute("value","change-2");
        }else{
            manu.setAttribute("value","change");

 
    
 manu1.style.transform= "translate(-50px,-20px)";

manu2.style.transform= "translate(-50px, -25px)";

manu3.style.transform= "translate(-60px, -28px)";

manu4.style.transform= "translate(-50px ,-28px)";

manu1.style.visibility="hidden";
manu2.style.visibility="hidden";
manu3.style.visibility="hidden";
manu4.style.visibility="hidden";

        }

})