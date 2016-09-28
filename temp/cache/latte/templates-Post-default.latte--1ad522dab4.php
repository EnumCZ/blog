<?php
// source: /home/radek/MEGA/projects/blog/app/modules/Frontend/templates/Post/default.latte

use Latte\Runtime as LR;

class Template1ad522dab4 extends Latte\Runtime\Template
{
	public $blocks = [
		'title' => 'blockTitle',
		'content' => 'blockContent',
	];

	public $blockTypes = [
		'title' => 'html',
		'content' => 'html',
	];


	function main()
	{
		extract($this->params);
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('title', get_defined_vars());
?>


<?php
		$this->renderBlock('content', get_defined_vars());
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockTitle($_args)
	{
		extract($_args);
		?>	<?php echo LR\Filters::escapeHtmlText($post->title) /* line 2 */ ?>

<?php
	}


	function blockContent($_args)
	{
		extract($_args);
?>

<h1><?php echo LR\Filters::escapeHtmlText($post->title) /* line 8 */ ?></h1>
<?php echo call_user_func($this->filters->texy, $post->body) /* line 9 */ ?>



<div id="disqus_thread"></div>
<script>

<?php
		if ((!$post->disable_comments)) {
?>
var disqus_config = function () {
    this.page.url = <?php echo LR\Filters::escapeJs($url) /* line 17 */ ?>;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = <?php echo LR\Filters::escapeJs($post->slug) /* line 18 */ ?>; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};


(function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = '//localhost-vjokdbbo1f.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<?php
		}
		
	}

}
