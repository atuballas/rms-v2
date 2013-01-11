<div class="table-data">
	<div class="table-data-head">
		<ul>
			<li>Name</li>
			<li>Address</li>
			<li>Marital Status</li>
			<li>Profession</li>
			<li>Phone</li>
			<li>Mobile</li>
			<li>Age</li>
			<li class="last-col">Birthdate</li>
		</ul>
	</div>
	<div class="table-data-body">
		<ul>
			<li>Alvin Mark Tuballas</li>
			<li>2063 Tuyan Naga</li>
			<li>Single</li>
			<li>Senior Web Developer</li>
			<li>032-2592664</li>
			<li>+639228252242</li>
			<li>28</li>
			<li class="last-col">11-05-1984</li>
		</ul>
		<ul>
			<li class="last-row">Alvin Mark Tuballas</li>
			<li class="last-row">2063 Tuyan Naga</li>
			<li class="last-row">Single</li>
			<li class="last-row">Senior Web Developer</li>
			<li class="last-row">032-2592664</li>
			<li class="last-row">+639228252242</li>
			<li class="last-row">28</li>
			<li class="last-row last-col">11-05-1984</li>
		</ul>
		<div class="cb"></div>
	</div>
</div>
<div class="cb"></div>
<div class="table-data-operations">
	<div class="table-data-operations-button">
		<div class="table-data-operations-button-level1"><img src="<?php echo $config['url'];?>/images/add.png"></div>
		<div class="table-data-operations-button-level2">
			<a class="lightbox" lightbox="addboarder-lightbox-content" lightbox-width="450">Add Boarder</a>
		</div>
		<div class="cb"></div>
	</div>
	<div class="table-data-operations-button">
		<div class="table-data-operations-button-level1"><img src="<?php echo $config['url'];?>/images/edit.png"></div>
		<div class="table-data-operations-button-level2">
			<a class="lightbox" lightbox="editboarder-lightbox-content" lightbox-width="500">Edit Boarder</a>
		</div>
		<div class="cb"></div>
	</div>
	<div class="table-data-operations-button">
		<div class="table-data-operations-button-level1"><img src="<?php echo $config['url'];?>/images/delete.png"></div>
		<div class="table-data-operations-button-level2">
			<a class="lightbox" lightbox="deleteboarder-lightbox-content" lightbox-width="500">Delete Boarder</a>
		</div>
		<div class="cb"></div>
	</div>
</div>

<div id="addboarder-lightbox-content">
	<div class="lightbox-content">
		<div class="lightbox-content-wrapper">
			<div class="lightbox-content-title">
				<div class="lightbox-content-title-level1">Add Boarder</div>
				<div class="lightbox-content-title-level2">
					<img src="<?php echo $config['url'];?>/images/close.png" onclick="hideLightbox();">
				</div>
				<div class="cb"></div>
			</div>
			<div class="lightbox-content-body">
				<div class="lighbox-content-body-wrapper">
					<form method="POST" action="" onsubmit="return formValidate('addboarder');">
						<ul>
							<li>
								<ul>
									<li class="form-generic-error-container"></li>
								</ul>
							</li>
							<li class="cb">
								<ul>
									<li class="form-li-label">Name</li>
									<li class="form-li-field">
										<input type="text" name="name" id="name" class="form-li-field-input-text">
										<div id="form-li-field-input-text-name" class="form-li-field-input-text-warning"></div>
									</li>
								</ul>
							</li>
							<li class="cb">
								<ul>
									<li class="form-li-label">Address</li>
									<li class="form-li-field">
										<input type="text" name="address" id="address" class="form-li-field-input-text">
										<div id="form-li-field-input-text-address" class="form-li-field-input-text-warning"></div>
									</li>
								</ul>
							</li>
							<li class="cb">
								<ul>
									<li class="form-li-label">Marital Status</li>
									<li class="form-li-field">
										<select name="marital" id="marital" class="form-li-field-input-text">
											<option value=""></option>
											<option value="single">Single</option>
											<option value="married">Married</option>
										</select>
										<div id="form-li-field-input-text-marital" class="form-li-field-input-text-warning"></div>
									</li>
								</ul>
							</li>
							<li class="cb">
								<ul>
									<li class="form-li-label">Profession</li>
									<li class="form-li-field">
										<input type="text" name="profession" id="profession" class="form-li-field-input-text">
										<div id="form-li-field-input-text-profession" class="form-li-field-input-text-warning"></div>
									</li>
								</ul>
							</li>
							<li class="cb">
								<ul>
									<li class="form-li-label">Phone</li>
									<li class="form-li-field">
										<input type="text" name="phone" id="phone" class="form-li-field-input-text">
										<div id="form-li-field-input-text-phone" class="form-li-field-input-text-warning"></div>
									</li>
								</ul>
							</li>
							<li class="cb">
								<ul>
									<li class="form-li-label">Mobile</li>
									<li class="form-li-field">
										<input type="text" name="mobile" id="mobile" class="form-li-field-input-text">
										<div id="form-li-field-input-text-mobile" class="form-li-field-input-text-warning"></div>
									</li>
								</ul>
							</li>
							<li class="cb">
								<ul>
									<li class="form-li-label">Age</li>
									<li class="form-li-field">
										<input type="text" name="age" id="age" class="form-li-field-input-text">
										<div id="form-li-field-input-text-age" class="form-li-field-input-text-warning"></div>
									</li>
								</ul>
							</li>
							<li class="cb">
								<ul>
									<li class="form-li-label">Birthdate</li>
									<li class="form-li-field">
										<input type="text" name="birthdate" id="birthdate" class="form-li-field-input-text">
										<div id="form-li-field-input-text-birthdate" class="form-li-field-input-text-warning"></div>
									</li>
								</ul>
							</li>
							<li class="cb">
								<ul>
									<li class="form-submit-area">
										<button class="form-buttons-go" type="submit">Add Boarder</button>
										<button class="form-buttons-no" type="button" onclick="hideLightbox();">Cancel</button>
									</li>
								</ul>
							</li>
						</ul>
					</form>
					<div class="cb"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="editboarder-lightbox-content">
	<div class="lightbox-content">
		<div class="lightbox-content-wrapper">
			<div class="lightbox-content-title">
				<div class="lightbox-content-title-level1">Edit Boarder</div>
				<div class="lightbox-content-title-level2">
					<img src="<?php echo $config['url'];?>/images/close.png" onclick="hideLightbox();">
				</div>
				<div class="cb"></div>
			</div>
			<div class="lightbox-content-body">
				
			</div>
		</div>
	</div>
</div>
<div id="deleteboarder-lightbox-content">
	<div class="lightbox-content">
		<div class="lightbox-content-wrapper">
			<div class="lightbox-content-title">
				<div class="lightbox-content-title-level1">Delete Boarder</div>
				<div class="lightbox-content-title-level2">
					<img src="<?php echo $config['url'];?>/images/close.png" onclick="hideLightbox();">
				</div>
				<div class="cb"></div>
			</div>
			<div class="lightbox-content-body">
				
			</div>
		</div>
	</div>
</div>