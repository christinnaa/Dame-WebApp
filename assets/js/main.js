
// SPINNER
$(window).on('load', function() {
    $(".spinner-container").fadeOut("slow");
});

// PRINT
function printPage() {
    //Get the print button and put it into a variable
    var printBtn = document.getElementById("print-btn");
    var backBtn = document.getElementById("back-btn");
    //Set the buttons visibility to 'hidden'
    printBtn.style.visibility = "hidden";
    backBtn.style.visibility = "hidden";
    //Print the page content
    window.print();
    printBtn.style.visibility = "visible";
    backBtn.style.visibility = "visible";
  }
