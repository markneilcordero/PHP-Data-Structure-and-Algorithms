<?php
class ListNode {
	public $data = NULL;
	public $next = NULL;
	public function __construct(string $data = NULL) {
		$this->data = $data;
	}
}

class LinkedList {
	private $_firstNode = NULL;
	private $_totalNodes = 0;

	public function insert(string $data = NULL) {
		$newNode = new ListNode($data);

		if ($this->_firstNode === NULL) {
			$this->_firstNode = &$newNode;
		} else {
			$currentNode = $this->_firstNode;
			while ($currentNode->next !== NULL) {
				$currentNode = $currentNode->next;
			}
			$currentNode->next = $newNode;
		}
		$this->_totalNodes++;
		return TRUE;

		$newNode = new ListNode($data);

		if ($this->_firstNode === NULL) {
			$this->_firstNode = &$newNode;
		}

		$currentNode = $this->_firstNode;

		while ($currentNode->next !== NULL) {
			$currentNode = $currentNode->next;
		}
		$currentNode->next = $newNode;
	}

	public function display() {
		echo "Total book titles: " . $this->_totalNodes . "<br>";
		$currentNode = $this->_firstNode;
		while ($currentNode !== NULL) {
			echo $currentNode->data . "<br>";
			$currentNode = $currentNode->next;
		}
	}
}

$BookTitles = new LinkedList();
$BookTitles->insert("Introduction to Algorithm");
$BookTitles->insert("Introduction to PHP and Data Structures");
$BookTitles->insert("Programming Intelligence");
$BookTitles->display();
?>