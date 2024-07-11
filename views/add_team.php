
<?php require_once "includes/navbar.php";?>

<div class="d-flex">
    <?php require_once "includes/sidebar.php";?>



    <div class="w-50 mx-auto">
    <form action ="http://localhost/task_manager/?url=add_team"  method="post" >

<!--L-->
        <div class="mb-3">
            <label class="form-label">nom equipe</label>
            <input type="text" name="nom" class="form-control">    
        </div>

<!--selection-->
        <div class="mb-3">
            <label class="form-label">selectionner un  utilisateur</label><br>
            <?php foreach($listUser as $user) { ?>

            
            <input class="form-check-input" type="checkbox" name="members[]" value="<?= $user ['user_id'] ?>" id="flexCheckDefault">
            <label class="form-label"><?= $user ['firstname'] ?></label><br>
        <?php   } ?>
        </div>

        <button class ="btn btn-success">add</button>
    
    </from>    

</div>
</div>

