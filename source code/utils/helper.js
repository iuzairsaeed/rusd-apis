const connect = require("../database/database");
const moment = require('moment');
const request = require("request");
const _ = require("lodash");

let self = module.exports = {

  dbQuery: async (query) => {
    const response = await new Promise((resolve, reject) => {
      connect.query(query, (error, result, fields) => {
        if (error) return reject(error);
        resolve(result);
      });
    });
    return response;
  },

  getObjectData: (data, status) => {
    response = {};
    response.statusCode = status;
    response.results = data;
    return response;
  },
  getFailureResponse: (msg) => {
    let failureObj = {};
    failureObj.statusCode = 0;
    failureObj.errorMessage = msg;
    return failureObj;
  },
  responseMessage: (msg, code) => {
    let obj = {};
    obj.statusCode = code;
    obj.message = msg;
    return obj;
  },
  finterQuestionsFinalResponse: (data, standardquestions) => {
    response = {};
    response.statusCode = status;
    response.results = data;
    return response;
  },

  makeTokenFunc: () => {
    var text = "";
    var length = 16;
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    for (var i = 0; i < length; i++)
      text += possible.charAt(Math.floor(Math.random() * possible.length));
    return text;
  },

  forgotPasswordEmail: (uname, link, to) => {

    let EmailBody = `<!DOCTYPE html>
        <html lang="en">
        <head>
          <meta charset="UTF-8" />
          <meta name="viewport" content="width=device-width, initial-scale=1.0" />
          <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        </head>
        
        <body>
          <table style="margin: auto; background:#F3F3F3" border="0" cellpadding="20" width="80%" cellspacing="0">
            <tr>
              <td colspan="2">
                <h3 style="color:#666666">
                  Hi
                  <span >${uname},</span>
                </h3>
        
                <p style="color:#666666">
                  Please <a href="${link}">click here</a> to verify the email into the RUSD App.
                </p>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <p style="color:#666666">
                  In case of any issues, please send us an email at <a href="mailto:technology.helpdesk@celeritas-solutions.com">technology.helpdesk@celeritas-solutions.com</a>.
                </p>
              </td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#E2E2E2" align="center">
                <p style="color:#666666">2020 &copy; RSUD. All Rights Reserved</p>
              </td>
            </tr>
          </table>
        </body>
        </html>`;

    request.post({
        url: "http://ec2-54-84-36-230.compute-1.amazonaws.com/send-email/send-email.php",
        form: {
          Subject: "RUSD App - Verify Email",
          EmailBody,
          ToEmailAddress: to,
          FromEmailAddress: 'no-reply@mnd.jmx.mybluehost.me',
          FromUserName: "RUSD App"
        },
        rejectUnauthorized: false
      },
      async function (err, httpResponse, body) {
        if (err) {
          console.log(`Error: Sending email to ${to}`);
          console.log(err);
        } else {
          let responseObj = JSON.parse(body);
          if (responseObj.results[0].status) {
            console.log(`Success: Email successfully sent to ${to}`);
            return true;
          } else {
            console.log(`Error: Unable to send an email to ${to}`);
            return false;

          }
        }
      }
    );
  },
};