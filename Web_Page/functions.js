
// Datepickers
$(function() 
{
    $( "#date-filter-from" ).datepicker();
    $( "#date-filter-to" ).datepicker();
});

// Date filter 
function date_filter(){
    var from = new Date ($('#date-filter-from').datepicker({ dateFormat: 'dd/MM/yyyy' }).val());
    var to = new Date ($('#date-filter-to').datepicker({ dateFormat: 'dd/MM/yyyy' }).val());
    //To have a valid filter interval 
	if(from.getTime() < to.getTime()) {
		//Dates of all the files -string-
    	var files_dates = $('.file_date');
    	for (var i = 0; i < files_dates.length; i++){

			// Dates of the files -date-
			date = new Date(files_dates[i].id);

			//Comparison to filtering
			if(!((date.getTime() >= from.getTime()) && (date.getTime() <= to.getTime()))){
				file_id = files_dates[i].id;
				$('#' + file_id).parent().hide();
			}
		}	
	} 
	else {
	     console.log("Invalid interval");
	}
}

// Remove Date filter
function remove_date_filter(){
	var files_dates = $('.file_date');
	for (var i = 0; i < files_dates.length; i++){
			file_id = files_dates[i].id;
			$('#' + file_id).parent().show();
	}
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

