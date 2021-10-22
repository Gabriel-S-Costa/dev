import { Router } from "express";
import { SurveyController } from "./controllers/SurveyController";
import { UserController } from "./controllers/UserController";

const router = Router();

const usercontroller = new UserController();
const surveycontroller = new SurveyController();

router.post("/users", usercontroller.create);
router.post("/surveys", surveycontroller.create);
router.get("/surveys", surveycontroller.show);

export { router }