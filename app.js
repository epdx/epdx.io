const https = require('https');

const options = {
  hostname: '',
  port: 443,
  path: 'f98d50f5-6ad4-4119-a051-374f8094c048',
  method: 'GET',
};

const req = https.request(options, res => {
  console.log(`statusCode: ${res.statusCode}`);

  res.on('data', d => {
    process.stdout.write(d);
  });
});

req.on('error', error => {
  console.error(error);
});

req.end();
