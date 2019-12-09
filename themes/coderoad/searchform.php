<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<span class="icon-search" aria-hidden="true">
		<a href="#" id="search-icon"><img src="<?php echo get_template_directory_uri();?>/assets/desktop-assets/Icons/Search.png" alt="Search Button"></a>
	</span>
	<fieldset class="search-fieldset">
		<div class="fieldset-wrapper" id="fieldset-wrapper">
			<label>
				<input id="search-field" type="search" class="search-field" placeholder="SEARCH ..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
			</label>
			<span>
				<a href="#" id="cancel-icon"><img src="<?php echo get_template_directory_uri();?>/assets/desktop-assets/Icons/close.png" alt="Cancel Button"></a>
			</span>
		<div>
	</fieldset>
</form>
