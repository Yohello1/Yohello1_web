const express = require('express')
const fs = require('node:fs');
const CryptoJS = require("crypto-js");
const app = express();
const port = process.env.PORT || 8080;


// Static files
app.use(express.static('public'));
app.use(express.urlencoded({extended: true}));
app.use(express.json());
app.set('view engine', 'ejs');
app.set('port', port);
module.exports = app;


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

    let linksToFiles = fs.readdirSync("public/myPosts");

    console.log(linksToFiles);

    var str = "";

    linksToFiles.forEach(function(slide)
    {
        str += '<a href=myPosts/' + slide + '>' + slide + '</a> <br>';
    });

    res.render("blog", {bannerCode: bannerCode, bannerCSS: bannerCSS, links: str});
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


app.listen(port, () => {
  console.log(`Example app listening on port ${port}`)
})
