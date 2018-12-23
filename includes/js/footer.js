var randomLinks = $('.social'); //what i hover over
var original = randomLinks.css('background-color');
var colors = ['#4a88cf', '#58a61e', '#731d8c', '#b0d5cb', '#10038e', '#e329c0', '#fff', '#000', 'yellow'];

randomLinks.hover(function () { //mouseover
    var col2 = Math.floor(Math.random() * colors.length);
    var newcolor = colors[col2];
    $(this).css('background', newcolor);
}, function () { //mouseout
    $(this).css('background', original);
});


