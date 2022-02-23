<div class="flex-container">
	<div class="members-wrap">


		<div class="members-html">

			<input id="tab-1" type="radio" name="tab" class="main" checked><label for="tab-1" class="tab">
				Members</label>

			<input id="tab-2" type="radio" name="tab" class="other"><label for="tab-2"
				class="tab">Students</label>

			<div class="members-form">
				<!-- main------------------------------------------------------------------------------------------------------------------------- -->
				<form id="form1" method="POST" action="" enctype="multipart/form-data">
					<div class="main-htm">

						<div class="center">
							<div class="form-input">
								<div class="preview">
									<img id="file-ip-2-preview" class="preview">
								</div>
								<label for="file-ip-2" class="upload">Image</label>
								<input type="file" name="uploadfile" id="file-ip-2" accept="image/*" onchange="showPreview2(event);" required>
							</div>
						</div>

						<div class="group">
							<label for="user" class="label">Full Name</label>
							<input type="text" name="name" class="input" required>
						</div>
						<div class="group">
							<label for="user" class="label">Positions</label>
							<input type="text" name="title" class="input" required>
						</div>

						<div class="group">
							<input type="submit" name="member" class="button" value="Submit">
						</div>

					</div>
				</form>
				<!-- others------------------------------------------------------------------------------------------------------------------------------- -->
				<form id="form2" method="POST" action="" enctype="multipart/form-data">
					<div class="other-htm">
						<div class="center">
							<div class="form-input">
								<div class="preview">
									<img id="file-ip-1-preview" class="preview">
								</div>
								<label for="file-ip-1" class="upload">Image</label>
								<input type="file" name="uploadfile" id="file-ip-1" onchange="showPreview(event);" accept="image/*" required>
							</div>
						</div>

						<div class="group">
							<label for="name" class="label">Full Name</label>
							<input type="text" name="name" class="input" required>
						</div>

						<div class="group">
							<label for="title" class="label">Education Level</label>
							<select id="roles" name="education" class="input" required> 
								<option value="PhD">PhD</option>
								<option value="Master">Master</option>
								<option value="Internship">Internship</option>
							</select>
						</div>

						<div class="group">
							<label for="research" class="label">Research Area</label>
							<input type="text" name="research" class="input" required>
						</div>



						<div class="group">
							<input type="submit" name="student" class="button" value="Submit">
						</div>







						<!-- <input type="file" id="file-upload" multiple required />
						<label for="file-upload" class="bton">Upload file</label>
						<div id="file-upload-filename" class="upload-btn-wrapper"></div> -->


						
					</div>
				</form>


			</div>
		</div>

	</div>
</div>
</div>