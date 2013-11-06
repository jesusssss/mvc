<?php
namespace models;
/**
 * @Entity @Table(name="products")
 **/

class productModel {
	
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    /** @Column(type="string") **/
    protected $name;
	
	public function getName() {
		return $this->name;
	}
	
	public function getId() {
		return $this->id;
	}

	public function setName($name) {
		$this->name = $name;
	}
	
}