
<?php require_once "includes/navbar.php";?>

<div class="d-flex">
    <?php require_once "includes/sidebar.php";?>



    <div class="w-50 mx-auto">
    <form action ="http://localhost/task_manager/?url=login"  method="post" >
        
<!--EMAIL-->
        <div class="mb-3">
            <label class="form-label">email</label>
            <input type="email" name="email" class="form-control">    
        </div>

<!--mot de passe-->
        <div class="mb-3">
            <label class="form-label">Mot de passe</label>
            <input type="password" name="mdp" class="form-control">    
        </div>

        <button class ="btn btn-success">login</button>
    
    </from>    

</div>
</div>

