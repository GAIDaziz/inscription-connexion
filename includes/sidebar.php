<div class="w-25 bg-body-tertiary vh-100" >
    <p><spam class="m-2"><i class="fa-solid fa-house-chimney"></i><spam>
        <a href ="https://localhost/task_manager/?url=dashboard">Dashboard</a></p>
    <p><spam class="m-2"><i class="fa-solid fa-list"></i></i><spam>
    <a href ="https://localhost/task_manager/?url=task_list">Mes Taches</a></p>

    <p><spam class="m-2"><i class="fa-solid fa-list"></i></i><spam>
    <a href ="https://localhost/task_manager/?url=add_task">ajouter tache</a></p>


    <p><spam class="m-2"><i class="fa-solid fa-users-line">
    <a href ="https://localhost/task_manager/?url=my_team">
    </i><spam>Mon Equipe</a></p>
    <p><spam class="m-2"><i class="fa-solid fa-user"></i><spam>
    <a href ="https://localhost/task_manager/?url=profil">
        Mon Profil</a></p>


    <?php if (isset ($_SESSION['user_info'])&& $_SESSION['user_info']['statut']="Admin" ) 
    { ?>
        <p><spam class="m-2"><i class="fa-solid fa-plus"></i><spam><a href="http://localhost/task_manager/?url=add_team">crée equipe</a></p>
        <p><spam class="m-2"><i class="fa-solid fa-list"></i><spam><a href="http://localhost/task_manager/?url=list_team">list equipe</a></p>
        <p><spam class="m-2"><i class="fa-solid fa-list"></i><spam><a href="http://localhost/task_manager/?url=list_user">list users</a></p>
 <?php } ?>
</div>