<?php include 'include/top-header.php'; ?>

<title>Time till Finish!</title>

<?php include 'include/bottom-header.php'; ?>

<div id="main-content">

	<h1 id ="time_left"></h1>

</div>

<script type="text/javascript">

	function getDiff() {

		var endDate = new Date("05/06/2016");
		var now = new Date();
		var timeDiff = Math.abs(endDate.getTime() - now.getTime())/1000;
		var diffDays = timeDiff / (3600 * 24);

		var leftOvers = parseFloat("0." + diffDays.toString().split('.')[1]);

		var diffHours = leftOvers * 24;

		leftOvers = parseFloat("0." + diffHours.toString().split('.')[1]);

		var diffMins = leftOvers * 60;

		leftOvers = parseFloat("0." + diffMins.toString().split('.')[1]);

		var diffSecs = leftOvers * 60;

		diffDays = parseInt(diffDays);
		diffHours = parseInt(diffHours);
		diffSecs = parseInt(diffSecs);
		diffMins = parseInt(diffMins);

		$("#time_left").html(diffDays + " Days, " + diffHours + " Hours, " + diffMins + " Minutes and " + diffSecs + " Seconds");

	}

	getDiff();

	setInterval(function () { getDiff() }, 1000);


</script>

<?php include 'include/footer.php'; ?>
