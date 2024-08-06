<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-success">
				<?php 
				$grand_total = 0;
				if ($keranjang = $this->cart->contents())
				{
					foreach ($keranjang as $item)
					{
						$grand_total = $grand_total + $item['subtotal'];
					}
					echo "<h5>Total Belanja: Rp." .number_format($grand_total,0,',','.');
				 ?>
			</div><br><br>

			<h3>Input Alamat Pengiriman dan Pembayaran</h3>

			<form method="post" action="<?php echo base_url('dashboard/proses') ?> ">
				
				<div class="form-group">
					<label>Nama</label>
					<input type="text" name="nama" placeholder="Nama Lengkap" class="form-control">
				</div>

				<div class="form-group">
					<label>Alamat</label>
					<input type="text" name="alamat" placeholder="Alamat Lengkap" class="form-control">
				</div>

				<div class="form-group">
					<label>No.Telepon</label>
					<input type="text" name="no_tlp" placeholder="Nomor Telepon" class="form-control">
				</div>

				<div class="form-group">
					<label>Jasa Pengiriman</label>
					<select class="form-control">
						<option>JNE</option>
						<option>MilanoXP</option>
						<option>Flashid</option>
						<option>Go-Send</option>
						<option>TobyExpress</option>
					</select>
				</div>


				<div class="form-group">
					<label>Pilih Bank</label>
					<select class="form-control">
						<option>BCA - XXXXXXXX</option>
						<option>BRI - XXXXXXXX</option>
						<option>MDG - XXXXXXXX</option>
						<option>FDA - XXXXXXXX</option>
					</select>
				</div>

				<button type="submit" class="btn btn-sm btn-primary">Proses</button>


			</form>

			<?php 
			}else
			{
				echo "Keranjang anda Kosong";
			}
			 ?>
			
		</div>


		<div class="col-md-2"></div>
	</div>
</div>