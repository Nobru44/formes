<?php




class Rectangle extends Shape {
	
	public $height;
	public $width;


	function __construct($height, $width) {
		
		parent::__construct();

		$this->height = $height;

		$this->width = $width;
	}
	
	public function Draw() {
		$svg = <<<TXT
	
		<rect x="{$this->x}" y="{$this->y}" width="{$this->width}" height="{$this->height}"
  		fill="{$this->color}" fill-opacity="{$this->transparence}" />
TXT;
		return $svg;
	}
}