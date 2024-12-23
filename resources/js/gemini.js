import dotenv from "dotenv";
import { GoogleGenerativeAI } from "@google/generative-ai";

dotenv.config();

const genAI = new GoogleGenerativeAI(process.env.GOOGLE_API_KEY);
const model = genAI.getGenerativeModel({ model: "gemini-1.5-flash" });

const prompt = "Explain how AI works";

async function getAIResponse() {
  try {
    const result = await model.generateContent(prompt);
    console.log(result.response.text());
  } catch (error) {
    console.error("Error:", error);
  }
}

getAIResponse();
