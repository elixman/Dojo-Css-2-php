<?php include("./header.html"); ?>
  <section class="shops">
    <script src="jquery.js"></script>
    <h2>OUR SHOPS</h2>
    <button id="display">See list</button>
    <p id="shopslist"></p>
      <script>

          // Using the Ajax method :

          // $("#display").one("click", function(){
          //   $.ajax({
          //      url : "list.json",
          //      type : "get",
          //      dataType : "json",
          //     success: function (data) {
          //       $.each( data,function(index ,d){
          //         $("#shopslist").append("<li><b>" + d.name + " </b>: " + d.city + "</li>" );
          //       });
          //     },
          //     error : function() {
          //       $("#shopslist").html("The content you're looking for couldn't be loaded");
          //     }
          //   });
          // });

        // Using the getJSON method :

        $.getJSON('list.json',function(data){
          $.each(data,function(index,d){
            $('#shopslist').append('<div class="shopslist"><li><b>' + d.name + ' </b>: ' + d.city + '</li></div>' );
          });
        });
            $('#shopslist').hide()
            $('#display').on('click', function(){
              $(this).toggleClass('active');
              $('#shopslist').slideToggle(800);
            });
      </script>
  </section>
<?php include("./footer.html"); ?>
