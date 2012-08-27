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
	/**
	* Returns the dimension of the new image, by no input the image will return a array
	*
	* @param String dimension Give the type of dimension (height,width, none) by none the function wil return a array with both
	* @return mixed int/array
	*/
	public function getDimension(string $dimension = 'none')
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