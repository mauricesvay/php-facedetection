sfFaceThumbPlugin
=================

This plugin find faces in photo's and resize it to a thumbnail format. It is based on the php class of Maurice Vay https://github.com/mauricesvay/php-facedetection

Example
-------
```php
$face = new sfFaceThumbPlugin()
			->setDimension(300,300)
			->setSource('/upload/source.jpg')
			->setOutput('/upload/output.jpg');

if($face->process())
{
	//face found in image found and resized
	echo '<img src="'.$face->getOutput().'" heigth="'.$face->getDimension('height').'" width="'.$face->getDimension('width').'" />";
}else{
	//face not found in image
}
```
Requirements
------------
PHP5 with GD

License
-------
GNU GPL v2 (See LICENSE.txt)
