function getRate(weight, type) {
    switch(type) {
        case "Letters (Stamped)":
           return 1;
        case "Letters (Metered)":
           return 2;
        case "Large Envelopes (Flats)":
            return 3;
        default:
           return 4;
     }
}


function calculate(req, res) { 
    var weight = req.query.weight;
    var type = req.query.type;
 
    var price = getRate(weight, type);
 
    var stuff = {weight: weight, type: type, price: price};
 
    res.render('price', stuff);
 }

 module.exports = {calculate: calculate};