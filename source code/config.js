require("dotenv").config();

module.exports = {
    port: process.env.PORT,
    database: {
        connectionLimit: 10,
        host: process.env.DB_HOST,
        port: process.env.DB_PORT,
        user: process.env.DB_USERNAME,
        password: process.env.DB_PASSWORD,
        database: process.env.DB_DATABASE,
        multipleStatements: true,
    }
};