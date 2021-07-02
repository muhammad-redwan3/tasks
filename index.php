<?php

    use App\Core\Router;
    use App\Core\Request;
    use App\Controllers\TaskController;
  

require "_init.php";

Router::make()
    ->get('', [TaskController::class, 'index'])
    ->get('about', 'app/Controllers/about.php')
    ->post('task/create', [TaskController::class, 'create'])
    ->get('task/delete', [TaskController::class, 'delete'])
    ->get('task/updata', [TaskController::class, 'updata'])
    ->resolve(Request::uri(), Request::method());
   
?>    