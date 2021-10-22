const postsData = require('../data/postsData');

exports.getPosts = function() {
   return postsData.getPosts();
};

exports.getPost = function(id) {
   return postsData.getPost(id);
};

exports.savePosts = function(post) {
   return postsData.savePosts(post);
}

exports.deletePost = function(id) {
   return postsData.deletePost(id);
};

exports.updatePost = function(id, post){
   return postsData.updatePost(id, post);
};