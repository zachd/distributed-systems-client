import socket
import sys

# create socket
s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)

# ask for data from console
message = raw_input('Enter data to send: ')

# set GET message
data = "GET /echo.php?message=" + str(message) + " HTTP/1.1\r\n\r\n"

# connect to server and send message
s.connect(("localhost", 8000)) 
s.sendall(data)

# print sent and received data
received = s.recv(1024)
print "Sent:     {}".format(data)
print "Received: {}".format(received)