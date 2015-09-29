$(document).ready(function() {
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
        if($('input:radio[name=' + index + ']:checked').val() === answers[index]) {
            console.log("i am correct");
            $('input:radio[name=' + index + ']').parent().removeClass();
            $(this).parent().addClass('correct');
        }
        else {
            console.log("i am wrong");
            $('input:radio[name=' + index + ']').parent().removeClass();
            $(this).parent().addClass('wrong');
        }
    });

    /************ INPUT ANSWERS AND HINTS *************/
    var answers = [
        ["Simple cuboidal epithelium", "Simple cuboidal"], // 0
        "Subcapsular sinus",
        ["Lymph follicle", "Lymph nodule", "Lymphoid follicle", "Lymphoid nodule"], 
        "Cortex",
        "Paracortex",
        "Medulla", // 5
        ["RANKL", "RANK Ligand", "RANK ligand", "Rank ligand"], 
        "Medulla",
        "Capsule",
        "Cortex",
        "Septa", // 10
        ["Tonsil", "Tonsils"], 
        ["Appendix", "Vermiform appendix"], 
        ["Peyer's patches", "Peyers patches"],
        "Bone marrow",
        "Cytokines", // 15
        "Basophilic",
        "Form boundaries",
        "APCs",
        "Cytoreticulum",
        "Cytokine secretion", // 20
        ["High endothelial venules", "High endothelial venule", "HEVs", "HEV"],
        "Stratified squamous epithelium",
        "Stave cells",
        "Thymus",
        "Germinal center", // 25
        "Marginal zone", 
        "Central arteriole",
        "Germinal center",
        ["Lymph follicle", "Lymph nodule", "Lymphoid follicle", "Lymphoid nodule"], // Repeat of #2
        "Stratified squamous epithelium", // 30
        ["Crypt", "tonsillar crypt"],
        "White pulp",
        "Red pulp",
        "Trabecula",
        "Eosin", // 35
        ["Silver stain", "periodic acid-Schiff reaction", "PAS reaction"],
        "sinuses",
        "cords",
        ["High endothelial venules", "HEVs"], // Repeat of #21
        ["afferent lymphatic", "afferent lymphatics", "afferent lymphatic vessels", "afferent lymphatic vessel", "afferent vessels", "afferent vessel"] // 40
    ];
    
    var hints = [
        "The space deep to the capsule", 
        "An aggregation of proliferating B cells", // 1
        "The superficial region of lymph nodes containing nodules of B cells", 
        "A region of lymph nodes containing T cells, dendritic cells, and HEVs", 
        "The deepest region of lymph nodes consisting of sinuses and cords packed with lymphocytes, plasma cells, and macrophages",
        "A region with fewer and larger, more developmentally mature thymocytes that undergo negative selection (aka clonal deletion)",
        "A thin connective tissue covering",  // 6
        "Region where thymocytes undergo positive selection (aka clonal selection)",
        "Extensions of the capsule separating the parenchyma into lobes",
        "Lymphatic tissue in nasopharynx and oropharynx",
        "A diverticulum off the first part of the large intestine", // 10
        "In the submucosa of the ileum, the terminal part of the small intestine",
        "One of two locations that aid the body in developing central tolerance by producing mature, immunocompentent T-lymphocytes.",
        "Small peptides and glycoproteins used in cell signaling", // 13
        "Thymocytes have abundant RER and Golgi for synthesizing TCR and CD4 and CD8 glycoproteins and therefore appear as densely packed basophilic clusters of cells.",
        "Form boundaries", // 15
        "APCs", // 16
        "Cytoreticulum", // 17
        "Cytokine secretion", // 18
        "Skin, mucous membranes (GI, respiratory, and UG tracts), and cells including: neutrophils, NK (natural killer) cells, leukocytes (excluding lymphocytes) and their secretions:<ul><li>HCl and organic acids (lowers local pH killing microorganisms directly or inhibiting their growth)</li><li>defensins (cationic polypeptides that disrupt bacteria cell walls)</li><li>lysozyme (hydrolyzes bacterial cell walls)</li><li>complement (proteins in blood plasma, mucus, and macrophages that react with bacterial surface components)</li><li>interferons (paracrine factors from leukocytes and virus-infected cells signaling NK cells to kill them).</li></ul>",
        "This system is slow to respond when initially presented with a foreign antigen by APCs, however, a population of memory lymphocytes produced from the initial exposure rapidly combats subsequent infections.",
        "Cells are presented with self- and foreign antigens by epithelioreticular cells. If lymphocytes recognize self-MHC displaying the self- and foreign antigens, they survive.",
        "Cells that recognize and tightly bind selfantigen displayed by TECs and dendritic cells with MHC II are eliminated. This step blocks autoimmunity. Cells that survive this test (only ~2% from original population in cortex!) become either cytotoxic CD8+ T lymphocytes (by losing CD4 and retaining CD8) or helper CD4+ T lymphocytes (by losing CD8 and retaining CD4). This stage is known as the single-positive stage. These mature T lymphocytes leave the thymic medulla and enter circulation.",
        "Slide 126 – younger thymus shows capsule sending connective tissue septa in the parenchyma creating incomplete lobules with an outer darkly staining cortex surrounding lightly staining medulla.<br>Slide 123 – thymus reaches maximum weight in adolescence (12-19 years old) then gradually involutes (20-60 years old) and hypertrophies, decreasing in activity, and fills with adipose. Fatty replacement leaves the thymus at 15g by age 60 (the thymus weighs 25g at birth and 40g in adolescence).",
        "Autoreactive CD4+ T-lymphocytes stimulate B-lymphocytes to produce pathogenic antibodies targeted to muscle endplate AchR.",
        "Multiple layers with flat apical cells", // 25,
        "Filters blood destroying old erythrocytes, other blood cells, and particulate debris from the blood (cells flowing through open circulation in the spleen must squeeze past the unique endothelial (stave) cells of sinusoids to re-enter circulation. Those unable to do so are engulfed by macrophages).",
        "Provides germinal centers in white pulp for B cell proliferation and differentiation in response to antigen presentation producing immunological response against blood-borne antigens",
        "Site of hematopoiesis during fetal development (yolk sac &rarr; liver/spleen &rarr; bone marrow)", // 28
        "White pulp provides a site for antigen presentation and proliferation/differentiation of lymphocytes. White pulp consists of masses of T cells surrounding a central arteriole forming periarteriolar lymphoid sheath (PALS) and the lymphoid nodules of B-cells.",
        "Red pulp is composed of reticular tissue containing vascular sinusoids and splenic cords (of Bilroth = densely packed lymphocytes, macrophages, reticular fibroblasts). The red pulp is filled with blood cells of all types and the spleen filters the blood through the red pulp removing particulate debris and old (~120 day life span!) or damaged blood cells.",
        "Splenic artery &rarr; trabecular artery &rarr; central arteriole &rarr; penicillar arteriole &rarr; splenic sinusoids &rarr; trabecular veins &rarr; splenic vein",
        "Phagocytosis of old or defective blood cells.", // 32
        "MALT = mucosa-associated lymphoid tissue. It consists of scattered, unencapsulated masses of lymphocytes spread in mucosal walls of the digestive, respiratory, urinary, and reproductive tracts. Collectively, it is the largest lymphatic organ in the body, containing up to 70% of all of the body’s immune cells! Most of the lymphocytes here are B cells; among T cells, CD4+ helper T cells predominate.",
        "MALT aids in immunological surveillance of inhaled or ingested pathogens. Lymphoid nodules of MALT are important sites for B cell differentiation and proliferation, specifically important for IgA synthesis.",
        "Inflamed tonsils result when the lymphatic tissue cannot overcome an overwhelming infection and immune cells secrete factors that initiate an inflammatory response. The redundancy of MALT throughout the body allows for damage or removal without great loss of function.",
        "A splenectomy imposes a life-long increase in susceptibility to infection, with the potential of fatal infection from overwhelming postsplenectomy infection (OPSI) from encapsulated bacteria. To reduce this risk, patients who undergo surgery to remove their spleen receive vaccines against these bacteria. The spleen has a significant role in the formation of antibodies, filtration of bacteria, and enhancement of phagocytosis. Vaccination is advised as serious infections can result. Prophylactic antibiotics use should be weighed against the prospect of drug-resistance pathogenic infection. There may be an increase in erythrocytes and platelets as the spleen normally functions in removing excess cells. Therefore, daily aspirin or another blood thinner may be necessary as an antiplatelet treatment to prevent formation of blood clots.",
        "dermis (dense irregular CT), bones (secreted by osteoblasts), tendons/ligaments (dense regular CT), capsules, fascia, fibrocartilage, dentin, sclera, and interstitial tissue.",
        "Hyaline and elastic cartilage, in the vitreous humor, notochord, IV discs, and articular cartilage.", // 38
        "<ul><li>Plasma cells – cell that secretes antibodies</li><li>B cells – progenitors to plasma cells</li><li>T cell – participates in cell-mediated immunity</li><li>Reticular cell (modified fibroblasts) – cells that produce reticulin fibers</li><li>Macrophages – specializes in phagocytosis</li><li>Dendritic cells – an antigen presenting cell (APC)</li></ul>",
        "Lymph nodes filter lymph and provide sites for antigen presentation, B cell proliferation and differentiation, and production of antibodies by resulting plasma cells.",
        "Secondary lymphoid follicle. B-lymphocytes undergoing rapid clonal expansion after antigenic simulation.",
        "Endothelial-lined lymphatic spaces", // 42
        "Reticular fibers filled with reticular cells, lymphocytes, macrophages, dendritic cells, plasma cells, and other leukocytes", // 43
        "The endothelial cells lining these specialized postcapillary venules are more cuboidal than simple squamous in appearance and have ovoid nuclei.",
        "Facilitate extravasation of leukocytes from the blood stream into the lymph node stroma.", // 45
        "The medulla of the lymph node is composed of medullary cords packed with cells (T-lymphocytes, B-lymphocytes, plasma cells, macrophages, dendritic cells, and reticular cells) and endothelial lined medullary sinuses that contain efferent lymph and fewer cells draining toward the efferent lymphatic vessel at the lymph node hilum.",
        "Removal of lymph nodes and formation of scar tissue forms a blockage to the flow of lymph. Arm mobility and sensory loss may also be factors associated with lymphedema.",
        "Dense connective tissue covering", // 48
        "Component of splenic parenchyma composed of lymphoid nodules and periarteriolar lymphoid sheaths (PALS)",
        "Component of splenic parenchyma composed of blood-filled sinuses and splenic cords", // 50
        "Extension of the capsule into the splenic parenchyma", // 51 
        "Numerous structures entering the convex surface of a lymph node", // 52
        "A space immediately deep to the subcapsular sinus", // 53
        "A dense connective tissue covering", // 54
        "One layer of cells; cell shapes are as tall as they are wide; nuclei are in-line and round",
        "An area of rapid B cell proliferation", // 56
        "Large clusters of lymphocytes", // 57
        "Specific tissue", // 58
        "Deep, epithelial invagination" // 59
    ];

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
                }
                else {
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
            else if ($.type(ans) === 'array') {
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
                }
                else {
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
            var a = helpSquare.parents('.list-item').find('.hint'), b = helpSquare.siblings('.hint');
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
            }
            else if (hint.siblings('.ion-ios-checkmark').is(":hidden")) {
                hint.siblings('.ion-ios-help-empty').fadeIn('slow');
            }/*
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
