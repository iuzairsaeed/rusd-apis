const loginController = require("../controllers/loginController");
const registerController = require("../controllers/registerController");
const verifyController = require('../controllers/verifyController');

module.exports = (app, express) => {
  const route = express.Router();

  route.post("/rusd/api/login", loginController);
  route.post("/rusd/api/register", registerController);
  route.get('/rusd/api/verify/:id/:name', function (req, res) {
    res.render('thankyou', { data: req.params });
  });

  route.post("/verify/email", verifyController.verifyemail);

  return route;
};