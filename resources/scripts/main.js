/*
Angus Goody
27/05/20

Main Javascript File
*/

//Show or hide navigation items (t=True will show)
function showHideNavItems(t){
    //Get the children to hide
    let c = document.getElementById("navUL").children;
    //Go through each child
    for (i=1; i < c.length; i++){
        //Display
        if (t){
            c[i].style.display="block";
        }
        //Hide
        else{
            c[i].style.display="none";
        }

    }


}



//Called when the max/min window size is reached
function changeNav(){
    
    //If it matches then we update to desktop navigation
    if (window.matchMedia(window.desktopWidth).matches){
        //Show all menu items
        showHideNavItems(true);
        //Hide the burger
        document.getElementById("dropDownLink").style.display="none";

    }
    //Otherwise update back to mobile
    else{
        //Hide all menu items
        showHideNavItems(false);
        //Show Burger
        document.getElementById("dropDownLink").style.display="block";
        //Ensure burger in correct state
        document.getElementById("burgerNavContainer").classList.remove("burgerChange");

    }
}

//Called when the burger div is pressed
function burgerPressed(x){
    //Update CSS to animate burger
    x.classList.toggle("burgerChange");
    //Get children menu items
    var c = document.getElementById("navUL").children;
    //Show the menu because it's currently hidden
    if (window.getComputedStyle(c[1]).getPropertyValue("display") !== "block"){
        showHideNavItems(true);
    }
    //HIDE all the menu items (starting from index 1)
    else{
        showHideNavItems(false);

    }
}

//Onload functions
window.onload = function(){
    //Setup a global desktop width
    window.desktopWidth="(min-width: 850px)";
    //When the window changes from this value called the "changeNav" function
    var desktopWidth = window.matchMedia(window.desktopWidth);
    changeNav();
    desktopWidth.addListener(changeNav);

}