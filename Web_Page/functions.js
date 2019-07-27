


// Download selected files

// $('#download_raw_files').click(dowload_selected_files(){
// 	alert('Hello');

// });


function download_all_selected(){

	var check_box = $('.checkbox-files');

	for (var i = 0; i < check_box.length; i++){
		if (check_box[i].checked) {
			console.log(check_box[i].parentElement.parentElement.parentElement.children)
		}
	}
}


// sudo iptables -F
// sudo iptables -t nat -F
// sudo iptables -t nat -A POSTROUTING -o eth1 -j MASQUERADE
// sudo iptables -A FORWARD -i eth1 -o eth0 -m state --state RELATED,ESTABLISHED -j ACCEPT
// sudo iptables -A FORWARD -i eth0 -o eth1 -j ACCEPT

// sudo sh -c "iptables-save > /etc/iptables.ipv4.nat"
