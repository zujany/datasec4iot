#/home/pi/Documents/capturing_packets.sh  

# for i in 0 1 2 
# do
# 	now=$(date +"%Y%m%d_%H%M%S")
# 	sudo timeout 10 tcpdump -i eth0 -w /home/pi/Documents/data/packets_$now.pcap
# done

now=$(date +"%Y%m%d_%H%M%S")
sudo timeout 86100 tcpdump -i eth0 -w /home/pi/Documents/data/packets_$now.pcap


#Transfering the data to the server

sudo rsync -avz -e 'ssh' /home/pi/Documents/data/ datasec4iot@157.159.68.44:/var/www/html/datasec4iot/Web_Page/data

#Remove after send it to the server
sudo rm /home/pi/Documents/data/* 


