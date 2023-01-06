<?php if ($this->session->flashdata('success')): ?>
	<div class="alert alert-success alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
		<strong>
			<?php echo $this->session->flashdata('success'); ?>		
			<?php if($this->session->flashdata('btn_print_awb') == 'YES'){ ?>
			
			<a href="<?php echo site_url('document/generate_awb_single/'.$this->session->flashdata('sess_awb_no')) ?>" class="btn blue" onclick="return confirm('Cetak AWB?')"/>Cetak AWB</a>
			
			<?php } ?>
		</strong>
	</div>
<?php endif; ?>
<?php if ($this->session->flashdata('warning')): ?>
	<div class="alert alert-warning alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
		<strong>
		<?php if(is_array($this->session->flashdata('warning'))){
			$i = 0;
			foreach ($this->session->flashdata('warning') as $warning) {
				$i ++;
				echo $i.'. '.$warning.'<br>';
			}
		} else {
			echo $this->session->flashdata('warning');
		}

		?>
		</a>
	</div>
<?php endif; ?>
<?php if ($this->session->flashdata('error')): ?>
	<div class="alert alert-danger alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
		<strong>
		<?php if(is_array($this->session->flashdata('error'))){
			$i = 0;
			foreach ($this->session->flashdata('error') as $error) {
				$i ++;
				echo $i.'. '.$error.'<br>';
			}
		} else {
			echo $this->session->flashdata('error');
		}

		?>
		</a>
	</div>
<?php endif; ?>

