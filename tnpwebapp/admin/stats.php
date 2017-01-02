<?php 

include 'header.php';
include 'config.php';
$conn = get_conn();
$sql = "select count(*) from interested natural join student where department = 'CS' and status = 'selected';";
$q = $conn->query($sql) or die('failed');
$row = $q->fetch(PDO::FETCH_ASSOC);
$placedinCS = $row['count'];

$sql = "select count(*) from interested natural join student where department = 'EE' and status = 'selected';";
$q = $conn->query($sql) or die('failed');
$row = $q->fetch(PDO::FETCH_ASSOC);
$placedinEE = $row['count'];

$sql = "select count(*) from interested natural join student where department = 'ME' and status = 'selected';";
$q = $conn->query($sql) or die('failed');
$row = $q->fetch(PDO::FETCH_ASSOC);
$placedinME = $row['count'];

$sql = "select ROUND(avg(cgpa),2) as aver from interested natural join student where department= 'CS' and status = 'selected';";
$q = $conn->query($sql) or die('failed');
$row = $q->fetch(PDO::FETCH_ASSOC);
$avg_cgpa_inCS = $row['aver'];

$sql = "select ROUND(avg(cgpa),2) as aver from interested natural join student where department= 'EE' and status = 'selected';";
$q = $conn->query($sql) or die('failed');
$row = $q->fetch(PDO::FETCH_ASSOC);
$avg_cgpa_inEE = $row['aver'];

$sql = "select ROUND(avg(cgpa),2) as aver from interested natural join student where department= 'ME' and status = 'selected';";
$q = $conn->query($sql) or die('failed');
$row = $q->fetch(PDO::FETCH_ASSOC);
$avg_cgpa_inME = $row['aver'];

$sql = "select ROUND(avg(job_salary),0) as aver from interested natural join student natural join interview where department= 'CS' and status = 'selected';";
$q = $conn->query($sql) or die('failed');
$row = $q->fetch(PDO::FETCH_ASSOC);
$avg_salary_inCS = $row['aver'];

$sql = "select ROUND(avg(job_salary),0) as aver from interested natural join student natural join interview where department= 'EE' and status = 'selected';";
$q = $conn->query($sql) or die('failed');
$row = $q->fetch(PDO::FETCH_ASSOC);
$avg_salary_inEE = $row['aver'];

$sql = "select ROUND(avg(job_salary),0) as aver from interested natural join student natural join interview  where department= 'ME' and status = 'selected';";
$q = $conn->query($sql) or die('failed');
$row = $q->fetch(PDO::FETCH_ASSOC);
$avg_salary_inME = $row['aver'];



?>
		<div id="page-wrapper">
			<table class="table table-bordered table-hover" style="margin-top:10px;width:60%">
				<tr>
					<th>#</th>
					<th>Statistic</th>
					<th>Value</th>
				</tr>
				<tr>
					<td>1</td>
					<td>No. of students placed in CS department</td>
					<td><?php echo $placedinCS; ?></td>
				</tr>
				<tr>
					<td>2</td>
					<td>No. of students placed in EE department</td>
					<td><?php echo $placedinEE; ?></td>
				</tr>
				<tr>
					<td>3</td>
					<td>No. of students placed in ME department</td>
					<td><?php echo $placedinME; ?></td>
				</tr>
				<tr>
					<td>4</td>
					<td>Avg. CGPA of students placed in CS </td>
					<td><?php echo $avg_cgpa_inCS; ?></td>
				</tr>
				<tr>
					<td>5</td>
					<td>Avg. CGPA of students placed in EE </td>
					<td><?php echo $avg_cgpa_inEE; ?></td>
				</tr>
				<tr>
					<td>6</td>
					<td>Avg. CGPA of students placed in ME </td>
					<td><?php echo $avg_cgpa_inME; ?></td>
				</tr>
				<tr>
					<td>7</td>
					<td>Avg. salary offered in CS department</td>
					<td><?php echo $avg_salary_inCS; ?></td>
				</tr>
				<tr>
					<td>8</td>
					<td>Avg. salary offered in EE department</td>
					<td><?php echo $avg_salary_inEE; ?></td>
				</tr>
				<tr>
					<td>9</td>
					<td>Avg. salary offered in ME department</td>
					<td><?php echo $avg_salary_inME; ?></td>
				</tr>
			</table>	
		</div>
	</div>
	<script>
		$('#sidebar5').addClass('active');
	</script>
	</body>

</html>

