<!-- 
	Name: Daniel
	Surname: Howard
	Student Number: 16000911
	Declaration:
	This is my own code and any code from other sources will be referenced.
-->
<!-- Check for errors and display if there are-->
<?php if (count($ErrorMsgs) > 0): ?>
	<div class="error">
		<?php
			foreach ($ErrorMsgs as $error): ?>
				<p> <?php echo "$error"; ?> </p>
		<?php endforeach ?>
	</div>
<?php endif ?>