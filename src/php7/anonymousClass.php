<?php

interface Logger {
	public function log($message);
}

class TerminalLogger implements Logger {

	public function log($message) {
		var_dump($message);
	}
}

class Application {

	protected $logger;

	public function __construct(Logger $logger) {
		$this->logger = $logger;
	}

	public function action($message) {
		$this->logger->log($message);
	}
}

$application = new Application(new TerminalLogger());

$application->action('go home');

(new Application(new class implements Logger {
	public function log($message) {
		var_dump($message);
	}
}))->action('go work');