<?php 
 session_start();
  class Mydb{
    private $db_host = "localhost";
    private $db_user = "root";
    private $db_pass = "";
    private $db_name = "news_project";

    public $conn = "";
    public $mysqli = "";
    public $res = array();

    function __construct()
    {
      $this->conn = new mysqli($this->db_host, $this->db_user, $this->db_pass,$this->db_name) or die("Connection failed");
    }

    public function set_session($data) 
    {
      $_SESSION['user'] = $data;
    }

    public function is_logged_in()
    {
      if (!(isset($_SESSION['user']))) {
        header("location:index.php");
      }
    }

     public function logged_out()
     {
      session_unset();
      session_destroy();
      header("location:index.php");
    }

    public function login($data) 
    {
      extract ($data);
      $query = "SELECT * FROM `users` WHERE `email` = '$email' and `password` = '$password' ";

      $res = $this->conn->query($query);
  
      if ($res->num_rows>0) {
        $record = $res->fetch_assoc();

        if (isset($record['email'])) {
          $this->set_session($record);
          return true;
        }else{
          return false;
        }
      }
      
    }
    public function books_list()
    {
      $query  = "SELECT * FROM `books`";
      $res    = $this->conn->query($query);
      $i= 0;

      $data = array();


      while($row = $res->fetch_assoc()){
        foreach ($row as $key => $value) {
          $data[$i][$key] = $value;
        }
        $i++;
      }
      
      return $data;
    }

    public function book_category_list()
    {
      $query  = "SELECT * FROM `book_categories`";
      $res    = $this->conn->query($query);
      $i= 0;

      $data = array();


      while($row = $res->fetch_assoc()){
        foreach ($row as $key => $value) {
          $data[$i][$key] = $value;
        }
        $i++;
      }
      
      return $data;
    }

    public function delete_book($id)
    {
      $sql = "DELETE FROM `books` WHERE `id` = '$id'";
      $res = $this->conn->query($sql);
      $_SESSION['success'] = "Book deleted successfully";
      return $res;
    }

    public function delete_book_cat($id)
    {
      $sql = "DELETE FROM `book_categories` WHERE `id` = '$id'";
      $res = $this->conn->query($sql);
      $_SESSION['success'] = "Book category deleted successfully";
      return $res;
    }

    public function add_book_cat($data)
    {
      extract($data);
      // echo strlen($data['name']);
      // exit();
      $errors = array();
      if (strlen($data['name']) < 3) {
        $errors[] = "Category name must be greater than 2 letters"; 
      }
      if (count($errors)) {
        $_SESSION['errors_here'] = $errors;
        $errors = $_SESSION['errors_here'];
        return false;
      }
      $sql    = "INSERT INTO `book_categories` (`name`) VALUES ('$name')";
      $res    = $this->conn->query($sql);
      return $res;
    }

    public function add_book($data)
    {
      // echo "<pre>";
      // print_r($data);
      // exit;
      extract($data);
      $errors= array();

      if (strlen($data['title']) < 3) {
        $errors[] = "Book title must be greater than 3 letters"; 
      }
      if (strlen($data['author']) < 3) {
        $errors[] = "Author name must be greater than 3 letters"; 
      }
      if (!isset($data['book_category'])) {
        $errors[] = "Please select book category"; 
      }
      if (!empty($errors)) {
        $_SESSION['errors_here'] = $errors;
        $errors = $_SESSION['errors_here'];
        return($errors);
      }

      if(!empty($_FILES['book_cover']['name']))
      {
        $file_name  = $_FILES['book_cover']['name'];
        $file_size  = $_FILES['book_cover']['size'];
        $file_tmp   = $_FILES['book_cover']['tmp_name'];
        $file_type  = $_FILES['book_cover']['type'];
        $file_ext   = strtolower(end(explode('.',$_FILES['book_cover']['name'])));
        
        $extensions= array("jpeg","jpg","png");
        
        if(in_array($file_ext,$extensions)=== false){
           $errors[]="extension not allowed, please choose a JPEG or PNG file.";
        }
        
        if($file_size > 2097152){
           $errors[]='File size must be excately 2 MB';
        }
        
        if(empty($errors)==true){
           move_uploaded_file($file_tmp,"uploads/".$file_name);
           echo "Success";
        }else{
          $_SESSION['errors_here'] = $errors;
          $errors = $_SESSION['errors_here'];
          return($errors);
        }

        $book_cover = $file_name;
      }else{
          $errors[]='Please select a cover file for book';
          $_SESSION['errors_here'] = $errors;
          $errors = $_SESSION['errors_here'];
          return($errors);
      }

      if(!empty($_FILES['book_pdf']['name']))
      {
        $errors= array();
        $file_name = $_FILES['book_pdf']['name'];
        $file_size =$_FILES['book_pdf']['size'];
        $file_tmp =$_FILES['book_pdf']['tmp_name'];
        $file_type=$_FILES['book_pdf']['type'];
        $file_ext=strtolower(end(explode('.',$_FILES['book_pdf']['name'])));
        
        $extensions= array("pdf");
        
        if(in_array($file_ext,$extensions)=== false){
           $errors[]="extension not allowed, please choose a PDF file.";
        }
        
        if($file_size > 50000000){
           $errors[]='File size must be excately or less than 50 MB';
        }
        
        if(empty($errors)==true){
           move_uploaded_file($file_tmp,"uploads/".$file_name);
           echo "Success";
        }else{
          $_SESSION['errors_here'] = $errors;
          $errors = $_SESSION['errors_here'];
          return($errors);
        }

        $book_pdf = $file_name;
      }else{
          $errors[]='Please select a PDF file for book';
          $_SESSION['errors_here'] = $errors;
          $errors = $_SESSION['errors_here'];
          return($errors);
      }

      $sql = "INSERT INTO `books` (`title`, `author`, `book_cover` , `books_pdf`,`book_category`) VALUES ('$title', '$author', '$book_cover', '$book_pdf','$book_category')";
      $res = $this->conn->query($sql);
      return $res;
    }

    public function get_book($id)
    {
      // extract($data);
      $sql = "SELECT  *
                          FROM `books`
                          LEFT JOIN `book_categories`
                          ON  `books`.`book_category` = `book_categories`.`id`";
      $res = $this->conn->query($sql);
      if ($res->num_rows>0) {
          $record = $res->fetch_assoc();
          return $record;
      }
    }

    public function get_book_cat($id)
    {
      // extract($data);
      $sql = "SELECT * from `book_categories` where `id` ='$id'";
      $res = $this->conn->query($sql);
      if ($res->num_rows>0) {
          $record = $res->fetch_assoc();
          return $record;
      }
    }

    public function update_book_cat($data)
    {
      extract($data);
      // echo $id;
      // exit();
      $errors = array();
      if (strlen($data['name']) < 3) {
        $errors[] = "Category name must be greater than 2 letters"; 
      }
      if (count($errors)) {
        $_SESSION['errors_here'] = $errors;
        $errors = $_SESSION['errors_here'];
        return false;
      }

        $query = "UPDATE `book_categories` SET `name` = '$name' WHERE `id` = '$id'";
        $res = $this->conn->query($query);  
        return $res;
    }

    public function update_book($data)
    {
      extract($data);

      if(!empty($_FILES['book_cover']['name']))
      {
        $errors= array();
        $file_name  = $_FILES['book_cover']['name'];
        $file_size  = $_FILES['book_cover']['size'];
        $file_tmp   = $_FILES['book_cover']['tmp_name'];
        $file_type  = $_FILES['book_cover']['type'];
        $file_ext   = strtolower(end(explode('.',$file_name)));
        
        $extensions= array("jpeg","jpg","png");
        
        if(in_array($file_ext,$extensions)=== false){
           $errors[]="extension not allowed, please choose a JPEG or PNG file.";
        }
        
        if($file_size > 2097152){
           $errors[]='File size must be excately 2 MB';
        }
        
        if(empty($errors)==true){
           move_uploaded_file($file_tmp,"uploads/".$file_name);
           echo "Success";
        }else{
          $_SESSION['errors_here'] = $errors;
          $errors = $_SESSION['errors_here'];
          return($errors);
        }

        $book_cover = $file_name;
      }
      
      if(!empty($_FILES['book_pdf']['name']))
      {
        $errors= array();
        $file_name = $_FILES['book_pdf']['name'];
        $file_size =$_FILES['book_pdf']['size'];
        $file_tmp =$_FILES['book_pdf']['tmp_name'];
        $file_type=$_FILES['book_pdf']['type'];
        $file_ext=strtolower(end(explode('.',$_FILES['book_pdf']['name'])));
        
        $extensions= array("pdf");
        
        if(in_array($file_ext,$extensions)=== false){
           $errors[]="extension not allowed, please choose a JPEG or PNG file.";
        }
        
        if($file_size > 2097152){
           $errors[]='File size must be excately 2 MB';
        }
        
        if(empty($errors)==true){
           move_uploaded_file($file_tmp,"uploads/".$file_name);
           echo "Success";

        }else{
          $_SESSION['errors_here'] = $errors;
          $errors = $_SESSION['errors_here'];
          return($errors);
        }
        $book_pdf = $file_name;

      }

      if (isset($book_pdf,$book_cover)) {
        $query = "UPDATE `books` SET `title` = '$title', `author` = '$author', `book_cover` = '$book_cover', `books_pdf` = '$book_pdf' WHERE `id` = '$id'";
        $res = $this->conn->query($query);  
        return $res;
      }else{
        $query = "UPDATE `books` SET `title` = '$title', `author` = '$author' WHERE `id` = '$id'";
        $res = $this->conn->query($query);  
        return $res;
      }

    }

}

    $obj = new Mydb();
?>