const mysql = require("mysql");
const config = require("../config");

// database pool connection
const pool = mysql.createPool(config.database);

pool.getConnection((err, connection) => {
  if (err) {
    if (err.code === "PROTOCOL_CONNECTION_LOST") {
      console.error("Database connection was closed.");
    }
    if (err.code === "ER_CON_COUNT_ERROR") {
      console.error("Database has too many connections.");
    }
    if (err.code === "ECONNREFUSED") {
      console.error("Database connection was refused.");
    }
  } else {
    console.log(
      `Database successfully connected as id: ${connection.threadId}`
    );
  }

  if (connection) connection.release();
  return;
});

module.exports = pool;
