from http.server import BaseHTTPRequestHandler, HTTPServer
import os

class handler(BaseHTTPRequestHandler):
    def do_GET(self):
        self.send_response(200)
        self.send_header('Content-type', 'text/html')
        self.end_headers()

        # Get the path of the requested file
        file_path = self.path.strip("/")
        
        # If the file path is empty, set it to 'index.html'
        if not file_path:
            file_path = 'index.html'
        
        # Check if the requested file exists
        if os.path.exists(file_path) and os.path.isfile(file_path):
            # Open and read the file
            with open(file_path, 'rb') as file:
                content = file.read()
            # Send the content of the file as the response
            self.wfile.write(content)
        else:
            # If the file doesn't exist, send a 404 Not Found response
            self.send_response(404)
            self.end_headers()
            self.wfile.write(bytes("File not found", "utf-8"))

# Run the HTTP server
with HTTPServer(('localhost', 8000), handler) as server:
    print("Server started on http://localhost:8000")
    server.serve_forever()
