const connect = require("../database/database");
const Joi = require('@hapi/joi');
const global_functions = require("../global_functions/functions");

module.exports = (req, res) => {

    const schema = Joi.object({
        email: Joi.string().required(),
        password: Joi.string().required(),
    });

    const {
        error
    } = schema.validate(req.body);

    if (error) return res.status(400).send(global_functions.responseMessage(error.details[0].message, 0));

    const data_array = [
        req.body.email,
        req.body.password
    ];
    const query = `SELECT id, fname, lname, email, status FROM users Where email =? AND binary password=?`;

    connect.query(query, data_array, (error, data, fields) => {
        if (error) {
            res.status(400).send(global_functions.responseMessage("Server error.", 0));            
        }
        else {
         //res.status(200).send(global_functions.getObjectData(data, data.length));

         console.log(data.length);
            if(data.length > 0) {

                if(data[0].status == "inactive") {
                    res.status(400).send(global_functions.responseMessage("Please activate your account.", 2));  
                }
                else {
                    res.status(200).send(global_functions.getObjectData(data, data.length));

                }
            }
            else {
                res.status(400).send(global_functions.responseMessage("Server error.", 0));
            

            }
       }
    });
};