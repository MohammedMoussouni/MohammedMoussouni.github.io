<?php
    include_once 'functions.php';

?>

<!doctype html>
<html lang="en">
    
  <head>
      <header>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Favicon -->
    <script src="https://kit.fontawesome.com/572dbf5f30.js" crossorigin="anonymous"></script>
    
    <!-- CSS personnalisé -->
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="/Mohammed.ico" type="image/x-icon" />
     
    <title>ToDoList en PHP</title>
    
            <h4 style="position: absolute; top: 4px; left: 4px; font-size: 14px; font-weight:400; color:white;">
                Version PHP : PHP 8 <br><br> Bootstrap 5 / Javascript <br><br> Version de MySQL : 8.0.31
            </h4>
            
            <a href="../" style="position: absolute; top: 4px; right: 4px; font-size: 25px; font-weight:400; color:white;" class="btn"><i class="fa-solid fa-house"></i></a>
            
            <a href="../" style="position: absolute; top: 55px; right: 4px; font-size: 25px; font-weight:400; color:white;" class="btn"><i class="fa-solid fa-circle-arrow-right"></i></a>
            
            <div class="container">
            
            <div class="row mt-3"> <!--mt-3 (margin-top:3) est là pour créer de l'espace au dessus de la page-->
                <div class="col-12">
            <?php 
                if(isset($_SESSION['status']))
                {
                    echo "<h4".$_SESSION['status']."<h4>";
                    unset($_SESSION['status']);
                }
            ?>

                    <h1 style="text-align : center;">TO-DO-LIST EN PHP</h1>
               </div>
            </div>
            
            <form class="row mt-3" id="formAddTask">
                <input type="hidden" name="action" value="add_task">
    
                
                    <label for="inputTaskName" class="visually-hidden">Tâche</label>
                    <input type="text" name="taskName" style="width:75%; flex: 1 1 0%;" id="inputTaskName" placeholder="Qu'avez-vous prévu de faire?" required>
                

                
                    <button type="submit" style="width:25%;" id="new-task-submit" class="btn">Ajouter</button> 
              

            </form>
<br>
</header>
  </head>
  <body>
    <main>
		<section class="task-list">
            <div class="row">
                
                <div class="col-12">
                
                    <table style="float:center;" class="table table-striped table-condensed table-bordered" method="POST">
                    <thead>
                        <tr>
                            <th style="text-align:center;" colspan="3"><h2>Liste des tâches enregistrées</h2></th>
                        </tr>
                    
                            <th style="font-weight:400; text-align:center;">Fait</th>
                            <th style="font-weight:400; text-align:center;">Nom</th>
                            <th style="font-weight:400; text-align:center;">Action</th>
                        </thead>
                        <tbody>
                            
                            <?php
                            foreach($tasks as $task)
                            {
                                ?>
                                <tr class="tasks" id= "<?=$task['id']?>">
                                    <td class="text-center" style ="width: 10%;">
                                        <input type="checkbox" class="form-check-input" onClick="window.location.reload();" data-id="<?= $task['id'] ?>" <?php if($task['done'] == 1) { echo 'checked';}?>>
                                    </td>
                                    <?php 
                                        if($task['done'] == 0) { 
                                            echo '<td class="taskNameRed" style ="width: 70%;font-weight:700;">';
                                                                }
                                        else { 
                                            echo '<td class="taskNameGreen" style ="width: 70%; font-weight:500; color: grey;">';
                                            }
                                    ?>
                                    <?= $task['name']?>
                            
                                        
                                    </td>    
                                    <td style ="width: 20%; text-align:center;">
                                        <button type="button" data-id="<?= $task['id'] ?>" class="btnsupp">Supprimer</button>
<?php
}?>

                                        
                                    </td>
                                </tr>
                                
                                
                            

                        </tbody>
                    </table>
                    
                </div>
            </div>
                      
        </div>

<br><br><br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script>
    
    <script src="script.js"></script>
  </main></body>
    <div style="background-color: black; width: 100%; flex-wrap: wrap; position: fixed; bottom: 0; left: 0; right: 0;z-index: 1;">

            <div class="footerdiv" style=" height:50px; margin-bottom: 0rem; background-color: black;">
                <img src="/Mohammed.ico" style="width:50px; position:absolute; left: 4px; "></img>
                <img src="/Mohammed.ico" style="width:50px; position:absolute; right: 4px; "></img>
                
       
                
                <p class="footer"style="vertical-align: middle; text-align:center;  color: white; font-weight:400; font-size: 15px;">
                
 Realised by <b>Mr MOUSSOUNI Mohammed</b>
        
       
                </p>
            </div>
</div>

</html>