<?php
namespace views;
class vareHTMLCreateView {

	public function render($controller) {
		return '<form action="/index.php?controller=vare&event=save" method="post">
			productname: <input type="text" name="productname"><br>
			price: <input type="text" name="productprice"><br />
			<input type="submit" value="Submit">
		</form>
		';
	}
}

