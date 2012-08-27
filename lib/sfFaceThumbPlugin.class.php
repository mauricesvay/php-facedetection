<?php

class sfFaceThumbPlugin
{
	private $newHeight = 0;
	private $newWidth = 0;
	private $source = '';
	private $outputPath = '';
	
	public function __construct()
	{
		return $this;
	}
	
	public function setDimension(int $height=100, int $width=100)
	{
		return $this;
	}
	
	public function setSource(string $path)
	{
		return $this;
	}
	
	public function setOutput(string $path)
	{
		return $this;
	}
	
	public function process()
	{
		$return = false;
		
		return $return;
	}
	
	public function getOutput()
	{
		return $this->outputPath;
	}
	
	public function getDimension(string $dimension)
	{
		$return = array();
		
		switch($dimension)
		{
			case 'height':
				$return = $this->newHeight;
			break;
			case 'width':
				$return = $this->newWidth;
			break;
			default:
				$return = array('height'=>$this->newHeight,'width'=>$this->newWidth);
			break;
		}
		return $return;
	}
	
}