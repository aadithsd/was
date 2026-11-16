servers=["198.162.10.100"]
clients=["198.162.10.11","198.162.10.12"]
ports=["80","443"]

def check_connection(ip, server, port, state):
    print("incoming connection: " ,ip, " -> " ,server)

    if ip not in clients:
        print("connection blocked, unauthorizedd client")
    elif server not in servers:
        print("connection blocked, unauthorized server")
    elif port not in ports:
        print("cnnection blocked, unauthorized port")
    elif state!="ESTABLISHED":
        print("connection blocked, not TCP")
    else:
        print("connection successfull")

connections=[
    ("198.162.10.11","198.162.10.100","56","ESTABLISHED"),
    ("198.162.10.11","198.162.10.100","80","ESTABLISHED"),
    ("198.162.10.11","198.162.10.100","80","SYN_SENT")
    
]

for x,y,z,a in connections:
    check_connection(x,y,z,a)
