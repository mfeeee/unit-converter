		<form method="POST" action="" class="converter-form">
			<div class="input-group">
				<label for="value">Enter the length to convert</label>
				<input type="number" step="any" name="value" value="<?= htmlspecialchars($value) ?>" min="<?= $unitFrom === "kelvin" ? 0 : "" ?>" required/>
			</div>

			<?php if(!empty($errorMessage)): ?>
				<div class="error-message">
					<?= htmlspecialchars($errorMessage) ?>
				</div>
			<?php endif; ?>

			<div class="input-group">
				<label for="unitFrom">Unit to convert from</label>
				<select name="unitFrom">
					<?php foreach ($units as $unit => $factor): ?>
						<option value="<?= $unit ?>" <?= $unitFrom === $unit ? 'selected' : '' ?>>
							<?= ucfirst($unit) ?>
						</option>
						<?php endforeach ?>
				</select>
			</div>

			<div class="input-group">
				<label for="unitTo">Unit to convert to</label>
				<select name="unitTo">
					<?php foreach ($units as $unit => $factor): ?>
						<option value="<?= $unit ?>" <?= $unitTo === $unit ? 'selected' : '' ?>>
							<?= ucfirst($unit) ?>
						</option>
					<?php endforeach ?>
				</select>
			</div>

			<button type="submit" class="btn convert">Convert</button>
			
			<?php if ($result !== null): ?>
				<div class="result-section">
					<p class="subtitle">Result of your calculation</p>
					<h2 class="result-text"><?= $value ?> <?= $unitFrom ?> = <strong><?= round($result, 10) ?></strong> <?= $unitTo ?></h2>
					<a href="" class="btn">Reset</a>
				</div>
			<?php endif; ?>

		</form>

		
		
	</div>

</body>
</html>