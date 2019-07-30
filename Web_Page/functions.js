

// Date filter 
function date_filter(){
	
	var from = $('#date-filter-from');
	var to = $('#date-filter-to');

	console.log(from, to);
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

