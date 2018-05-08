<?php $this->load->view('header') ?>
<?php $this->load->view('navbar') ?>
     <main role="main" class="container">
      <div class="jumbotron">
        <h1>tholib subechan</h1>
        <p class="lead">1641720100.</p>
      </div>
      <div class="row">
      	<div class="col-6">
      		<h4>biodata menggunakan query dengan array</h4>
      		<table class="table">
      			<?php foreach ($biodata_query_array as $key => $value): ?>
      				<tr>
      					<td><?php echo $value['id']?></td>
      				</tr>
      				<tr>
      					<td><?php echo $value['nama']?></td>
      				</tr>
      				<tr>
      					<td><?php echo $value['nim']?></td>
      				</tr>
      				<tr>
      					<td><?php echo $value['alamat']?></td>
      				</tr>
      			<?php endforeach ?>
      		</table>
      		</div>
      		<div class="col-6">
      		<h4>biodata menggunakan query dengan object</h4>
      		<table class="table">
      			<?php foreach ($biodata_query_object as $key => $value): ?>
      				<tr>
      					<td><?php echo $value->id?></td>
      				</tr>
      				<tr>
      					<td><?php echo $value->nama?></td>
      				</tr>
      				<tr>
      					<td><?php echo $value->nim?></td>
      				</tr>
      				<tr>
      					<td><?php echo $value->alamat?></td>
      				</tr>
      			<?php endforeach ?>
      		</table>
      		</div>
      		<div class="col-6">
      		<h4>biodata menggunakan builder dengan array</h4>
      		<table class="table">
      			<?php foreach ($biodata_builder_array as $key => $value): ?>
      				<tr>
      					<td><?php echo $value['id']?></td>
      				</tr>
      				<tr>
      					<td><?php echo $value['nama']?></td>
      				</tr>
      				<tr>
      					<td><?php echo $value['nim']?></td>
      				</tr>
      				<tr>
      					<td><?php echo $value['alamat']?></td>
      				</tr>
      			<?php endforeach ?>
      		</table>
      		</div>
      		<div class="col-6">
      		<h4>biodata menggunakan builder dengan object</h4>
      		<table class="table">
      			<?php foreach ($biodata_query_object as $key => $value): ?>
      				<tr>
      					<td><?php echo $value->id?></td>
      				</tr>
      				<tr>
      					<td><?php echo $value->nama?></td>
      				</tr>
      				<tr>
      					<td><?php echo $value->nim?></td>
      				</tr>
      				<tr>
      					<td><?php echo $value->alamat?></td>
      				</tr>
      			<?php endforeach ?>
      		</table>
      		</div>
      		<div class="col-6">
      	</div>
      </div>
    </main>
    <?php $this->load->view('footer') ?>