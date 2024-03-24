const express = require('express')
const fs = require('node:fs');
const app = express()
const port = 8080



// Static files
app.use(express.static('public'));
app.set('view engine', 'ejs');


// Pages & Requests
app.get('/', (req, res) =>
{
    res.render('index', {text: "world"});
})

app.get('/blog' (req,res) =>{
    res.render("blog");
})


app.listen(port, () => {
  console.log(`Example app listening on port ${port}`)
})
