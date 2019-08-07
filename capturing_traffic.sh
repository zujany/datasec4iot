

#Install the packet 'at' to schedule tasks


#Capturing packets
#Interface: eth0 (DHCP protocol)
#Capturing i groups of packets every 300 seg
#Files' names: file{0..5}


while true
do
sudo at midnight -f /home/pi/Documents/capturing_packets.sh 
sleep 1
done
 
 
for i in 0 1 2 3 4 5 
do
	now=$(date +"%Y%m%d_%H%M%S")
	sudo timeout 300 tcpdump -i eth0 -w /home/pi/Documents/data/packets_$now.pcap
done

#Transfering the data to the server
sudo rsync -avz -e 'ssh' /home/pi/Documents/data/ datasec4iot@157.159.68.44:/var/www/html/datasec4iot/Web_Page/data
#Remove all files after send them to the server
sudo rm /home/pi/Documents/data/*

	

#Read files .pcap
sudo tcpdump -ttttnnr file1.pcap 
tcpdump -qns 0 -X -r 



# sudo timeout 86220 tcpdump -i eth0 -w /home/pi/Documents/data/packets_$now.pcap