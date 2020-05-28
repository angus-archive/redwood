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
            //Update Icon
            document.getElementById("burgerIcon").src = "resources/images/closeRed.png";
        }
        //Hide
        else{
            c[i].style.display="none";
            //Update Icon
            document.getElementById("burgerIcon").src = "resources/images/hamRed.png";
        }

    }


}

//When the user clicks the "hamburger"
function dropDownPressed(){
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

//Called when the max/min window size is reached
function changeNav(w){

    //If it matches then we update to desktop navigation
    if (w.matches){
        console.log("Big window")
        //Show all menu items
        showHideNavItems(true);
        //Hide the burger
        document.getElementById("dropDownLink").style.display="none";

    }
    //Otherwise update back to mobile
    else{
        console.log("Mobile window")
        //Hide all menu items
        showHideNavItems(false);
        //Show Burger
        document.getElementById("dropDownLink").style.display="block";

    }
}
//Onload functions
window.onload = function(){
    //Setup a listener for when window is changed to/from mobile
    var desktopWidth = window.matchMedia("(min-width: 750px)");
    changeNav(desktopWidth);
    desktopWidth.addListener(changeNav)

}