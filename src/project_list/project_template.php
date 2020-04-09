<li class="Item">
	<div class="ItemImageContainer">
		<img class="ItemImage" src=<?php echo ($resource) ?>>
	</div>
	<h2 class="Text Heading"><?php echo ($title) ?></h2>

	<p class="Text Comment"># Made <?php echo ($year) ?></p>
	<p class="Text Common"><?php echo ($description) ?>
		<?php if (count($with) != 0) {
		?>
			<p class="Text Comment"># With: <?php echo join(", ", $with); ?></p>
		<?php } ?>

		
		<?php if (count($tech) != 0) {
			# TODO Make this nicer
		?>
			<p class="Text Link">
				Tech = [
					<span class="Text Keyword">
						<?php echo join("<span class=\"Text Link\">, </span>", $tech); ?>
					</span>
					]
			</p>
		<?php } ?>
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