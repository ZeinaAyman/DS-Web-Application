<?php
  include_once('User.php') ;
  class Employee extends User
  {
    public $ID;
    public $Password;
    public $Type;
    public $Picture;
    function __construct()
    {
      $err = false;
    }

    public function Feed($Name,$Email,$Password,$Type,$Picture)
    {
      $this->Name=$Name;
      $this->Email=$Email;
      $this->Password=$Password;
      $this->Type=$Type;
      $this->Picture=$Picture;
    }

    public function Login($email,$password)
    {
        $this->DB->query = "SELECT * FROM user Where Email='".$email."' And Password='".$password."'";
        $result = $this->DB->query();
        if ($this->DB->ok === 1)
        {
          echo "done";
          $DB->ok=0;
          $row = mysqli_fetch_assoc($result);
          $this->ID=$row['ID'];
          $this->Name=$row['Name'];
          $this->Email=$row['Email'];
          $this->Password=$row['Password'];
          $this->Type=$row['Type'];
          $this->Picture=$row['picture'];
          session_start();

          $_SESSION['online'] = serialize($this);
          header("Location: Home.php");

        }
        else
        {
          $msg='User not found';
        }
    }

    public function UpdateUser($online,$name,$email,$password,$picture)
    {
        $this->DB->query = "UPDATE user SET Name='".$name."',Email='".$email."',Password='".$password."' ,picture='".$picture."' Where ID='".$online->ID."'";
        $result = $this->DB->query();
        if ($this->DB->ok === 1)
        {

          $this->DB->ok=0;
          $online->Name=$name;
          $online->Email=$email;
          $online->Password=$password;
          $online->Picture=$picture;
          $_SESSION['online']=serialize($online);

        }
        else
        {
          $msg='Update Failed';
        }
    }
  public function ById($id)
  {
    $this->DB->query = "SELECT * FROM user Where ID='".$id."'";
    $result = $this->DB->query();
    if (!is_string($result)) {

      if($result->num_rows > 0)
      {
        $row = mysqli_fetch_assoc($result);
        $this->ID=$row['ID'];
        $this->Name=$row['Name'];
        $this->Email=$row['Email'];
        $this->Password=$row['Password'];
        $this->Type=$row['Type'];

      }
      else
      {
        $msg='User not found';
      }

    }


  }

  }
 ?>
