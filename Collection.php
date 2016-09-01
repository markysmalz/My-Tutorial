<?php

class Collection implements Countable, JsonSerializable {
	protected $items = [];

   // __set()
   // __get()
   // __call()
   // __toString()
   
   
   public function __set($key, $value ) {
	   $this->set($key, $value);
   }
	
	public function add($value){
		$this->items[] = $value;
	}
	
    public function set($key, $value){
		$this->items[$key] = $value;
	}	
	
	public function jsonSerialize() {
		return json_encode($this->items);
	}
	
	public function count(){
		return count($this->items);
	}

     public function all() {
		 return $this->items;
	 }
	
}