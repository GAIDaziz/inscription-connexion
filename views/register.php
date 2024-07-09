
<?php require_once "includes/navbar.php";?>

<div class="d-flex">
    <?php require_once "includes/sidebar.php";?>



    <div class="w-50 mx-auto">
    <form action ="http://localhost/task_manager/?url=register"  method="post" >
        <div class="mb-3">
            <label for="exempleImputeEmail" class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control">
        </div>
        <!-- le prenom -->

        <div class = "mb-3">
            <label class="form-label">prenom</label>
            <input type="text" name="prenom" class="form-control">
        </div>   
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

        <button class ="btn btn-success">register</button>
    
    </from>    

</div>
</div>

