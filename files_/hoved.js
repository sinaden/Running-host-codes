

$(document).ready(function() {
    $('.drawer').drawer();
    externalLinks();


    $('#add-cart').click( function(event){
        var output = "";
     //  $("#box-cart").html(output);
    
    //    var ci = new CartItem(itemimg, 120);
        names.push(itemimg);
        console.log("clicked", itemimg);
    
    for (var i in names) {
            output += "<li> <span class=\"badge badge-secondary\">New</span> "
                +names[i];
                + " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" 
                + "</li>";
        }
        var firstOut = localStorage.getItem('out');
        firstOut += output;
        $("#box-cart").html(firstOut);
        localStorage.setItem('out', firstOut);
       // console.log(cartArray.length);
    });
    
});

function externalLinks() {
    $('a.new-window').bind('click', function(e) {
        var location = $(this).attr('href');
        window.open(location);
        e.preventDefault();
    });
}

var newCSS = {
  //  "color":"white",
  //  "background":"blue",
    "border":"red"
}

var cartArray = [];

class CartItem {
    constructor(name, price) {
        this.name = name;
        this.price = price;
    }
}


localStorage.setItem('Plant2', `Designed by Ann Kristin Einarsen. <br>
Sip is a two-part self-watering planter which plays with the shape of the classic terracotta form. 
Minimally constructed and smartly designed, a nylon wick works as an extension of the plant roots and draws water from the reservoir,
 enabling the plant to draw up just the water it needs. 
A cleverly shaped glazed tray holds water and allows for easy watering.`);

localStorage.setItem('Kettel2', `
Designed by Erik Magnussen.
                            <br>
                            The iconic vacuum jug EM77 has adorned coffee tables worldwide for more than 40 years,
                             and now a whole new member of the EM family is introduced:
                              The EM77 electric kettle, which will add the same style to the home as the vacuum
                               jug has done for decades. The cableless kettle can hold 1.5 l and is 
                            equipped with a removable limescale filter 
                            and dry boil safety switch. <br>
                            The base includes space for the cable.
`)

localStorage.setItem('Pot2', `Designed by George Sowden. <br>
Hay's Coffee Pot comprises a porcelain exterior with <br> innovative SoftBrew brewing device that infuses
 the coffee through a centrally located micro-thin <br> stainless steel filter to enhance the flavour.
`)


localStorage.setItem('Lamp2', `Designed by Markus Johansson. <br>
 This multi-functional floor lamp demonstrates the ingenuity, <br>
 the subtle skills and craftmanship of Le Klint’s latest adaptation, of a classic reading lamp. 
<br>
This beautiful modern design with its rotational head is appropriate for any interior, wherever it stands.`)

localStorage.setItem('whale_card2', `Riso printed with subtle matt soy based inks.  <br>
Comes with a brown kraft envelope. Size: 80mm × 104mm.
`)


$('.viewbtn').on('click', function(event){
    
    console.log("View Clicked");
    var imgId = $(this).attr('id');
    console.log(imgId);
    localStorage.setItem('last',imgId);
});

$('#searchButton1').bind('click', function(e){
    e.preventDefault;
    console.log("search button !");
    $('.drawer').drawer('toggle');
});


var itemimg = localStorage.getItem('last');
var itemtxt = localStorage.getItem(itemimg);


var x = $('#view_box');
var str = "url(rsc_shop/" + itemimg + ".jpg)";
x.css("background-image", str);
localStorage.removeItem('last');
var dbox = $('#dscBox');
dbox.html(itemtxt);

var yy = $('#jum');
yy.css("background-image", "url(rsc_shop/Lamp3.png)");



var names = [];
localStorage.setItem('out', '');


$( ".box-shadow" ).mouseover(function() {
    $(this).toggleClass('turnRed');

    $(this)
  .children()
  .children()
  .css("color","rgba(0, 52, 131, 0.911)");
 //   $(".card-text").parent("#card1").css("color","rgba(0, 52, 131, 0.911)");
  })
  .mouseout(function() {
    $(this).toggleClass('turnRed');
    $(this)
  .children()
  .children()
  .css("color","black");
    //$(".card-text").parent("#card1").css("color","black");

});