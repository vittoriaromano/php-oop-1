<?php
/**
     * classe ‘Movie’.
 */

class Movie{
  public $name = 'movie name';
  public $lenght;
   /**
     * _constructor.
     * @param string $name Movie title.
     * @param string $lenght Movie lenght.
 */
  function __construct(string $_name, int $_lenght = 120)
  {
        $this->name = $_name;
        $this->lenght = $_lenght;
   }
   

    /**
     * getInfo
     *
     * @return void
     */
  public function getInfo(){
    return $this->lenght;
  }
   /**
     * getUppercase
     *
     * @return void
     */
    public function getUpperCase(){
        return $this->setUpperCase($this->name);
    }
    private function setUpperCase($string)
    {
        return strtoupper($string);
    }
  
   
}
