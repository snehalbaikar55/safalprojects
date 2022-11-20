function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("citylocation-search");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";

        }
    }
}

function proptype() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("proptype-search");
    filter = input.value.toUpperCase();
    ul = document.getElementById("proptype");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";

        }
    }
}  

function roomtype() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("roomtype-search");
    filter = input.value.toUpperCase();
    ul = document.getElementById("roomtype");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";

        }
    }
}  


     
  $("#location-arrow").click(function(){
        $("#location-filter").toggle(100);
    });

    $("#property-arrow").click(function(){
        $("#propertype-filter").toggle(100);
    });   

    $("#roomtype-arrow").click(function(){
        $("#roomtype-filter").toggle(100);
    }); 

    /*jQuery("img.lazy").lazy({
        effect: "fadeIn",
        effectTime: 1500  //In milliseconds
    });*/

    /*<script type="text/javascript">

  $(document).ready(function(){

      $('#location-filter').click(function(){

        var city = $('input[type="checkbox"]:checked').map(function () {
    return this.value
      }).get();

        $.ajax({
          
          url:"<?php echo base_url()?>Central_mumbai/get_result",
          type:"POST",
          data:{selected_city: city},
          async: false,
          cache: false,
          success: function(data)
          {
             $('#v1').html(data);
        
          },
          error: function(data){
            alert("error");
          }

        });
    

      });
  });
  </script>-->*/

