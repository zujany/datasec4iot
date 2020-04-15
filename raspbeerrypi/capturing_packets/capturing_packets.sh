#/home/pi/Documents/capturing_packets.sh  

now=$(date +"%Y%m%d_%H%M%S")
#Capturing packet from 00:00 to 23:40
sudo timeout 85200 tcpdump -i eth0 -w /home/pi/Documents/data/packets_$now.pcap


#Transfering the data to the server
sudo rsync -avz -e 'ssh' /home/pi/Documents/data/ datasec4iot@<server-ip>:/var/www/html/datasec4iot/Web_Page/data

#Remove after send it to the server
sudo rm /home/pi/Documents/data/* 

