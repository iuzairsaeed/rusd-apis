// All modules imported
const config = require("./config");
const express = require("express");
const compression = require("compression");
const bodyParser = require("body-parser");
const PORT = config.port;
const moment = require('moment');

console.log(moment().format());
// App using express framework
const app = express();
app.set("view engine", "ejs");
app.use(compression());
app.use('/public', express.static('public'));

// Parsing requests
app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

// Routes
const routes = require("./routes/web")(app, express);
app.use(routes);


// listening to the port
app.listen(PORT, () => {
  console.log("Server up and listening " + PORT);
});
