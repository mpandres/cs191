<<<<<<< HEAD
<?php $this->load->view('components/page_head'); ?>
<body class="off-canvas hide-extras">
<?php
	if($loggedin>0){
		$this->load->view('includes/header');
	}
	else {
		$this->load->view('includes/header2');
	}
?>
<div class="container">
	Feel free to send us your feedbacks!
</div>	

<?php $this->load->view('includes/footer');?>
<?php $this->load->view('components/page_tail');?>
=======
Pahinging feedback!
>>>>>>> 4d05d7186a060abd499382ac4f2feb7f8322a764