const database =  require('../infra/database');

exports.getPosts = function() {
   return database.query('select * from posts');
};

exports.getPost = function(id) {
   return database.none('select * from posts where id = $1', [id]);
};

exports.savePosts = function (post) {
   return database.one('insert into posts (title, content) values ($1, $2) returning *', [post.title, post.content]);
};

exports.updatePost = function(id, post) {
   return database.none('update posts set title = $1, content = $2 where id = $3', [post.title, post.content, id]);
};

exports.deletePost = function(id) {
   return database.none('delete from posts where id = $1', [id]);
};

