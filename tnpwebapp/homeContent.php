
<?php
$li_color = array("text-primary","text-warning");
?>
<div class="col-xs-12 col-sm-8 col-md-7 col-sm-pull-4 col-md-pull-5 col-lg-8 col-lg-pull-4" style="margin-top:20px;">
	<div class="panel panel-info">
		<div class="panel-heading"><h3>About NITK Surathkal T&P Cell</h3></div>
			<div class="panel-body" style="background-color:transparent;">
				<div class="col-sm-12">
					<?php
					if(isset($_SESSION['entryno']))
					{
						echo '
<h4 class="infoself"><ul class="text-warning text-justify list-style">
&nbsp;
<div class="'.$li_color[0].'"><li>Welcome!! Bienvenue!! Swagatam!! Jee aayan nu!! to your very own job portal, which is of the students, by the students and for the students.</li></div>
&nbsp;
<div class="'.$li_color[1].'"><li>We believe that there is a correct project for each and every one of you and together we will find it.</li></div>
&nbsp;
<div class="'.$li_color[0].'"><li>Let us together start a brand new journey. A journey of converting our knowledge to useful products and earning money begins beyond this portal.</li></div>
&nbsp;
<div class="'.$li_color[1].'"><li>This portal aims to provide you with a safe environment in which to interact with companies. The combined wisdom of all your seniors and colleagues is here to guide you through this world of job and research opportunities.</li></div>
&nbsp;
<div class="'.$li_color[0].'"><li>PS if you guys can think of anymore languages to say welcome in please contact us and we will include that as well.</li></div>
&nbsp;
</ul></h4>';
					}
					elseif (isset($_SESSION['cid'])) {
						echo '
<h4 class="infoself"><ul class="text-warning text-justify list-style">
&nbsp;
<div class="'.$li_color[0].'"><li>Welcome!! Bienvenue!! Swagatam!! Jee aayan nu!! Dear companies to the RnDHub of our college we map the correct students for your companies needs by providing a clear segregation of students according to the clubs that they are part of.</li></div>
&nbsp;
<div class="'.$li_color[1].'"><li>You will realise that this approach is much more effective, because you can now look at only those students who meet your project’s demands without having to waste time going through piles and piles of resumes.</li></div>
&nbsp;
<div class="'.$li_color[0].'"><li>Also, we have verified all the resumes that you would receive through this portal.</li></div>
&nbsp;
<div class="'.$li_color[1].'"><li>Let us assure you that your dream project partner exists and we will help you find them.</li></div>
&nbsp;
<div class="'.$li_color[0].'"><li>So, what are you waiting for let’s get started before some other company realises how great he or she is.</li></div>
&nbsp;
</ul></h4>';
					}
					else
					{
						echo '
<h4 class="infoself"><ul class="text-warning text-justify list-style">
&nbsp;
<div class="'.$li_color[0].'"><li><div class="text-primary">We have a reputation of carrying out efficient and accurate market research. </li></div>
&nbsp;
<div class="'.$li_color[1].'"><li>We understand that given the current work scenario, what your demands would be.</li></div>
&nbsp;
<div class="'.$li_color[0].'"><li>Also, we understand the needs of the students and excel in matching every company to its correct student body.</li></div>
&nbsp;
<div class="'.$li_color[1].'"><li>The requirements of both parties being met results in a win-win situation which turns out to be most popular to all the involved parties.</li></div>
&nbsp;
<div class="'.$li_color[0].'"><li>We listen to all your queries and have set up a special forum to address these.</li></div>
&nbsp;
<div class="'.$li_color[1].'"><li>There is also a mentorship program by which if you have recruited and trained one student of our college word would pass through him to all the future employees that you would recruit from our college.</li></div>
&nbsp;
<div class="'.$li_color[0].'"><li>Also students can bank upon their seniors for reliable advice regarding their future with a company.</li></div>
&nbsp;
</ul></h4>';
					}
					?>
				<?php if(!isset($_SESSION['entryno']) && !isset($_SESSION['cid']))
				{
				echo '	
				<div class="col-xs-5 col-xs-offset-1">
					<h4 class="infoself"><p class="text-info">Are you a Corporate?</p></h4>
					<a class="btn btn-success btn-md hidden-xs" role="button" href="./index.php">Jump on the Board!&nbsp;&nbsp;&nbsp;</a>
					<a class="btn btn-success btn-xs hidden-sm hidden-md hidden-lg" role="button" href="./index.php">Jump on the Board!&nbsp;&nbsp;&nbsp;</a>
				</div>
				<div class="col-xs-5">
					<h4 class="infoself"><p class="text-info">Are you a Student?&nbsp;&nbsp;&nbsp;&nbsp;</p></h4>
					<a class="btn btn-success btn-md hidden-xs" role="button" href="./index.php">Let the journey begin!</a>
					<a class="btn btn-success btn-xs hidden-sm hidden-md hidden-lg" role="button" href="./index.php">Let the journey begin!</a>
				</div>';
				}
				elseif (isset($_SESSION['entryno'])) {
				echo '	
				<div class="col-xs-offset-2 col-sm-offset-2 col-md-offset-3">
					<a class="btn btn-warning btn-md" role="button" href="./student_apply.php">Available Companies</a>
					<a class="btn btn-warning btn-md" role="button" href="./welcome_student.php">My Profile!</a>
				</div>';	
				}
				elseif (isset($_SESSION['cid'])) {
				echo '
					<div class="col-xs-offset-1 col-sm-offset-2 col-md-offset-3">
					<a href="company_interview.php" class="btn btn-warning btn-md">Interviews scheduled </a>
					<a href="welcome_company.php" class="btn btn-warning btn-md">company profile</a>
					<a href="company_students.php" class="btn btn-warning btn-md">Hire Students</a>	
					</div>';
				}
				?>
				<div class="vertical"></div>
			</div>
		</div>
	</div>
</div>

