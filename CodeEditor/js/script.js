$(function(){
var colorSyntaxedWord = [
    "&lt;\\?php",
    "&lt;",
    "\\?&gt;",
    "&gt;",
    "\\/html&gt;",
    "\\/header&gt;",
    "\\/title&gt;",
    "\\/style&gt;",
    "\\/head&gt;",
    "\\/main&gt;",
    "\\/footer&gt;",
    "\\/script&gt;",
    "\\/body&gt;",
    "\\/h1&gt;",
    "\\/h2&gt;",
    "\\/p&gt;",
    "html&gt;",
    "header&gt;",
    "title&gt;",
    "style&gt;",
    "head&gt;",
    "main&gt;",
    "footer&gt;",
    "script&gt;",
    "body&gt;",
    "h1&gt;",
    "h2&gt;",
    "p&gt;"
];

function colorSyntaxe(){
    document.getElementById('cast').innerHTML = $('#edit').html().replace(
        regexFromMyArray,function(str){
    
        return '<span class="html">'+str+'</span>';
        }),
       $('#code').html($('#edit').html().replace(/<pre>|<\/pre>/gi, " "));
}
var regexFromMyArray = new RegExp(colorSyntaxedWord.join("|"), 'igm');
$('#edit').on('keyup click',function(event){
    colorSyntaxe();
});
var target = $("#cast");
  $("#edit").scroll(function() {
    target.prop("scrollTop", this.scrollTop)
          .prop("scrollLeft", this.scrollLeft);
  });

  function getRows(selector) {
    var height = $(selector).height();
    var line_height = $(selector).css('line-height');
    line_height = parseFloat(line_height)
    var rows = height / line_height;
    return Math.round(rows);
}

$('#edit').click(function(){
    $('#cast').innerHeight($('#edit').innerHeight());
    $('#cast').innerWidth($('#edit').innerWidth());
});
      $(document).ready(function(){
            colorSyntaxe();getRows('#edit');
      });
    
  });


    
    
    
    


    

