$(document).ready(function() {
    //##### send add record Ajax request to results.php #########
    $(".list-group-item.buttons").on('click', '#quizSubmit', function() {
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
        $.ajax({
        	type: "POST",
	        url: "post-results.php", // Where to make Ajax calls
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
    $(".list-group-item.buttons").on('click', '#viewResults', function() {
    	$.get("get-results.php", function(response) {
    		// Scroll to top
    		$("html, body").animate({ scrollTop: 0 }, "slow");

    		// Mark correct answers
    		var correct = ["B", "C", "C", "B", "A"];
    		for (var i = 0; i < correct.length; i++) {
    			var selector = "#graph-q" + (i + 1) + "-" + correct[i];
    			$(selector).children('.graph-bar-color').css({
    				"background-color": "#44cf6c"
    			});
    		};

    		// Show outline box
            $('.graph-bar-outline').show();

			// Get the total number of responses for each option for each question
            $.each( response, function( question, answers ) {
			  $.each( answers, function( answer, count ) {
			  	// Don't do this for the sum!
			  	if (answer === "sum") {
			  		return true;
			  	}
			  	// Calculate Percentage
			  	var percent = Math.round( ((count / answers["sum"]) * 100) );
			  	// Display It
			  	$('#percent-' + question + "-" + answer).text(percent + "%").show();
			  	// Fill in bar appropriately
			  	$('#graph-' + question + "-" + answer)
			  		.children('.graph-bar-color')
				  	.show()
			  		.css({ "width": (percent * 2) + "px" });
			  });
			});
    	}, "json");
		
		// Hide the buttons div since we're done with them now
        $('.list-group-item.buttons').html('<button class="btn btn-primary"><a href="/">Go Back</a></button>');
    });
});
