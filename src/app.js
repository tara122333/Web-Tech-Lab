const express = require("express");
const path = require("path");

const app = express();
const port = process.env.PORT || 80

var staticpath = path.join(__dirname,'../public');

// including middleware
app.use(express.static(staticpath));


app.get("/",(req,res)=>{
    res.send();
});

app.listen(port,()=>{
    console.log("server has been started on port 80");
});