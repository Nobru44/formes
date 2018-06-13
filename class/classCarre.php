<?php




class Carre extends Shape {
	
	public $width;
	public $height;


	function __construct($width, $height) {
		
		parent::__construct($height, $width);

		$this->width=$width;
		$this->height=$height;

	}
	
	public function Draw() {
		$svg = <<<TXT
	
		<rect x="{$this->x}" y="{$this->y}" width="{$this->width}" height="{$this->width}" fill="{$this->color}" fill-opacity="{$this->transparence}" />
TXT;
		return $svg;
	}
}