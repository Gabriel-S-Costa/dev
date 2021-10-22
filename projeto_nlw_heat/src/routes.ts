import { Router } from "express";
import { AuthencateUserController } from "./controllers/AuthenticateUserController";

const router = Router();

// funciona como middleware
router.post('/authenticate', new AuthencateUserController().handle);

export { router }