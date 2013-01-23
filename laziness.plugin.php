<?php 
namespace Habari;
class Lazy extends Plugin
{
  // this needs to be extended to be customizable, but for now this is what I was thinking.
  public function filter_post_content_out($content) {
		return preg_replace( '%{{site}}%', Site::get_url('habari'), $content );
	}
	
	public function filter_atom_add_post($content) {
		return preg_replace( '%{{site}}%', Site::get_url('habari'), $content );
	}
}
?>
