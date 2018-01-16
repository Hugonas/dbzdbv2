<?php


namespace App\Helpers;

class CharacterHelper
{

public function __construct(PhotoHelper $photoHelper)
{
  $this->photoHelper = $photoHelper;
}

  public function deleteOne($character)
  {
    foreach ($character->photos as $photo){

        $this->photoHelper->deleteOne($photo);
    }
    $character->delete();
  }


}


 ?>
