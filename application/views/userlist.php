<section>
		<nav class="navbar-main navbar-expand-lg navbar-light">
			<a class="navbar-brand" href="#">Young Indian Foundation</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
			 aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav w-100 justify-content-end">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url();?>index.php/admin/logout">Logout</a>
					</li>
				</ul>
			</div>
		</nav>
	</section>
	<div class="container">
	Welcome <?php echo $this->session->userdata('user'); ?>   
		<section class="volunteers__table my-5">
			<table class="table table-hover">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Name</th>
						<th scope="col">Surname</th>
						<th scope="col">Mobile Num</th>
						<th scope="col">Area</th>
						<th scope="col">VolunterId</th>
						<th scope="col">Status</th>
						<th scope="col">Edit</th>
						<th scope="col">Delete</th>
					</tr>
                </thead>
				<tbody>
                    <?php for ($i=0; $i < count($users) ; $i++) { 
                        echo "            
					<tr>
						<th scope='row'>1</th>
						<td>{$users[$i]->first_name}</td>
						<td>{$users[$i]->sur_name}</td>
						<td>{$users[$i]->mobile}</td>
						<td>{$users[$i]->city}</td>
						<td>12345678</td>
						<td><a href='#'>active</a></td>
						<td><a href='singleUserDetails/{$users[$i]->uuid}'><i class='fa fa-edit' aria-hidden='true'></i></a></td>
						<td><a href='#'><i class='fa fa-trash-alt' aria-hidden='true'></i></a></td>
                    </tr>
                    ";
                    }
                    ?>
				</tbody>
			</table>
		</section>
	</div>