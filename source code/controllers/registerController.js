const connect = require("../database/database");
const Joi = require('@hapi/joi');
const global_functions = require("../global_functions/functions");

module.exports = (req, res) => {

    
    const schema = Joi.object({
        fname: Joi.string().required(),
        lname: Joi.string().required(),
        email: Joi.string().required(),
        password: Joi.string().required(),
    });

    const {
        error
    } = schema.validate(req.body);

    if (error) return res.status(400).send(global_functions.responseMessage(error.details[0].message, 0));

    
    const data_array = [     
        req.body.email
    ];

    let status = "inactive";
    let token = global_functions.makeTokenFunc();


    const data_array2 = [
                    req.body.fname,
                    req.body.lname,
                    req.body.email,
                    req.body.password,
                    status,
                    token
                ];
                    

    const query = `SELECT email FROM RUSD.users WHERE  email =?`;

    connect.query(query, data_array, (error, data, fields) => {
                if (error) {
                    res.status(400).send(global_functions.responseMessage("Server error.", 0));
                } 
                else {             
                  
                     if(data.length < 1) {                        
                       
                        const query2 = `INSERT INTO RUSD.users (fname, lname, email, password, status, token) VALUES (?,?,?,?,?,?)`;
                    
                        connect.query(query2, data_array2, (error1, data, fields) => {
                                    if (error1) {
                                        res.status(400).send(global_functions.responseMessage("Server error.", 0));
                                    } else {
                                       // res.status(200).send(global_functions.getObjectData(data, data.length));

                                      

                                      UserName =  data["insertId"];

                                      const query3 = `SELECT * FROM RUSD.users WHERE id=?`;

                                      connect.query(query3, UserName,(error2, data, fields) =>{

                                        if(error2) {
                                        res.status(400).send(global_functions.responseMessage("Server error.", 0));

                                        }
                                        else  {                                            
                                         
                                          // res.status(200).send(global_functions.responseMessage(data, data.length)); 

                                           name = data[0].fname;                                           
                                           email = data[0].email;
                                           resetLink = "http://pro.celeritas-solutions.com:4664/rusd/api/verify/"+UserName+"/"+name;
                                         
                                           global_functions.forgotPasswordEmail(name, resetLink, email);
                                           return res.status(200).send(global_functions.responseMessage("Email sent successfully.", 1));
                                        }


                                      });

                                      

                                        
                                    }
                        }); 
                       
                    }
                    else {

                        res.status(400).send(global_functions.responseMessage("Email Already exists.", 0));  
                    }

                }
    }); 
       
};