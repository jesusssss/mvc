<?php
namespace views;
class vareListeHTMLView {

	public function render($controller) {
        $html = "<form method='post'><input type='text' value='".$controller->getSearch()."' name='search'/><input type='text' name='event' value='search'/>
        <input type='submit' value='Søg'/></form><br/><br/>";

        if(count($controller->getProducts()) == 0) {
            $html .= "No products";
        } else {
            $html .= "<table><tr><th>id</th><th>navn</th><th>Rediger</th></tr>";
            foreach($controller->getProducts() as $product) {
                $html .= "<tr><td>".$product->getId()."</td><td>".$product->getName()."</td><td><a href='/index.php?controller=vare&view=HTMLEdit&productid=".$product->getId()."'>Rediger</a></td></tr>";
            }
            $html .= "</table>";
        }


		return $html;

	}

}

