
  function animacion(caso){
		if (!caso) {
			$(".progressbar").attr("data-active", "");
		} else {
			$(".progressbar").attr("data-active", caso);
		}

		var items = $(".progressbar li");
		for (var i = 0; i < items.length; i++) {
			var item = items[i];
			if (!caso) {
				$(item).removeClass("active");
			} else if (i < caso) {
				$(item).addClass("active");
			} else {
				$(item).removeClass("active");
			}
		}
	};

	function show_step(step){
		var data = $( "#form" ).serialize();
		var url = 'saveTemp.php?step=' + step;

		$.ajax({
			type: "POST",
			url: url,
			data: data
		}).done(function(resp){
			step = parseInt(step);
			if (step === 3) {
				var radio = parseInt(resp.radio);
				switch(radio) {
					case 1:
						urlform = 'pay1.php'
					break;
					case 2:
						urlform = 'php/pay2.php'
					break;
					case 3:
						urlform = 'php/pay3.php'
					break;
					default:
						urlform = 'php/pay1.php'
					break;
				}

				$('#divPago').load(urlform,function(responseTxt, statusTxt, xhr){
					if(statusTxt === "success") {
						$('.step').css( "display", "none" );
						$('#step'+ step).fadeIn("slow");
						animacion(step);
					}

					if(statusTxt === "error") {
						//
					}
				});
			} else {
				$('.step').css( "display", "none" );
				$('#step'+ step).fadeIn("slow");
				animacion(step);
			}
		});
	};

	$(function() {
		show_step(step);
	});