


<div class = "wrap">
    <h2>Teacher Details</h2>
    <form method ="POST" action = "<?php echo get_admin_url() . 'admin.php?page=listing-page'; ?>" style = "padding: 5px">
        <div class = "name">
        <input type ="text" name = "name" placeholder = "Name"></input>
        </div><br>
        <div class = "email">
        <input type = "text" name = "email" placeholder = "E-mail"></input>
        </div><br>
        <div class = "telephone">
        <input type = "text" name = "telephone" placeholder = "Telephone"></input>
        </div><br>
        <div class = "Address">
        <input type = "text" name = "address" placeholder = "Address"></input>
        </div>
        <div class = "submit"> 
        <input type = "submit" name = "submit" value = "Submit"></input> 
        </div>  
    </form>
</div>