import "dotenv/config";
import express, { request, response } from "express";
import { router } from "./routes";

const app = express();
app.use(express.json());
app.use(router);

app.get("/github", (request, response) => {
   response.redirect(`https://github.com/login/oauth/authorize?client_id=${process.env.GITHUB_CLIENT_ID}`)     
})

app.get("/singin/callback", (request, response) => {
   const { code } = request.query; // desestruturacao da url para ter o cod do callback

   response.json(
      {"code": code }
   )
})

app.listen(4000, () => console.log('Server is running in port 4000'));