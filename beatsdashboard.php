
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<form id="projectdetailsform">
<input type="text" name="projectid" placeholder="enter project id"/>
<input type="submit" name="submit" class="btn blue" id="submit_btn" value="check details"/>
</form>


<p id="details"></p>



<script>
$("#projectdetailsform").on("submit", function (e) {
    var dataString = $(this).serialize();
     
    $.ajax({
      type: "POST",
      url: "./get_project_details.php",
      data: dataString,
      success: function (data) {
        // Display message back to the user here
        console.log(data);
        
        // $("#result").text(" project created");
       
        $("#details").html(data);
        
              }
    });
 
    e.preventDefault();
});

</script>