<div class="container-full jumbo-test" data-stellar-background-ratio="0">
	<div class="container">

		<div class="row">

			<div class="col-sm-6 font100">
				<h1>HELLO HELLO</h1>
				<h2>SALUT SALUT</h2>
				<h3>KONNICHIWA</h3>
				<h4>HAI HAI</h4>
				<h5>MERCI</h5>
				<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT. TEMPORE NEMO DEBITIS IPSA QUAERAT IURE EXPLICABO INCIDUNT OFFICIA PLACEAT MAIORES A EXCEPTURI DIGNISSIMOS QUOS, MAXIME, PORRO REICIENDIS SINT, CULPA HIC FACERE?</p>
			</div>

			<div class="col-sm-6 font300">
				<h1>HELLO HELLO</h1>
				<h2>SALUT SALUT</h2>
				<h3>KONNICHIWA</h3>
				<h4>HAI HAI</h4>
				<h5>MERCI</h5>
				<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT. TEMPORE NEMO DEBITIS IPSA QUAERAT IURE EXPLICABO INCIDUNT OFFICIA PLACEAT MAIORES A EXCEPTURI DIGNISSIMOS QUOS, MAXIME, PORRO REICIENDIS SINT, CULPA HIC FACERE?</p>
			</div>

		</div>

		<div class="row">

			<div class="col-sm-6 font400">
				<h1>HELLO HELLO</h1>
				<h2>SALUT SALUT</h2>
				<h3>KONNICHIWA</h3>
				<h4>HAI HAI</h4>
				<h5>MERCI</h5>
				<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT. TEMPORE NEMO DEBITIS IPSA QUAERAT IURE EXPLICABO INCIDUNT OFFICIA PLACEAT MAIORES A EXCEPTURI DIGNISSIMOS QUOS, MAXIME, PORRO REICIENDIS SINT, CULPA HIC FACERE?</p>
			</div>

			<div class="col-sm-6 font900">
				<h1>HELLO HELLO</h1>
				<h2>SALUT SALUT</h2>
				<h3>KONNICHIWA</h3>
				<h4>HAI HAI</h4>
				<h5>MERCI</h5>
				<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT. TEMPORE NEMO DEBITIS IPSA QUAERAT IURE EXPLICABO INCIDUNT OFFICIA PLACEAT MAIORES A EXCEPTURI DIGNISSIMOS QUOS, MAXIME, PORRO REICIENDIS SINT, CULPA HIC FACERE?</p>
			</div>

		</div>

		<div class="row">
			
			<h1>HELLO HELLO</h1>

			<div class="col-sm-pull-4 col-sm-5">

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat repellendus natus quasi nesciunt modi animi magni,</p>
			</div>
		</div>
		<div class="row">
			<form id="togglingForm" method="post" class="form-horizontal">
			    <div class="form-group">
			        <label class="col-lg-3 control-label">Full name <sup>*</sup></label>
			        <div class="col-lg-4">
			            <input type="text" class="form-control" name="firstName" placeholder="First name" />
			        </div>
			        <div class="col-lg-4">
			            <input type="text" class="form-control" name="lastName" placeholder="Last name" />
			        </div>
			    </div>

			    <div class="form-group">
			        <label class="col-lg-3 control-label">Company <sup>*</sup></label>
			        <div class="col-lg-5">
			            <input type="text" class="form-control" name="company"
			                   required data-bv-notempty-message="The company name is required" />
			        </div>
			        <div class="col-lg-2">
			            <button type="button" class="btn btn-info btn-sm" data-toggle="#jobInfo">
			                Add more info
			            </button>
			        </div>
			    </div>

			    <!-- These fields will not be validated as long as they are not visible -->
			    <div id="jobInfo" style="display: none;">
			        <div class="form-group">
			            <label class="col-lg-3 control-label">Job title <sup>*</sup></label>
			            <div class="col-lg-5">
			                <input type="text" class="form-control" name="job" />
			            </div>
			        </div>

			        <div class="form-group">
			            <label class="col-lg-3 control-label">Department <sup>*</sup></label>
			            <div class="col-lg-5">
			                <input type="text" class="form-control" name="department" />
			            </div>
			        </div>
			    </div>

			    <div class="form-group">
			        <label class="col-lg-3 control-label">Mobile phone <sup>*</sup></label>
			        <div class="col-lg-5">
			            <input type="text" class="form-control" name="mobilePhone" />
			        </div>
			        <div class="col-lg-2">
			            <button type="button" class="btn btn-info btn-sm" data-toggle="#phoneInfo">
			                Add more phone numbers
			            </button>
			        </div>
			    </div>

			    <!-- These fields will not be validated as long as they are not visible -->
			    <div id="phoneInfo" style="display: none;">
			        <div class="form-group">
			            <label class="col-lg-3 control-label">Home phone</label>
			            <div class="col-lg-5">
			                <input type="text" class="form-control" name="homePhone" />
			            </div>
			        </div>

			        <div class="form-group">
			            <label class="col-lg-3 control-label">Office phone</label>
			            <div class="col-lg-5">
			                <input type="text" class="form-control" name="officePhone" />
			            </div>
			        </div>
			    </div>

			    <div class="form-group">
			        <div class="col-lg-9 col-lg-offset-3">
			            <button type="submit" class="btn btn-primary">Validate</button>
			        </div>
			    </div>
			</form>
		</div>
		
	</div>
</div>
