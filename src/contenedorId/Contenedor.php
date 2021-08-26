<?php
namespace src\contenedorId;

use ReflectionClass;
use RuntimeException;
use src\contenedorId\ContenedorInterface;

/**
 * 
 */
class Contenedor implements ContenedorInterface
{	
	private $_bindings = [];

	//Rutas de Factory
	private $_rutas = [
		'FactoryInterface' => 'src\\Factory'
	];
	
	public function obtener(string $abstract)
	{
		if(interface_exists($abstract))
		{
			$interface = explode('\\', $abstract);
			$abstract = $this->_rutas[$interface[1]];
		}

		if(isset($this->_bindings[$abstract]))
		{
			return $this->_bindings[$abstract]($this);
		}
		
		$reflection = new ReflectionClass($abstract);

		$dependencies = $this->buildDependencies($reflection);

		return $reflection->newInstanceArgs($dependencies);
	}

	private function buildDependencies(ReflectionClass $reflection): array
	{
		if(!$constructor = $reflection->getConstructor())
		{
			return [];
		}

		$params = $constructor->getParameters();

		return array_map(function ($param)
		{
			if(!$type = $param->getType())
			{
				throw new RuntimeException();
			}

			return $this->obtener($type->getName());

		}, $params);
	}
}