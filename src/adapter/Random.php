<?php
interface BookInterface {
	public function open();
	public function turnPage();
}
interface EBookInterface {
	public function turnOn();
 	public function nextPage();
}
class Book implements BookInterface {
	public function open() {
		var_dump("opening the book");
	}
	public function turnPage() {
		var_dump("Turning the page");
	}
}
class Kindle implements EBookInterface {
	public function turnOn() {
		var_dump("starting the device...");
	}
	public function nextPage() {
		var_dump("turning the page...");
	}
}
class Nook implements EBookInterface {
	public function turnOn() {
		var_dump("Nook:starting the device...");
	}
	public function nextPage() {
		var_dump("Nook:turning the page...");
	}
}
class KindleAdapter implements BookInterface {
	protected $ebook;
	public function __construct(EBookInterface $ebook) {
		$this->ebook = $ebook;
	}
 	public function open() {
		$this->ebook->turnOn();
 	}
	public function turnPage() {
		$this->ebook->nextPage();
	}
}
abstract class User {
	public function read(BookInterface $book) {
		$book->open();
		$book->turnPage();
	}
}
// User::read(new Book());
User::read(new KindleAdapter(new Kindle()));
User::read(new KindleAdapter(new Nook()));