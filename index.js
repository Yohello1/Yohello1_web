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


app.listen(port, () => {



  console.log(`Example app listening on port ${port}`)
})
