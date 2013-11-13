<?php
namespace views;
class vareHTMLEditView {

	public function render($controller) {
		return '<form action="/index.php?controller=vare&productid='.$controller->getProduct()->getId().'&event=edit" method="post">
			productname: <input type="text" name="productname" value="'.$controller->getProduct()->getName().'"><br>
						<input type="submit" value="Submit">
		</form>
		';
	}
}

