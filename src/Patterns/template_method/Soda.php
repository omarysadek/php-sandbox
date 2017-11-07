<?php
abstract class Soda {
	public function make() {
		$this->createCup()
			->addingMainSubstance()
			->coverIT();
	}
	public function createCup() : Soda {
		var_dump("The cup is created");
		return $this;
	}
	public function coverIT() : Soda {
		var_dump("The cup is covered");
		return $this;
	}
	abstract public function addingMainSubstance() : Soda;
}
class CocaCola extends Soda {
	public function addingMainSubstance() : Soda {
		var_dump("Adding coca cola");
		return $this;
	}
}
class Fanta extends Soda {
	public function addingMainSubstance() : Soda {
		var_dump("Adding fanta");
		return $this;
	}
}
(new CocaCola())->make();
(new Fanta())->make();