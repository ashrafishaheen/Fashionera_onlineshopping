

    <div class="left_content">
      <div class="title_box">Categories</div>
	  <style type="text/css">
	  .submenu
	  {
	  visibility:hidden;
	  }
	  </style>
	  <script type="text/javascript" src="jquery.js">
	  </script>
	  <script type="text/javascript">
	  function showmenu(x,id)
	  {
	  n=x+""+id;
	   document.getElementById(n).style.visibility="visible";
	  
	  }
	  function hidemenu(x,id)
	  {
	  n=x+""+id;
	  document.getElementById(n).style.visibility="hidden";
	
	  }
	  
	  </script>
      <ul class="left_menu" style='position:absolute'>
        
		<?php
		include('connect.php');
		$res1=mysql_query("select * from category");
		while($row=mysql_fetch_array($res1))
		{ 
	
		$divid="sub".$row[0];
	
		if($row[0]%2==0)
		{
		
		echo "<li class='even' onmouseover=showmenu('sub',$row[0]) onmouseout=hidemenu('sub',$row[0])><a href='#'>$row[1]</a>";?>
		<div style='position:absolute;left:190px;width:auto;top:-1px;height:150px;background:#dddddd;padding-top:50px' class='submenu' id='<?php echo $divid?>'>
		<ul>
		
		<?php
		
		
		$res2=mysql_query("select * from subcategory where catid=$row[0]");
		while($sub=mysql_fetch_array($res2))
		{
		
    
		
		echo "<li><a href='viewproduct.php?sid=$sub[0]'>$sub[1]</a></li>";
		
		}
		?>
		</ul>
		
	</div></li>
		<?php
		}
		
		else
		{
		
		echo "<li class='odd' onmouseover=showmenu('sub',$row[0]) onmouseout=hidemenu('sub',$row[0])><a href='#'>$row[1]</a>";
	
		?>
		
		<div style='position:absolute;left:190px;width:auto;top:-1px;height:150px;background:#dddddd;padding-top:50px' class='submenu' id='<?php echo $divid?>' >
		<ul>
		<?php

		$res3=mysql_query("select * from subcategory  where catid=$row[0]");
		while($sub=mysql_fetch_array($res3))
		{
		echo "<li><a href='viewproduct.php?sid=$sub[0]'>$sub[1]</a></li>";
		}
		?>
		</ul>
		
	</div>
	</li>
		<?php
		}
			
		}
		
		?>
		
		
		
      </ul>
      <div>
	  
      </div>
      <div class="title_box" style="padding-top:100px">Newsletter</div>
      <div class="border_box">
	  <?php
	  include_once('subscribe.php');?>
         </div>
      <div class="banner_adds"> <a href=""><img src="images/bann2.jpg" alt="" border="0" /></a> </div>
    </div>