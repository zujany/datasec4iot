

#Capturing packets
#Interface: eth0 (DHCP protocol)
#Capturing i groups of packets every 2 seg
#Files' names: file{0..5}

for i in 0 1 2 3 4 5 
do
	sudo timeout 10 tcpdump -i eth0 -w /home/pi/Documents/data/file${i}.pcap #ASCII format
	
done



#Transfering the data to the server
sudo rsync -avz -e 'ssh' /home/pi/Documents/data/ datasec4iot@157.159.68.44:/home/datasec4iot/IoT_data

sudo rsync -avz -e 'ssh' /home/pi/Documents/data/ datasec4iot@157.159.68.44:/var/www/html/data

#Read files .pcap

sudo tcpdump -ttttnnr file1.pcap 

