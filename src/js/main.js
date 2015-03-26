$(document).ready(function() {
    //##### send add record Ajax request to results.php #########
    $(".list-group-item.buttons").on('click', '#quizSubmit', function() {
    	// Grade quiz
        var userChoices = []; 
        var answers = ["B", "C", "C", "B", "A"];
        
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

    $('.check-input').each(function() {
        var answers = [
            "Simple cuboidal epithelium", // 0
            "Subcapsular sinus", 
            "Lymphoid follicle", 
            "Cortex", 
            "Paracortex", 
            "Medulla", // 5
            "RANKL", 
            "Medulla",
            "Capsule",
            "Cortex",
            "Septa", // 10
            "Tonsils", 
            "Appendix", 
            "Peyer’s patches",
            "Bone marrow", 
            "ctyokines", //15
            "Basophilic",
            "Form boundaries",
            "APCs",
            "Cytoreticulum",
            "Cytokine secretion", //20
            "High endothelial venules"
        ];

        var hints = [
            "The space deep to the capsule", 
            "An aggregation of proliferating B cells", // 1
            "The superficial region of lymph nodes containing nodules of B cells", 
            "A region of lymph nodes containing T cells, dendritic cells, and HEVs", 
            "The deepest region of lymph nodes consisting of sinuses and cord packed with lymphocytes, plasma cells, and macrophages",
            "Region where thymocytes undergo negative (clonal) deletion",
            "Thin connective tissue covering",  // 6
            "Region where thymocytes undergo positive (clonal) selection",
            "Extensions of the capsule separating the parenchyma into lobes",
            "Lymphatic tissue in nasopharynx and oropharynx",
            "A diverticulum off the first part of the large intestine", // 10
            "In the submucosa of the ileum, the terminal part of the small intestine",
            "One of two locations that aid the body in developing central tolerance by producing mature, immunocompentent T-lymphocytes.",
            "Name for small signaling proteins", //13
            "Thymocytes have abundant RER and Golgi for synthesizing TCR and CD4 and CD8 glycoproteins and therefore appear as densely packed basophilic clusters of cells.",
            "Blood-thymus barrier – squamous TECs joined by desmosomes and tight junctions line microvasculature, isolating the cortex (TECs + endothelial cells of BV + pericytes = BTB) – prevents unregulated exposure of thymocytes to antigens. Also, squamous TECs linked by tight junctions forming a functional sheet between these regions k/a: corticomedullary barrier",
            "Stellate TECs are also APCs expressing MHC I and II presenting antigens to thymocytes", // 16
            "Stellate TECs joined by desmosomes form a cytoreticulum (supportive structure) to which macrophages and developing lymphocytes attach instead of reticulin fibers",
            "Thymic (Hassall’s) corpuscles secrete cytokines (diverse group of peptides and glycoproteins with paracrine action) for T-cell development",
            "Skin, mucous membranes (GI, respiratory, and UG tracts), and cells including: neutrophils, NK (natural killer) cells, leukocytes (excluding lymphocytes) and their secretions:<ul><li>HCl and organic acids (lowers local pH killing microorganisms directly or inhibiting their growth)</li><li>defensins (cationic polypeptides that disrupt bacteria cell walls)</li><li>lysozyme (hydrolyzes bacterial cell walls)</li><li>complement (proteins in blood plasma, mucus, and macrophages that react with bacterial surface components)</li><li>interferons (paracrine factors from leukocytes and virus-infected cells signaling NK cells to kill them).</li></ul>",
            "This system is slow to respond when initially presented with a foreign antigen by APCs, however, a population of memory lymphocytes produced from the initial exposure rapidly combats subsequent infections.",
            "Cells are presented with self- and foreign antigens by epithelioreticular cells. If lymphocytes recognize self-MHC displaying the self- and foreign antigens, they survive.",
            "Cells that recognize and tightly bind selfantigen displayed by TECs and dendritic cells with MHC II are eliminated. This step blocks autoimmunity. Cells that survive this test (only ~2% from original population in cortex!) become either cytotoxic CD8+ T lymphocytes (by losing CD4 and retaining CD8) or helper CD4+ T lymphocytes (by losing CD8 and retaining CD4). This stage is known as the single-positive stage. These mature T lymphocytes leave the thymic medulla and enter circulation.",
            "Slide 126 – younger thymus shows capsule sending connective tissue septa in the parenchyma creating incomplete lobules with an outer darkly staining cortex surrounding lightly staining medulla.<br>Slide 123 – thymus reaches maximum weight in adolescence (12-19 years old) then gradually involutes (20-60 years old) and hypertrophies, decreasing in activity, and fills with adipose. Fatty replacement leaves the thymus at 15g by age 60 (the thymus weighs 25g at birth and 40g in adolescence).",
            "Autoreactive CD4+ T-lymphocytes stimulate B-lymphocytes to produce pathogenic antibodies targeted to muscle endplate AchR."
        ];

        $(this).bind('input keyup click', function() {
            var index = $(this).data('ansindex');
            var ans = answers[index];
            if ($.type(ans) === 'string') {
                if ($(this).val().toUpperCase() === ans.toUpperCase()) {
                    $(this).addClass('correct');
                    $(this).siblings('.ion-ios-help').hide();
                    $(this).siblings('.ion-ios-checkmark').show();
                    $('#rankl').siblings('.hint').fadeIn('slow');
                }
                else {
                    $(this).removeClass('correct');
                    $(this).siblings('.ion-ios-help').show();
                    $(this).siblings('.ion-ios-checkmark').hide();
                }
            }
            else if ($.type(ans) === 'array') {
                if ($.inArray($(this).val(), ans) > -1) {
                    $(this).addClass('correct');
                    $(this).siblings('.ion-ios-help').hide();
                    $(this).siblings('.ion-ios-checkmark').show();
                }
                else {
                    $(this).removeClass('correct');
                    $(this).siblings('.ion-ios-help').show();
                    $(this).siblings('.ion-ios-checkmark').hide();
                }
            }
        });
        
        $(this).siblings('.ion-ios-help').bind('click', function() {
            var index = $(this).siblings('.check-input').data('hintindex');
            var hint = hints[index];
            $(this).fadeOut('slow');
            var a = $(this).parents('.list-item').find('.hint'), b = $(this).siblings('.hint');
            if (a.length > 0) {
                $('<p>' + hint + '</p>').prependTo(a);
                a.fadeIn('slow');
            }
            else if (b.length > 0) {
                $('<p>' + hint + '</p>').prependTo(b);
                b.fadeIn('slow');
            }
        });

        $(this).siblings('.ion-alert-circled').bind('click', function() {
            var index = $(this).siblings('.check-input').data('hintindex');
            var hint = hints[index];
            $(this).fadeOut('slow');
            var a = $(this).parents('.list-item').find('.hint'), b = $(this).siblings('.hint');
            if (a.length > 0) {
                $('<p>' + hint + '</p>').prependTo(a);
                a.fadeIn('slow');
            }
            else if (b.length > 0) {
                $('<p>' + hint + '</p>').prependTo(b);
                b.fadeIn('slow');
            }
        });
    });

    $('.hint').each(function() {
        var hint = $(this);
        hint.find('.ion-ios-close').bind('click', function() {
            hint.fadeOut('slow');
            if (hint.parents('.list-item').find('.ion-ios-checkmark').is(":hidden")) {
                hint.parents('.list-item').find('.ion-ios-help').fadeIn('slow');
            }
            else if (hint.siblings('.ion-ios-checkmark').is(":hidden")) {
                hint.siblings('.ion-ios-help').fadeIn('slow');
            }
            else if (hint.parents('.list-item').find('.ion-alert-circled').is(":hidden")) {
                hint.parents('.list-item').find('ion-alert-circled').fadeIn('slow');
            }
            else if (hint.siblings('.ion-alert-circled').is(":hidden")) {
                hint.siblings('.ion-alert-circled').fadeIn('slow');
            }

        });
    });
});
