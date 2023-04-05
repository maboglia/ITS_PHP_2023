<ul>
	<?php
		if (isset($_SESSION['ricette'])){
			foreach ($_SESSION['ricette'] as $ricetta) {
				echo "<li>".$ricetta[0]."</li>";
			}
		}
	?>
</ul>