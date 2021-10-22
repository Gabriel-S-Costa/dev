import { Request, Response } from "express";
import { AuthencateUserService } from "../services/AuthenticateUserService";

class AuthencateUserController {

   async handle(request: Request, response: Response) {
      
      const { code } = request.body;
      const service = new AuthencateUserService();      

      try {
         const result = await service.execute(code);
         return response.json(result);
          
      } catch (error) {
         response.json({error:error.message});
      }

   }
   
}

export { AuthencateUserController }