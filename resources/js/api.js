import dotenv from "dotenv";
import { GoogleGenerativeAI } from "@google/generative-ai";
import express from "express";
import OpenAI from "openai";

dotenv.config();

const app = express();
const PORT = 3000;

// OpenAI APIの設定
const genAI = new GoogleGenerativeAI(process.env.GOOGLE_API_KEY);
const model = genAI.getGenerativeModel({ model: "gemini-1.5-flash" });
const client = new OpenAI({
  apiKey: process.env.OPENAI_API_KEY
});
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
  // クエリパラメータからプロンプトを取得し、配列に変換
  const prompt = req.query.prompt || "are you chatgpt?";
  const messages = [{ role: "user", content: prompt }];

  try {
    // OpenAI APIリクエスト
    const response = await client.chat.completions.create({
      model: "gpt-4o-mini", // モデル名
      messages: messages // メッセージ配列を渡す
    });
    // content部分だけを抽出
    const aiContent = response.choices[0].message.content;
    res.json({ content: aiContent }); // contentだけを返す
  } catch (error) {
    // エラー発生時の処理
    res.status(500).json({ error: error.message });
  }
});

// サーバーを起動
app.listen(PORT, () => {
  console.log(`Server running on http://localhost:${PORT}`);
});
