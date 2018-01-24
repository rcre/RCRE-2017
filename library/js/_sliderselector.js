

// Update the current slider value (each time you drag the slider handle)

var value = jQuery("#squareFootage").val();
	var final = value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    jQuery("#sfOutput").text( final );

jQuery("#squareFootage")[0].oninput = function() {
	var value = jQuery( this ).val();
	var final = value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    jQuery("#sfOutput").text( final );
};

// Explaination of whats Happening in JS

// create a variable that selects the slider itself
var ddslider = document.getElementById("dockDoors");

// crete a variable that selevts the location of the results
var ddoutput = document.getElementById("dockOutput");

// To start we remove current content of the value location and 
// Set the "inner content" of the result location 
// With the value of the slider element
ddoutput.innerHTML = ddslider.value; 

// WHEN (Every time) the slider element is updated we 
// Update the current slider value (each time you drag the slider handle)
// replacing it with the results
ddslider.oninput = function() {
	// Assign the insides the value of the slider element 
    ddoutput.innerHTML = this.value;
};