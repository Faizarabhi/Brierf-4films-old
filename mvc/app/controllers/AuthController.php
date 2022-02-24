<?php
class AuthController
{

    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }


    public function signup()
    {
        var_dump($_POST);

        header("location: home");


        // qdrna nrecupiriw data mn la page singnup direct
        //controller kan insstentiasyiw bih class model o o ndero traitement post o get o ndwz l view
    }
    // public function create()
    // {
        

        // if (isset($_POST['submit'])) {
        //     $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        //     $this->userModel->insert(array_remove(['submit'], $_POST));
        //     header("location: ../login");
        // }
    

   
    public function create()
    {
        
            try {  
                    if (isset($_POST['submit'])) {
                    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
                    $this->userModel->insert(array_remove(['submit'], $_POST));

                    header("location: ../login");

                }
                } 
            catch (PDOException $e) {
                
                $_SESSION['dupli'] = "exist";
                header("location: ../signup");
    
            }}
    public function login()
    {
        if (isset($_POST['email'])) {
            $user = $this->userModel->selectbyEmail($_POST["email"]);
            if ($user && password_verify($_POST['password'], $user->password)) {
                
                //R=[..A,..B] R=A union B avec l'ogique de A<= B
                $_SESSION = [...$_SESSION, ...(array)$user];
                header("location: ../user");
            } else {
                header("location: ../login");
            }
        }
    }
    public function logout()
    {
        session_start();
        // var_dump($_POST);
        // echo "im still here";
        session_destroy();
        header("location: ./login");
    }

}


