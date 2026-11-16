
# Simple Packet Filtering Firewall

allowed_ips = ["192.168.1.10", "192.168.1.20"]
allowed_ports = [80, 443]

def check_packet(ip, port):

    print("\nIncoming Packet:", ip, "Port:", port)

    if ip not in allowed_ips:
        print("Packet Blocked: Unauthorized IP")

    elif port not in allowed_ports:
        print("Packet Blocked: Unauthorized Port")

    else:
        print("Packet Allowed")


# Test packets

packets = [
    ("192.168.1.10", 80),
    ("192.168.1.50", 80),
    ("192.168.1.20", 443),
    ("192.168.1.10", 21)
]

for ip, port in packets:
    check_packet(ip, port)
