<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset class="search-fieldset">
		<span class="icon-search" aria-hidden="true">
			<a href="#" id="search-icon"><img src="<?php echo get_template_directory_uri();?>/assets/desktop-assets/Icons/Search.png" alt="Search Button"></a>
		</span>
		<label>
			<input id="search-field" type="search" class="search-field" placeholder="SEARCH ..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
	</fieldset>
</form>
