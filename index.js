const express = require("express");
const fs = require("fs")
const Router = express();
const port = 3000;



Router.use(express.json());


Router.post("/signup", function(req,res){
    res.json({
        message:"Progress check in javascript"
    })
})


