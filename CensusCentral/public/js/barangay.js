
	// // Select/Deselect checkboxe
	// var checkbox = $('table tbody input[type="checkbox"]');
	// $("#selectAll").click(function(){
	// 	if(this.checked){
	// 		checkbox.each(function(){
	// 			this.checked = true;                        
	// 		});
	// 	} else{
	// 		checkbox.each(function(){
	// 			this.checked = false;                        
	// 		});
	// 	} 
	// });
	// checkbox.click(function(){
	// 	if(!this.checked){
	// 		$("#selectAll").prop("checked", false);
	// 	}
	// });

	// // Filter table rows based on searched term
    // $(document).ready(function(){
    //     // Activate tooltips
    //     $('[data-toggle="tooltip"]').tooltip();
        
    //     // Filter table rows based on searched term
    //     $("#search").on("keyup", function() {
    //         var term = $(this).val().toLowerCase();
    //         $("table tbody tr").each(function(){
    //             $row = $(this);
    //             var name = $row.find("td:nth-child(2)").text().toLowerCase();
    //             console.log(name);
    //             if(name.search(term) < 0){                
    //                 $row.hide();
    //             } else{
    //                 $row.show();
    //             }
    //         });
    //     });
    // });

	// // switch panel 
	// $(document).ready(function() {
	// 	// When the view icon is clicked
	// 	$('.view').click(function() {
	// 		$('.table-responsive').hide();
	// 		$('.viewInformation').show();
	// 	});
	  
	// 	// When the back button is clicked
	// 	$('#back').click(function() {
	// 		$('.table-responsive').show();
	// 		$('.viewInformation').hide();
	// 	});
	//   });


	function selectBarangay(barangay) {
		document.getElementById('selected-barangay').value = barangay;
		document.getElementById('barangay-form').submit();
	}
	

	  
	  
	  