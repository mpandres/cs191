<?php $this->load->view('admin/components/page_head'); ?>
<body style="padding-top:45px">
<?php $this->load->view('admin/components/nav'); ?>

<section class="main">
<div class="row fullrow">
<?php $this->load->view('admin/components/sidenav'); ?>
  <!--Body - Mid-->
  <div class="large-6 pull-3 columns" style="margin:0px;">
    <!--Header/Title-->
    <div class="row"style="padding-bottom:10px">
    <div class="row" id="titleNav">
      <h1 class="white" style="text-shadow: 0px 1px 5px #888888;margin-left:25px;">Intelleq Admin</h1>
    </div></div>
<section class="main">
	<!--div class="row fullrow" style="padding:30px"></div-->
	<div class="container">
		<div class="row">
			<!-- Main column -->
			<div class="span9">
<?php $this->load->view($subview); ?>
			</div>
		</div>
	</div>
</section>

  </div>
</div>
</section>



<?php $this->load->view('admin/components/page_tail'); ?>