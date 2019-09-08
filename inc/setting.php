<?php
// setting
function import_data_options_page(){
$categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC'
) );

?>

<!-- setting page form -->
<div class="dummy-setting">
	<h1>Import the dummy data</h1>
	<div class="dummy-form">
		<form method="post" acction="">
			<input type="checkbox" name="cats[]" id="category">
			<input type="submit" name="import-dummy" value="Import">
		</form>
	</div>
</div>

<?php
} // end import_data_options_page
?>

