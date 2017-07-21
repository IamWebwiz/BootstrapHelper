<?php

class BootstrapCommons {

	public function bsAlert($type, $message){
		try {
			if (isset($type)){
				echo "<div class='alert alert-" . $type . " fade in'>";
				echo '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
				echo $message;
				echo "</div>";
			}
		}
		catch (Exception $e){
			// echo "Type of alert not set";
		}
	}

	public function bsButton($type, $message){
		try {
			if (isset($type)){
				echo "<div style='margin-bottom: 20px'>";
				echo "<button class='btn btn-" . $type . "'>";
				echo $message;
				echo "</button>";
				echo "</div>";
			}
		}
		catch (Exception $e){
			// echo "Button not available at the moment";
		}
	}

	public function bsPanel($type, $body){
		try {
			if (!empty($type) && !empty($body)){
				echo "<div class='panel panel-" . $type . "'>";
				echo "<div class='panel-body'>";
				echo $body;
				echo "</div>";
				echo "</div>";
			}
		}
		catch (Exception $e){
			// echo "Panel unavailable";
		}
	}

	public function bsPanels($type, $header, $body){
		if (!empty($type) && !empty($body)){
			try {
				if (isset($header)){
					echo "<div class='panel panel-" . $type . "'>";
					echo "<div class='panel-heading'>" . $header . "</div>";
					echo "<div class='panel-body'>";
					echo $body;
					echo "</div>";
					echo "</div>";
				}
				else {
					echo "<div class='panel panel-" . $type . "'>";
					echo "<div class='panel-body'>";
					echo $body;
					echo "</div>";
					echo "</div>";
				}
			}
			catch (Exception $e){
				// echo "Panel unavailable";
			}
		}
	}
}

$bsHelper = new BootstrapCommons();