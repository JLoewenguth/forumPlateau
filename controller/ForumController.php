<?php

    namespace Controller;

    use App\Session;
    use App\AbstractController;
    use App\ControllerInterface;
    use Model\Managers\SujetManager;
    use Model\Managers\MessageManager;
    use Model\Managers\ThemeManager;
    use Model\Managers\UtilisateurManager;
    
    class ForumController extends AbstractController implements ControllerInterface{

        public function index(){
          

           $sujetManager = new SujetManager();

            return [
                "view" => VIEW_DIR."forum/listTopics.php",
                "data" => [
                    "topics" => $sujetManager->findAll(["creationdate", "DESC"])
                ]
            ];
        
        }

        

    }
