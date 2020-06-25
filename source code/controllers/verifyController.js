const connect = require("../database/database");
const Joi = require('@hapi/joi');
const helper = require("../utils/helper");

module.exports = {
  verifyemail: (req, res) => {
    let status = "active";
    const {
      UserID,
    } = req.body;
    console.log(req.body);
    let message = "Unable to connect, please try again.";
    const verifyemailquery = `Update RUSD.users SET status = '${status}' WHERE id = ${UserID} `;

    connect.query(verifyemailquery, (error, result) => {
      if (error) {
        console.log(error);
        res.send({
          success: 1,
          message: message
        });
      } else {
        message = "Your account has been verified.";
        res.send({
          success: 1,
          message: message
        });
      }
    }); // End verifyemailquery query
  }
};