const http = require('http');

const server = http.createServer((req, res) => {
  const userAgent = req.headers['user-agent'];
  res.end(`User-Agent: ${userAgent}`);
});

const port = 8000;
server.listen(port, () => {
  console.log(`Server listening on port ${port}`);
});

