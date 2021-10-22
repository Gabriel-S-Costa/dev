const crypto = require('crypto');
const axios = require('axios');
const postService = require('../service/postsService');

// generating random strings
const generate = function() {
   return crypto.randomBytes(20).toString('hex');
}

const request = function(url, method, data) {
   return axios({ url, method, data});
}

// .only executa somente o teste em que está alterando
test('Should get a posts', async function() {
   // given - dado que 
   const post1 = await postService.savePosts({ title: generate(), content: generate() });
   const post2 = await postService.savePosts({ title: generate(), content: generate() });
   const post3 = await postService.savePosts({ title: generate(), content: generate() });
   const response = await request('http://localhost:3000/posts', 'get');
   expect(response.status).toBe(200);
   // when - quando acontecer
   const posts = response.data;

   // then - então
   expect(posts).toHaveLength(3);
   // deleting the posts 
   await postService.deletePost(post1.id);
   await postService.deletePost(post2.id);
   await postService.deletePost(post3.id);
});

test('Should save a posts', async function() {
   const data = { title: generate(), content: generate() };     
   const response = await request('http://localhost:3000/posts', 'post', data);
   expect(response.status).toBe(201);
   
   const post = response.data;   
   expect(post.title).toBe(data.title);
   expect(post.content).toBe(data.content);

   // deleting the posts 
   await postService.deletePost(post.id);
   
});

test.only('Should update a posts', async function() {
   const post = await postService.savePosts({ title: generate(), content: generate() });
   post.title = generate();
   post.content = generate();     
   const response =   await request(`http://localhost:3000/posts/${post.id}`, 'put', post);   
   expect(response.status).toBe(204);
   const updatedPost = await postService.getPost(post.id);

   expect(updatedPost.title).toBe(post.title);
   expect(updatedPost.content).toBe(post.content);

   // deleting the posts 
   await postService.deletePost(post.id);
   
});

test.only('Should delete a posts', async function() {
   const post = await postService.savePosts({ title: generate(), content: generate() });   
   const response = await request(`http://localhost:3000/posts/${post.id}`, 'delete'); 
   expect(response.status).toBe(204);
   const posts = await postService.getPosts();
   expect(posts).toHaveLength(0);   
});
