


// Download selected files

// $('#download_raw_files').click(dowload_selected_files(){
// 	alert('Hello');

// });


function download_all_selected(){
	// console.log('Download all')
	console.log('todos')
	console.log($('.checkbox-files'))
	var check_box = $('.checkbox-files');
	// console.log('query de prueba')
	// console.log(check_box.attr(checked));
	console.log('Separacion')
	for (var i = 0; i < check_box.length; i++){
		if (check_box[i].is(checked)) console.log(check_box[i]);
	}
}


// sudo iptables -F
// sudo iptables -t nat -F
// sudo iptables -t nat -A POSTROUTING -o eth1 -j MASQUERADE
// sudo iptables -A FORWARD -i eth1 -o eth0 -m state --state RELATED,ESTABLISHED -j ACCEPT
// sudo iptables -A FORWARD -i eth0 -o eth1 -j ACCEPT

// sudo sh -c "iptables-save > /etc/iptables.ipv4.nat"
