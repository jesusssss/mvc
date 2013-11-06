<?php
namespace views;
class productHTMLCreateView {

	public function render($controller) {
		return '<form action="/index.php?controller=product&event=save" method="post">
			productname: <input type="text" name="productname"><br>
			price: <input type="text" name="productprice"><br />
			<input type="submit" value="Submit">
		</form>
		';
	}
}

