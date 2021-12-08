<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Autocomplete textbox using jQuery, PHP and MySQL</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <style>  
           ul{  
                background-color:#eee;  
                cursor:pointer;  
           }  
           li{  
                padding:12px;  
           }  
           </style>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">ประเภท</h3><br />  
                <label>ค้นหาประเภท</label>  
                <input type="text" name="type_name" id="type" class="form-control" placeholder="ค้นหาประเภท" />  
                <div id="countryList"></div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#type').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"search.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#countryList').fadeIn();  
                          $('#countryList').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', 'li', function(){  
           $('#type').val($(this).text());  
           $('#countryList').fadeOut();  
      });  
 });  
 </script>  