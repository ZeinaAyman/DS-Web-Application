

<?php
include_once('Model.php') ;
class Project extends Model
{
  private $ID ;
  private $name;
  private $desc;
  private $status;
  private $budget;
  private $property;
  private $images=array();
  private $files=array();
  private $designers=array();
  private $origin;
  private $deadline;
  function __construct()
  {

  }

  public function Feed($name,$desc,$budget,$property,$images,$files,$deadline)
  {
    $this->name=$name;
    $this->desc=$desc;
    $this->status="Ongoing";
    $this->budget=$budget;
    $this->property=$property;
    $this->images=$images;
    $this->files=$files;
    $this->deadline=$deadline;

  }

  public function ById($id)
  {
    $this->DB->query = "SELECT * FROM project INNER JOIN assign ON project.id = assign.PID  WHERE assign.PID='".$id."'";
    $result = $this->DB->query();
    if (!is_string($result))
        {
          if($result->num_rows > 0)
          {
            $row = mysqli_fetch_assoc($result);
            $this->setID($row['id']);
            $this->setName($row['name']);
            $this->setDesc($row['description']);
            $this->setStatus($row['status']);
            $this->setBudget($row['budget']);
            $this->setPropertyType($row['Property_Type']);
            $this->setImages(explode(",",$row['images']));
            $this->setFiles(explode(",",$row['files']));
            $this->setOrigin($row['origin']);
            return $this;

          }
          else
          {
            $msg='User not found';
          }
        }

    }



function setID($ID)
{
$this->ID = $ID;
}
function setOrigin($origin)
{
$this->origin = $origin;
}
function getOrigin()
{
 return $this->origin;
}
function getID()
{
return $this->ID;
}
function setName($name)
{
$this->name = $name;
}
function getName()
{
return $this->name;
}
function getdeadline()
{
return $this->deadline;
}
function setDesc($desc)
{
$this->desc = $desc;
}
function getDesc()
{
return $this->desc;
}
function setStatus($status)
{
$this->status = $status;
}
function getStatus()
{
return $this->status;
}
function setBudget($budget)
{
$this->budget = $budget;
}
function setPropertyType($property)
{
return $this->property;
}
function getBudget()
{
return $this->budget;
}
function setImages($images)
{
$this->images = $images;
}
function getImages()
{
return implode(",",$this->images);
}

function getImagesArray()
{
return $this->images;
}

function setFiles($files)
{
$this->files = $files;
}
function getFiles()
{

return implode(",",$this->files);
}

function getFilesArray()
{

return $this->files;
}

function addDesigner($designer)
{
array_push($this->designers,$designer);
}
function setdesigner($designer)
{
 $this->designers=$designer;
}
function getDesigners()
{
return print_r($this->designers);
}
function getDesignersArray()
{
return $this->designers;
}

function getPropertyType()
{
return print_r($this->property);
}

}


 ?>
