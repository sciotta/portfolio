var express = require('express');
var app = express();

app.use(express.static('.'));

app.listen(process.env.PORT || 8080, '0.0.0.0');
