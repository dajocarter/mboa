$(document).ready(function() {
  var ref = new Firebase('https://brilliant-heat-5271.firebaseio.com/');

  $('#quizSubmit').click(function(e) {
    e.preventDefault();
    var answers = ["b", "c", "c", "b", "a"];

    // Scroll to top
    $("html, body").animate({
      scrollTop: 0
    }, "slow");

    // Replace submit button with link to homepage
    $('.list-group-item.buttons').html('<button class="btn btn-primary"><a href="/A560">Go Back</a></button>');

    // Submit user's choices to Firebase
    $("input:checked").each(function(index) {
      var question = index + 1;
      var choice = $(this).val();

      ref.child(question).child(choice).transaction(function(count) {
        return count + 1;
      });
    });

    // Mark correct answers
    for (var i = 0; i < answers.length; i++) {
      var selector = "#graph-q" + (i + 1) + "-" + answers[i];
      $(selector).children('.graph-bar-color').css({
        "background-color": "#44cf6c"
      });
    };

    // Show outline box
    $('.graph-bar-outline').show();

    // Calculate percentages and color bars
    ref.on('value', function(questions) {
      questions.forEach(function(question) {
        var sum = 0;
        // loop through to calculate sum
        for (var option in question.val()) {
          if (question.val().hasOwnProperty(option)) {
            sum = parseInt(question.val()[option]) ? (sum + parseInt(question.val()[option])) : sum;
          }
        }

        // question.key() == 1, 2, 3, etc.
        // question.val() == {a: 4, b: 5, c: 6, etc.}
        // option == a, b, c, etc.
        // question.val()[option] == 4, 5, 6, etc.

        // loop through to show bars and percents
        for (var option in question.val()) {
          if (question.val().hasOwnProperty(option)) {
            // Calculate percent
            var percent;
            if (sum === 0) {
              percent = 0;
            } else if (parseInt(question.val()[option])) {
              percent = Math.round((question.val()[option] / sum) * 100);
            }

            // Cache selector since we're using it twice
            var graphBar = $('#graph-q' + question.key() + '-' + option)

            // Show bar outline
            graphBar
              .velocity({
                width: '200px'
              }, {
                duration: 1000,
                display: 'block'
              });

            // Show colored bar
            graphBar
              .children('.graph-bar-color')
              .velocity({
                width: (percent * 2) + 'px'
              }, {
                duration: 1000,
                display: 'block'
              });

            // Show the percent
            $('#percent-q' + question.key() + '-' + option)
              .text(percent + '%')
              .show()
          }
        }
      });
    });
  });


  /*/##### send add record Ajax request to results.php #########
    $('#quizSubmit').click(function(e) {
        e.preventDefault();
    	// Grade quiz
        var userChoices = [];
        var answers = ["B", "C", "C", "B", "A"];

        for (var i = 0; i < answers.length; i++) {
            var str = 'q' + (i+1) + '-' + answers[i];
            var selector = ".list-group-item-text[for='" + str + "']";
            $(selector).addClass("correct");
        };

        // Scroll to top
        $("html, body").animate({ scrollTop: 0 }, "slow");

        // Hide the buttons div since we're done with them now
        $('.list-group-item.buttons').html('<button class="btn btn-primary"><a href="/">Go Back</a></button>');


        $("input:checked").each(function (index) {
        	var choice = "q" + (index + 1) + "=" + $(this).val();

        	userChoices.push(choice);

        	if ($(this).val() === answers[index]) {
        		$(this).parent('label').addClass("correct");
        	}
        });

        // Construct a post data structure
        var data = userChoices.join("&");
        var thisButton = $(this);
        $.ajax({
        	type: "POST",
	        url: "post-results.php", // Where to make Ajax calls
	        data: data, // Form inputs
        })
        .done(function (response) {
            // Add compare button to view results
            $('.list-group-item.buttons').append('<button class="btn btn-primary" id="viewResults">See how you did</button>');
            // Disable the submit button
            thisButton.prop("disabled", true);
        })
        .fail(function (xhr, ajaxOptions, thrownError) {
            alert(thrownError);
        });
    });

	//##### Send get Ajax request to results.php #########
    /*$(".list-group-item.buttons").on('click', '#viewResults', function() {
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

    /************ GRADE THE TABLE *************/
  $('td input').bind('click', function() {
    console.log("hello");
    var answers = ["high", "low", "normal", "normal"];
    var index = $(this).attr('name');
    if ($('input:radio[name=' + index + ']:checked').val() === answers[index]) {
      $('input:radio[name=' + index + ']').parent().removeClass();
      $(this).parent().addClass('correct');
    } else {
      $('input:radio[name=' + index + ']').parent().removeClass();
      $(this).parent().addClass('wrong');
    }
  });

  /************ GRADE THE MULTIPLE CHOICE QUESTION *************/
  $('#multChoice input').bind('click', function() {
    var answer = "A";
    $('#multChoice label').removeClass('correct wrong');
    if ($(this).val() === answer) {
      $(this).parent().addClass('correct');
    } else {
      $(this).parent().addClass('wrong');
    }
  });

  /************ INPUT ANSWERS AND HINTS *************/

  $('.check-input').each(function() {
    var inputs = $(this);
    /********************** GRADE INPUTS *************************/
    inputs.bind('input keyup click', function() {
      var thisInput = $(this);
      var index = thisInput.data('ansindex');
      var ans = answers[index];
      var choice = thisInput.val().toUpperCase();

      if ($.type(ans) === 'string') {
        if (choice === ans.toUpperCase()) {
          thisInput.addClass('correct');
          thisInput.siblings('.ion-ios-help-empty').hide();
          thisInput.siblings('.ion-ios-checkmark').show();
          $('#rankl').siblings('.hint').fadeIn('slow');
        } else {
          thisInput.removeClass('correct');
          thisInput.siblings('.ion-ios-checkmark').hide();
          var hint1 = thisInput.parents('.list-item').find('.hint .ion-ios-close');
          var hint2 = thisInput.siblings('.hint').find('.ion-ios-close');
          if ((hint1.length && !hint1.is(':hidden')) || (hint2.length && !hint2.is(':hidden'))) {
            thisInput.siblings('.ion-ios-help-empty').hide();
          } else {
            thisInput.siblings('.ion-ios-help-empty').show();
          }
        }
      } else if ($.type(ans) === 'array') {
        var index = -1;
        ans.some(function(elt, idx) {
          if (choice === elt.toUpperCase()) {
            index = idx;
            return true;
          }
        });
        if (index > -1) {
          thisInput.addClass('correct');
          thisInput.siblings('.ion-ios-help-empty').hide();
          thisInput.siblings('.ion-ios-checkmark').show();
        } else {
          thisInput.removeClass('correct');
          thisInput.siblings('.ion-ios-checkmark').hide();
          var hint1 = thisInput.parents('.list-item').find('.hint .ion-ios-close');
          var hint2 = thisInput.siblings('.hint').find('.ion-ios-close');
          if ((hint1.length && !hint1.is(':hidden')) || (hint2.length && !hint2.is(':hidden'))) {
            thisInput.siblings('.ion-ios-help-empty').hide();
          } else {
            thisInput.siblings('.ion-ios-help-empty').show();
          }
        }
      }
    });
    /************************** SHOW HINT **************************/
    inputs.siblings('.ion-ios-help-empty').bind('click', function() {
      var helpSquare = $(this);
      var index = helpSquare.siblings('.check-input').data('hintindex');
      var hint = hints[index];
      helpSquare.fadeOut('slow');
      var a = helpSquare.parents('.list-item').find('.hint'),
        b = helpSquare.siblings('.hint');
      if (a.length > 0 && a.children().length < 2) {
        $('<p>' + hint + '</p>').prependTo(a);
        a.fadeIn('slow');
      } else if (a.length > 0 && a.children().length > 0) {
        a.fadeIn('slow');
      } else if (b.length > 0 && b.children().length < 2) {
        $('<p>' + hint + '</p>').prependTo(b);
        b.fadeIn('slow');
      } else if (b.length > 0 && b.children().length > 0) {
        b.fadeIn('slow');
      }
    });
    /*
        inputs.siblings('.ion-alert-circled').bind('click', function() {
            var index = $(this).siblings('.check-input').data('hintindex');
            var hint = hints[index];
            $(this).fadeOut('slow');
            var a = $(this).parents('.list-item').find('.hint'), b = $(this).siblings('.hint');
            if (a.length > 0 && a.children().length < 2) {
                $('<p>' + hint + '</p>').prependTo(a);
                a.fadeIn('slow');
            }
            else if (a.length > 0 && a.children().length > 0) {
                a.fadeIn('slow');
            }
            else if (b.length > 0 && b.children().length < 2) {
                $('<p>' + hint + '</p>').prependTo(b);
                b.fadeIn('slow');
            }
            else if (b.length > 0 && b.children().length > 0) {
                b.fadeIn('slow');
            }
        }); */
  });
  /********************* HIDE/SHOW HINT ICONS **********************/
  $('.hint').each(function() {
    var hint = $(this);
    hint.find('.ion-ios-close').bind('click', function() {
      hint.fadeOut('slow');
      if (hint.parents('.list-item').find('.ion-ios-checkmark').is(":hidden")) {
        hint.parents('.list-item').find('.ion-ios-help-empty').fadeIn('slow');
      } else if (hint.siblings('.ion-ios-checkmark').is(":hidden")) {
        hint.siblings('.ion-ios-help-empty').fadeIn('slow');
      }
      /*
            else if (hint.parents('.list-item').find('.ion-alert-circled').is(":hidden")) {
                hint.parents('.list-item').find('ion-alert-circled').fadeIn('slow');
            }
            else if (hint.siblings('.ion-alert-circled').is(":hidden")) {
                hint.siblings('.ion-alert-circled').fadeIn('slow');
            }*/
    });
  });
  /************ POPUP YOUTUBE VIDEOS **************/
  $('.popup-video').magnificPopup({
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,

    fixedContentPos: false
  });
});