
<?php 


class Ellipse extends Shape {
	
	public $rx;
	public $ry;


	function __construct($rx, $ry) {
		
		parent::__construct();

		$this->rx = $rx;
		$this->ry = $ry;
	}
	
	public function Draw() {
		$svg = <<<TXT

	<ellipse cx="{$this->x}" cy="{$this->y}" rx="{$this->rx}" ry="{$this->ry}" 
	fill="{$this->color}" fill-opacity="{$this->transparence}" />

TXT;
		return $svg;
	}
}