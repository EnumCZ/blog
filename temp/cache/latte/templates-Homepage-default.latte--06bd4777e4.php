<?php
// source: /home/radek/MEGA/projects/blog/app/modules/Frontend/templates/Homepage/default.latte

use Latte\Runtime as LR;

class Template06bd4777e4 extends Latte\Runtime\Template
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
		if (isset($this->params['post'])) trigger_error('Variable $post overwritten in foreach on line 7');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockTitle($_args)
	{
?>	Home
<?php
	}


	function blockContent($_args)
	{
		extract($_args);
?>

<?php
		$iterations = 0;
		foreach ($posts as $post) {
?>
	<div class="row">
        <div class="col-md-8">
        <div class="post">
          <h3><a href=<?php echo LR\Filters::escapeHtmlAttrUnquoted($this->global->uiControl->link("Post:default", [$post->slug])) ?>><?php
			echo LR\Filters::escapeHtmlText($post->title) /* line 11 */ ?></a></h3>
          <?php echo call_user_func($this->filters->texy, call_user_func($this->filters->truncate, $post->body, 1000)) /* line 12 */ ?>

          <b>Kategorie:</b> <a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Post:archive")) ?>#<?php
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(call_user_func($this->filters->webalize, $post->category->name))) /* line 13 */ ?>"><?php
			echo LR\Filters::escapeHtmlText($post->category->name) /* line 13 */ ?></a> |
          <a href=<?php echo LR\Filters::escapeHtmlAttrUnquoted($this->global->uiControl->link("Post:default", [$post->slug])) ?>>Číst více</a>
        </div>
    	</div>
    </div>

    <hr>
<?php
			$iterations++;
		}
		
	}

}
