var card_count = 0;

function StoreItem(name,price,image){
    this.name = name;
    this.price = price;
    this.image = image;
    this.card_number = card_count
    card_count++;
    this.displayItem = function() {
        // Get the card element using its cardNum
        var card = document.getElementsByClassName('card')[this.card_number];
    
        card.innerHTML += '<img src="images/'+ this.image + '" height="100">';
        card.innerHTML += '<h3>' + this.name + '</h3><hr />';
        card.innerHTML += '<p>' + this.price + '</p>';
    };
}



var item1 = new StoreItem("Pirate Knight Comic","$12.00","the_pirate_knight.png")
var item2 = new StoreItem("Pirate Knight Game","$22.00","PK_color.JPEG")

item1.displayItem()
item2.displayItem()