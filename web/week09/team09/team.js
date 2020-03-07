const express = require('express');
const app = express();
const port = 7000;

app.use(express.static("public"));
app.set("views", "views");
app.set("view engine", "ejs");



app.get('/math', math);
app.listen(port, () => console.log(`Example app listening on port ${port}!`));


function math(request, response) {
    var operation = request.query.operation;
    var left = Number(request.query.left);
    var right = Number(request.query.right);

    var result = 0;
    
    if (operation == 'add') {
        result = left + right;
    }
    else if (operation == 'subtract') {
        result = left - right;
    }
    else if (operation == 'multiply') {
        result = left * right;
    }
    else if (operation == 'divide') {
        result = left / right;
    }

    const params = {operation: operation, left: left, right: right, result: result};

	response.render('pages/display', params);

}