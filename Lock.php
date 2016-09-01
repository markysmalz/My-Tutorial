<?php 

class Lock{
   protected $isLocked;

   public function lock() {
       $this->isLocked = true;
  }

   public function unlock() {
      $this->islocked = false;
}

   public function isLocked() {
       return $this->isLocked;
    }

} 
