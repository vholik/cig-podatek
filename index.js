const express = require("express");
const nodemailer = require("nodemailer");
require("dotenv").config();
const cors = require("cors");

const app = express();
const port = process.env.PORT || 5000;

const transporter = nodemailer.createTransport({
  host: "smtp.gmail.com",
  port: 587,
  secure: false,
  auth: {
    user: "transportcig@gmail.com",
    pass: process.env.SMTP_PASSWORD,
  },
});

app.use("/", express.static("public"));
app.use(cors());
const SUBJECT = "Prośba o kontakt";

app.get("/message", (req, res) => {
  const { message, email, phone, fullName } = req.query;

  if (!message) return res.status(400).send();
  if (!email) return res.status(400).send();
  if (!phone) return res.status(400).send();
  if (!fullName) return res.status(400).send();

  transporter.sendMail(
    {
      from: "transportcig@gmail.com",
      to: email,
      subject: SUBJECT,
      text: `<h2>Text:<p> ${message}</p>,\n</h2><h2>Telefon:<p> ${phone}</p>,\n<h2>Nazwisko:<p> ${fullName}</p>`,
    },
    (err, info) => {
      if (err) return res.status(500).send();
      res.status(200).send(info);
    }
  );
});

app.listen(port, () => {
  console.log(`Example app listening on port ${port}`);
});
