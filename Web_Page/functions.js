

// Date filter 
function date_filter(){
        var from_raw = new Date ($('#date-filter-from').datepicker({ dateFormat: 'dd/MM/yyyy' }).val());
        var to = $('#date-filter-to').datepicker({ dateFormat: 'dd/MM/yyyy' }).val();

		var from = new Date(str.concat(from_raw.getFullYear(),-,from_raw.getMonth()+1,-,from_raw.getDate())
        console.info(from)

	// if(from.getTime() == to.getTime()) {
	//         console.info("a equals b");
	// } 
	// else {
	//         console.log("a NOT equals b");
	// }
}

document.getElementById("date-filter-from").addEventListener("change", function() {
    var input = this.value;
    var dateEntered = new Date(input);
    console.log(input); //e.g. 2015-11-13
    console.log(dateEntered); //e.g. Fri Nov 13 2015 00:00:00 GMT+0000 (GMT Standard Time)
});

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

