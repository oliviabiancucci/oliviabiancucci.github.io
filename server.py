from http.server import BaseHTTPRequestHandler, HTTPServer

class Handler(BaseHTTPRequestHandler):
    def do_GET(self):
        if self.path == '/':
            self.path = '/index.html' # Root is index.html
        try:
            with open(self.path[1:], 'rb') as file:
                content = file.read()
                self.send_response(200)
                self.send_header('Content-type', 'text/html')
                self.end_headers()
                self.wfile.write(content)
        except FileNotFoundError:
            self.send_error(404, "File Not Found: {}".format(self.path))

# Start the server
with HTTPServer(('localhost', 8000), Handler) as server:
    print("Server started on http://localhost:8000")
    server.serve_forever()
