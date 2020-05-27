/*
Angus Goody
27/05/20

Main Javascript File
*/

var script = document.createElement('script');
script.src = '//code.jquery.com/jquery-1.11.0.min.js';
document.getElementsByTagName('head')[0].appendChild(script)


function dropDownPressed(){
    var c = document.getElementById("navUL").children;
    console.log(c)
    //Check if the dropdown is currently hidden or not
    let style = window.getComputedStyle(c[1]);
    //SHOW the menu because it's currently hidden
    if (style.getPropertyValue("display") !== "block"){
        console.log("Displaying menu");
        for (i=1; i < c.length; i++){
            c[i].style.display="block";
        }
        //Update Icon
        document.getElementById("burgerIcon").src = "resources/images/closeRed.png";


    }
    //HIDE all the menu items (starting from index 1)
    else{
        console.log("Hiding menu");
        for (i=1; i < c.length; i++){
            c[i].style.display="none";
        }
        //Update Icon
        document.getElementById("burgerIcon").src = "resources/images/hamRed.png";
    }

}

//Onload functions
window.onload = function(){
    //Get Slider values
    //var redSLider = document.getElementById("redSlider");
    //---Add Listeners---
    //Top Left
    //redSLider.addEventListener("input", function(){sliderChange(redSLider);},false);
}