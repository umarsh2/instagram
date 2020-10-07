<?php 
class Container
{
	protected $bindings = array();

	public function bind($name, callable $resolver)	
	{
		$this->bindigns[$name] = $resolver;
	}
	public function make($name)
	{
		return $this->bindings[$name];
	}
}
$container = new Container;

$container->bind("Game",function(){
	return 'footbale';
});

print_r($container->make("Game"));


 ?>