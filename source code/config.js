module.exports = {
    port : process.env.PORT || 4664,
    database : {
        connectionLimit: 10,
        host: "schoolforms.cjahuqpumuov.us-east-1.rds.amazonaws.com",
        user: 'schoolforms',
        password: 'melosh123',
        database: "RUSD",
        port: '3306',
        multipleStatements: true,
    }
};

