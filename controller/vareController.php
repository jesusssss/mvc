<?php
namespace controller;
class vareController {
	private $request;
	private $product;
    /** @var \Doctrine\ORM\EntityManager */
    private $em;
	
	public function __construct($request) {
		$this->request = $request;
        $this->em = $GLOBALS["em"];
	}

	public function default_event() {
		if(!isset($this->request["productid"])) {
			return;
		}
		$this->product = $this->em->find('models\productModel',$this->request["productid"]);
	}
	
	/* saves a new product */
	public function save_event(){
		echo "saved";
		$product = new productModel();
		$product->setName($this->request["productname"]);
		//$product->setPrice($this->request["productprice"]);
		$this->em->persist($product);
		$this->em->flush();
		
		exit;
	}
	
	public function edit_event(){
		echo "correction saved";
		$product = $this->em->find('productModel',$this->request["productid"]);
		$product->setName($this->request["productname"]);
		$this->em->persist($product);
		$this->em->flush();
		Header('Location:index.php?controller=product&view=HTML&productid='.$product->getId());
	}
	
	public function getProduct() {
		return $this->product;
	}

}