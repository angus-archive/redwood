/*
Angus Goody
27/05/20

Main Javascript File
*/


//When the user clicks the "burger" icon in mobile nav mode
function burgerClicked(){
    //Show the drop down links
    document.getElementById("jsNav").classList.toggle("navOpen");
    //Update CSS to animate burger
    document.getElementById("burgerContainer").classList.toggle("burgerChange");
}
