<?php
// source: /home/radek/MEGA/projects/blog/app/presenters/templates/Post/archive.latte

use Latte\Runtime as LR;

class Templateb514128884 extends Latte\Runtime\Template
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
		if (isset($this->params['post'])) trigger_error('Variable $post overwritten in foreach on line 10');
		if (isset($this->params['category'])) trigger_error('Variable $category overwritten in foreach on line 8');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockTitle($_args)
	{
?>	Archív
<?php
	}


	function blockContent($_args)
	{
		extract($_args);
?>
<h1>Archív</h1>

<?php
		$iterations = 0;
		foreach ($categories as $category) {
			?>	<h3 id=<?php echo LR\Filters::escapeHtmlAttrUnquoted(call_user_func($this->filters->webalize, $category->name)) /* line 9 */ ?>><?php
			echo LR\Filters::escapeHtmlText($category->name) /* line 9 */ ?></h3>
<?php
			$iterations = 0;
			foreach ($category->posts as $post) {
				?>		<a href=<?php echo LR\Filters::escapeHtmlAttrUnquoted($this->global->uiControl->link("Post:default", [$post->slug])) ?>><strong><?php
				echo LR\Filters::escapeHtmlText($post->title) /* line 11 */ ?></strong></a> (<?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->date, $post->date, 'F j, Y')) /* line 11 */ ?>)<br>
<?php
				$iterations++;
			}
?>
	<hr>
<?php
			$iterations++;
		}
		
	}

}