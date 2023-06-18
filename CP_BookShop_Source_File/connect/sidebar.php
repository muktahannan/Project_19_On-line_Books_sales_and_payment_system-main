<div id="sidebar">
			<ul>
				<li><a href="index.php">All Category Books</a></li>
				<?php
							$select=mysql_query("select * from add_categorybooks");
							while($row=mysql_fetch_array($select))
							{
								echo "<li><a href='category.php?id=".$row["Category_Name"]."'>".$row["Category_Name"]."</a></li>";
							}
							
							?>
				
				
				
				
				
				
			</ul>
		</div>