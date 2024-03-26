const express = require('express')
const fs = require('node:fs');
const CryptoJS = require("crypto-js");
const app = express();
const port = 8080;


// Static files
app.use(express.static('public'));
app.use(express.urlencoded());
app.use(express.json());
app.set('view engine', 'ejs');


// Pages & Requests
app.get('/', (req, res) =>
{
    res.render('index', {text: "<h1> HII </h1>"});
})

app.get('/blog', (req,res) => {
    var bannerCode = "";
    var bannerCSS = "";
    try{
        bannerCode = fs.readFileSync('internal/banner.html', 'utf8');
    }
    catch(err)
    {
        console.log(err);
    }

    try{
        bannerCSS = fs.readFileSync('internal/banner.css', 'utf8');
    }
    catch(err)
    {
        console.log(err);
    }

    res.render("blog", {bannerCode: bannerCode, bannerCSS: bannerCSS});
})

app.get('/projects', (req, res) =>{
    var bannerCode = "";
    var bannerCSS = "";
    try{
        bannerCode = fs.readFileSync('internal/banner.html', 'utf8');
    }
    catch(err)
    {
        console.log(err);
    }

    try{
        bannerCSS = fs.readFileSync('internal/banner.css', 'utf8');
    }
    catch(err)
    {
        console.log(err);
    }

    res.render("projects", {bannerCode: bannerCode, bannerCSS: bannerCSS});
})


app.get('/blogEdit', (req, res) =>{
    var bannerCode = "";
    var bannerCSS = "";
    try{
        bannerCode = fs.readFileSync('internal/banner.html', 'utf8');
    }
    catch(err)
    {
        console.log(err);
    }

    try{
        bannerCSS = fs.readFileSync('internal/banner.css', 'utf8');
    }
    catch(err)
    {
        console.log(err);
    }

    res.render("blogEdit",  {bannerCode: bannerCode, bannerCSS: bannerCSS});
})

app.post('/blogPost', (req, res) => {
    var textt = req['body']['text'];
    var title = req['body']['title'];

    console.log(textt);

    var decrypted = CryptoJS.AES.decrypt(textt, "ELjiJ5/njYSYYKJI1GSYY6mV7bhhQdgwGwXj7TCQSATsRsjHQMYPVY/+hG1tWV0f");
    var finalText = decrypted.toString(CryptoJS.enc.Utf8);
    console.log(finalText);

})


app.listen(port, () => {
  console.log(`Example app listening on port ${port}`)
})