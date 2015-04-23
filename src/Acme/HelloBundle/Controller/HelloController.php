<?php
namespace Acme\HelloBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
class HelloController {
	public function indexAction ($name){
		return new Responce("<html><body>Hello, $name!</body></html>");
	}
}
?>