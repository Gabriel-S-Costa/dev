const pgp = require('pg-promise')();
const db = pgp({
   user: 'postgres', 
   password: 'snake@Bob_II',
   host: 'localhost',
   port: 5432,
   database: 'blog'
});

module.exports = db;