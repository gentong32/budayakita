<!doctype html>
<html>
<head>
   <title>Autocomplete textbox in CodeIgniter 4 with jQuery UI</title>

   <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

</head>
<body>

   <!-- CSRF token --> 
   <input type="hidden" class="txt_csrfname" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
   
   <!-- Autocomplete -->
   Search User : <input type="text" id="autocompleteuser">

   <br><br>
   Selected user id : <input type="text" id="userid" value='0' >

   <!-- Script -->
   <script type='text/javascript'>
   $(document).ready(function(){
     // Initialize
     $( "#isearch" ).autocomplete({

        source: function( request, response ) {

           // CSRF Hash
           var csrfName = $('.txt_csrfname').attr('name'); // CSRF Token name
           var csrfHash = $('.txt_csrfname').val(); // CSRF hash

           // Fetch data
           $.ajax({
              url: "<?=site_url('test/getAuto')?>",
              type: 'post',
              dataType: "json",
              data: {
                 search: request.term,
                 [csrfName]: csrfHash // CSRF Token
              },
              success: function( data ) {
                 // Update CSRF Token
                 $('.txt_csrfname').val(data.token);

                 response( data.data );
              }
           });
        },
        select: function (event, ui) {
           // Set selection
           $('#isearch').val(ui.item.label); // display the selected text
           $('#userid').val(ui.item.value); // save selected id to input
           return false;
        },
        focus: function(event, ui){
          $( "#isearch" ).val( ui.item.label );
          $( "#userid" ).val( ui.item.value );
          return false;
        },
      }); 
   }); 
   </script> 
</body> 
</html>