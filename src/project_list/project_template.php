<li>
<div class="ItemImageContainer">
		<img class="ItemImage" src=<?php echo ($resource) ?>>
	</div>
	<h2 class="Text Heading"><?php echo ($title) ?></h2>
	
	<p class="Text Comment"># Made <?php echo ($year) ?></p>
	<p class="Text Common"><?php echo ($description) ?>
	</p>
	<ul>
		<?php
		foreach ($actions as $action) {
		?>
			<li>
				<a class="Text Button" href=<?php echo ($action)['href'] ?> target="_blank"><?php echo ($action)['title'] ?></a>
			</li>
		<?php
		};
		?>
	</ul>
</li>