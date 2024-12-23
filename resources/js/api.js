import dotenv from "dotenv";
import { GoogleGenerativeAI } from "@google/generative-ai";
import express from "express";

dotenv.config();

const app = express();
const PORT = 3000;

// OpenAI APIの設定
const genAI = new GoogleGenerativeAI(process.env.GOOGLE_API_KEY);
const model = genAI.getGenerativeModel({ model: "gemini-1.5-flash" });

// Gemini APIエンドポイント
app.get("/api/gemini", async (req, res) => {
  try {
    const prompt = req.query.prompt || "Explain how AI works";
    const result = await model.generateContent(prompt);
    const responseText = result.response.text();

    res.json({ success: true, response: responseText });
  } catch (error) {
    res.status(500).json({ success: false, message: error.message });
  }
});

// OpenAi APIエンドポイント
app.get("/api/openai", async (req, res) => {
  try {
    const prompt = req.query.prompt || "Explain how AI works";

    const stream = await openai.chat.completions.create({
      model: "gpt-4o-mini",
      messages: [{ role: "user", content: prompt }],
      stream: true,
    });

    let responseText = "";
    for await (const chunk of stream) {
      const content = chunk.choices[0]?.delta?.content;
      if (content) {
        responseText += content;
      }
    }

    res.json({ success: true, response: responseText });
  } catch (error) {
    console.error("Error in OpenAI API request:", error);
    // エラーをクライアントに送信
    res.status(500).json({ success: false, message: error.message });
  }
});

// サーバーを起動
app.listen(PORT, () => {
  console.log(`Server running on http://localhost:${PORT}`);
});
