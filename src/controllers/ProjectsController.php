<?php
require_once 'AppController.php';
require_once __DIR__ . '/../models/Plane.php';
require_once __DIR__.'/../repository/PlaneRepository.php';
class ProjectsController extends AppController
{
    const MAX_FILE_SIZE = 1024 * 1024;
    const SUPPORTED_FILE_TYPES = ['image/jpeg', 'image/png'];
    const UPLOAD_DIRECTORY = '/../public/uploads/';
    private $messages = [];
    private $projectRepository;

    public function __construct()
    {
        parent::__construct();
        $this->projectRepository = new PlaneRepository();
    }


    public function addPlane()
 {
     if (is_uploaded_file($_FILES['file']['tmp_name']) && $this->validate($_FILES['file'])) {
         move_uploaded_file(
             $_FILES['file']['tmp_name'],
             dirname(__DIR__) . self::UPLOAD_DIRECTORY . $_FILES['file']['name']
         );

         $plane = new Plane($_POST['marka'], $_POST['cena'], $_POST['zastosowanie'], $_POST['rocznik'], $_POST['model'],$_FILES['file']['name']);
         $this->projectRepository->addPlane($plane);

         return $this->render('projects', ['messages' => $this->messages, 'Plane' => $plane]);
     }
     return $this->render('addproject', ['messages' => $this->messages]);
 }

    private function validate(array $file) :bool
    {
        if($file['size'] > self::MAX_FILE_SIZE){
            $this->messages[] = 'File size must be less than 2 MB';
            return false;
        }
        if(!isset($file['type']) && !in_array($file['type'], self::SUPPORTED_FILE_TYPES)){
            $this->messages[] = 'Wrong file type';
            return false;
        }
        return true;
    }
    public function projects(){
        // display projects.php
        $planes = $this->projectRepository->getPlanes();
        $this->render('projects',['planes' => $planes]);
    }
    public function search(){
        // display search.php
        $planes = $this->projectRepository->getPlanes();
        $this->render('search',['planes' => $planes]);

    }
}