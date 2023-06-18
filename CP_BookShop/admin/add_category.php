<?php include("connect/header.php"); ?>
		<?php include("connect/sidebar.php"); ?>
		<div id="content">
		<article>
		        <h1>Add Category Form</h1>
				<form action="add_category_submit.php" method="post" enctype="multipart/form-data">
		         <table style="margin:0 auto; border:2px solid red; background-color:#BCC6CC; width:420px;">
					<tr><td>Category Name</td><td><input type="text" name="category_name"></td></tr>
					<tr><td>Category Description</td><td><textarea name="category_description"></textarea></td></tr>
					<tr><td>Publication Status</td><td><input type="radio" name="publication_status" value="1">Publish<input type="radio" name="publication_status" value="0">Unpublish</td></tr>
					
					<tr><td></td><td><input type="submit"  name="btn" value="Submit"></td></tr>
					</table>
				</form>
				</article>
			</div>
		</div>
	</body>
</html>
