<?php
include_once('Model.php') ;
class Project extends Model
{
  private $ID ;
  private $name;
  private $desc;
  private $status;
  private $budget;
  private $images;
  private $files=array();
  private $designers=array();
  function __construct()
  {

  }

  public function Feed($name,$desc,$budget,$images,$files)
  {
    $this->name=$name;
    $this->desc=$desc;
    $this->status="Ongoing";
    $this->budget=$budget;
    $this->images=$images;
    $this->files=$files;

  }
function setID($ID)
{
$this->ID = $ID;
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

function addDesigner($designer)
{
array_push($this->designers,$designer);
}
function getDesigners()
{
return print_r($this->designers);
}

}

 ?>
