const express = require("express");
const nodemailer = require("nodemailer");
require("dotenv").config();

const app = express();
const port = 3333;

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
      text: `Message: ${message},\n Email: ${email},\n PhoneNumber: ${phone},\n Name: ${fullName}`,
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
