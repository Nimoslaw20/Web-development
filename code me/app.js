var express= require("express");
//var path= require("path");
var app= express();
// ======= set up engine view ========
//app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'html');
app.set('views', './views')

// setup statics
app.use('/views',express.static('views'))

// ===== routing =====
app.get('/login', (req, res) => {
    res.render(index);
    
});

app.get('/dashboard', (req, res) => {
     res.send('login');
    
});



// ====== server listening on port 3000 ====
 app.listen(3000, () => {
     console.log(`Server started on 3000`);
 });



