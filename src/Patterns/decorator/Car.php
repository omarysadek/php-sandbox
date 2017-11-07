<?php
interface CarServiceInterface {
	public function getCost() : int;
	public function getDescription() : string;
}
Class BasicInspection implements CarServiceInterface {
	public function getCost() : int {
		return 15;
	}
	public function getDescription() : string {
		return 'Basic inspection';
	}
}
Class OilChange implements CarServiceInterface {
	protected $carService;
	public function __construct(CarServiceInterface $carService) {
		$this->carService = $carService;
	}
	public function getCost() : int {
		return $this->carService->getCost() + 5;
	}
	public function getDescription() : string {
		return $this->carService->getDescription() . ', and oil chnage';
	}
}
Class GlassRepair implements CarServiceInterface {
	protected $carService;
	public function __construct(CarServiceInterface $carService) {
		$this->carService = $carService;
	}
	public function getCost() : int {
		return $this->carService->getCost() + 20;
	}
	public function getDescription() : string {
		return $this->carService->getDescription() . ', and glass repair';
	}
}
$carService = new OilChange(new GlassRepair(new BasicInspection()));
echo $carService->getCost();
echo $carService->getDescription();
