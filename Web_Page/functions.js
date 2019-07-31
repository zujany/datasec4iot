

// Date filter 
function date_filter(){
        var from = new Date ($('#date-filter-from').datepicker({ dateFormat: 'dd/MM/yyyy' }).val());
        var to = new Date ($('#date-filter-to').datepicker({ dateFormat: 'dd/MM/yyyy' }).val());

        //Dates of all the files
        var files_dates = $('.file_date');

        for (var i = 0; i < files_dates.length; i++){
			// date = new Date(files_dates[i])
			console.log(files_dates[i])
		}

        console.log(files_dates);

// 	 if(from.getTime() < to.getTime()) {
// 	         console.info("from < to");
// 	 } 
// 	 else {
// 	         console.log("from > to");
// 	 }
}

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

