

// Date filter 
function date_filter(){
        var from = new Date ($('#date-filter-from').datepicker({ dateFormat: 'dd/MM/yyyy' }).val());
        var to = new Date ($('#date-filter-to').datepicker({ dateFormat: 'dd/MM/yyyy' }).val());

        var files_date = $('.file_date');

        console.log(files_date[0]);

// 	 if(from.getTime() < to.getTime()) {
// 	         console.info("from < to");
// 	 } 
// 	 else {
// 	         console.log("from > to");
// 	 }
// }

function download_all_selected(){
	console.log("Hello Word");
}


// Download selected files

function download_all_selected(){
	var check_box = $('.checkbox-files');

	for (var i = 0; i < check_box.length; i++){
		if (check_box[i].checked) {
			check_box[i].parentElement.parentElement.parentElement.children[2].children[0].click()
		}
	}
}

// Select all files

function select_all(){
	var check_box = $('.checkbox-files');
	var select_all_checkbox = $('#select_all');

	if (select_all_checkbox[0].checked) {
		for (var i = 0; i < check_box.length; i++){
			check_box[i].checked = true;		
		}
	}
	else{
		for (var i = 0; i < check_box.length; i++){
			check_box[i].checked = false;
		}
	} 

}

// Hide individual donwload  links
$(document).ready(function () {
	$('.download_links').hide();
});

