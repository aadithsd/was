
allowed_methods = ["GET", "POST"]

blocked_patterns = [
    "union select",
    "drop table",
    "../",
    "<script>"
]

def check_requests(req):

    print("\nIncoming request:", req)

    parts = req.split()

    if len(parts) < 3:
        print("Invalid HTTP request")
        return

    method = parts[0]

    if method not in allowed_methods:
        print("Access Denied: Method not allowed")
        return

    for pattern in blocked_patterns:
        if pattern in req.lower():
            print("Blocked: Suspicious activity detected")
            return

    print("Safe: Request is allowed")


req = [
    "GET /home HTTP/1.1",
    "POST /login HTTP/1.1",
    "DELETE /account HTTP/1.1",
    "GET /../../etc/passwd HTTP/1.1",
    "GET /search?q=<script> HTTP/1.1",
    "GET /login?user=union select HTTP/1.1",
    "INVALID"
]

for x in req:
    check_requests(x)
