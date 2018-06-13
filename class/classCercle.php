<?php 


class Cercle extends Shape {
	public $cx; 
	public $cy;
	public $r;


	function __construct($cx, $cy, $r) {
		
		parent::__construct();
		$this->cx = $cx;
		$this->cy = $cy;
		$this->r = $r;
	}
	
	public function Draw() {
		$svg = <<<TXT
	
		<circle x="{$this->x}" y="{$this->y}" cx="{$this->cx}" cy="{$this->cy}" r="{$this->r}"
  		fill="{$this->color}" fill-opacity="{$this->transparence}" />
TXT;
		return $svg;
	}
}