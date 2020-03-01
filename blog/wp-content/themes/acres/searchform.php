<?php
/**
 * default search form
 */
?>
<form method="get" id="searchform" class="form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
    <input type="text" class="form-control input-sm home-search-input" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="Search for an article">
    <!--<input type="submit" name="submit" id="searchsubmit" class="btn btn-sm read-more-btn" value="<?php esc_attr_e( 'Submit', 'shape' ); ?>" />-->
    <i class="fa fa-search search-bar-1"  type="submit" name="submit" id="searchsubmit" class="btn btn-sm read-more-btn"></i>
</form> 