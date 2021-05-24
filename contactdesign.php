<!DOCTYPE html>
    <head>
        <title>
            Contact form desgin
        </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        
 
    </head>
    <body style="background-color: gray;">
       <section class="my-5">
           <div class="py-5">
               <h2 class="text-center">Any Help</h2>
           </div>
           <div class="w-50 m-auto" >
               <form action="contact.php" method="POST">
                   <div class="form-group">
                       <label> Username</label>
                       <input type="text" name="user" autocomplete="off" class="form-control">

                   </div>
                   <div class="form-group">
                    <label> email id</label>
                    <input type="text" name="email" autocomplete="off" class="form-control">

                </div>
                <div class="form-group">
                    <label> Message</label>
                   <textarea class="form-control" name = "message">

                   </textarea>
                   <button type="submit" class="btn btn-success">Submit</button>
                </div>
               </form>
           </div>
       </section>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    </body>
</html>