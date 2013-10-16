<body class="off-canvas hide-extras">

<?php $this->load->view('includes/header');?>
<?php $this->load->view('navigation');?>
<script>
	$('#nav_modules').addClass("active");
</script>
<div class="large-6 columns">
	<div class="row">
	  <div class="large-12 columns">
	  	<div class="panel radius">
	  		<h2>Results</h2>
		  	<table style="width:100%">
		  		<thead>
		  			<tr>
		  				<th>Subject</th>
		  				<th>Total<br/>Questions</th>
		  				<th>Correct<br/>Answers</th>
		  				<th>Incorrect<br/>Answers</th>
		  				<th>Omitted<br/>Answers</th>
		  			</tr>
		  		</thead>
		  		<tbody>
					<?php
						$score_total = 0;
						$omit_total = 0;
						for ($i=0;$i<4;$i++) {
							$score_total+=$score[$i];
							$omit_total+=$omits[$i];
							echo '<tr>';
							echo '<td><strong>';
							if ($i==0) echo 'Science';
							elseif ($i==1) echo 'Mathematics';
							elseif ($i==2) echo 'English';
							elseif ($i==3) echo 'Reading Comprehension';
							echo '</strong></td>';
							echo '<td>4</td>'; // LE HARDCODE
							echo '<td>'.$score[$i].'</td>';
							echo '<td>'.(4-($score[$i]+$omits[$i])).'</td>'; // LE HARDCODE
							echo '<td>'.$omits[$i].'</td>';
							echo '</tr>';
						}
						echo '<tr>';
						echo '<td><strong>TOTAL</strong></td>';
						echo '<td>16</td>';// LE HARDCODE
						echo '<td>'.$score_total.'</td>';
						echo '<td>'.(16-($score_total+$omit_total)).'</td>'; // LE HARDCODE
						echo '<td>'.$omit_total.'</td>';
						echo '</tr>'

					?>
				</tbody>
			</table>
			<a class="button radius alert" href="review">Review Answers</a></li>
			<a class="button radius success" href="site">Back to Home</a></li>
		</div>
	</div>
	</div>
</div>
</div>



<?php $this->load->view('includes/footer');?>