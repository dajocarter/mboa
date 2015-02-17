$(document).ready(function() {
    //##### send add record Ajax request to results.php #########
    $("#quizSubmit").click(function() {      
    	// construct a post data structure
    	// and grade quiz
        var userChoices = []; 
        var answers = ["B", "C", "C", "B", "A"];
        
        $("input:checked").each(function (index) {
        	var choice = "q" + (index + 1) + "=" + $(this).val();

        	userChoices.push(choice);

        	if ($(this).val() === answers[index]) {
        		$(this).parent('label').addClass("correct");
        	}
        });
        
        var data = userChoices.join("&");
        var thisButton = $(this);
        jQuery.ajax({
        	type: "POST",
	        url: "results.php", // Where to make Ajax calls
	        data: data, // Form inputs
	        success: function (response) {
	        	// Add compare button to view results
	        	$('.list-group-item.buttons').append('<button class="btn btn-primary" id="viewResults">See how you did</button>');
	            // Disable the submit button
	            thisButton.prop("disabled", true);
	        },
	        error: function (xhr, ajaxOptions, thrownError) {
	            alert(thrownError);
	        }
        });
    });

	//##### Send get Ajax request to results.php #########
    $("#viewResults").click(function() {
        jQuery.ajax({
	        type: "GET", // HTTP method POST or GET
	        url: "results.php", //Where to make Ajax calls
	        dataType: "text", // Data type, HTML, json etc.
	        data: myData, //Form variables
	        success: function (response) {
	            //on success, hide  element user wants to delete.
	            $('#item_' + DbNumberID).fadeOut();
	        },
	        error: function (xhr, ajaxOptions, thrownError) {
	            //On error, we alert user
	            alert(thrownError);
	        }
        });
    });
});
