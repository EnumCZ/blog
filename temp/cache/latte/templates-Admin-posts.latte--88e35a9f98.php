<?php
// source: /home/radek/MEGA/projects/blog/app/modules/Admin/templates/Admin/posts.latte

use Latte\Runtime as LR;

class Template88e35a9f98 extends Latte\Runtime\Template
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
		if (isset($this->params['post'])) trigger_error('Variable $post overwritten in foreach on line 20');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockTitle($_args)
	{
?>   Články
<?php
	}


	function blockContent($_args)
	{
		extract($_args);
?>

<h1>Články</h1>

<a href=<?php echo LR\Filters::escapeHtmlAttrUnquoted($this->global->uiControl->link("Admin:addPost")) ?>>Přidat článek</a>

<table class = "table">
   <thead>
      <tr>
         <th>Nadpis</th>
         <th>Akce</th>
      </tr>
   </thead>

   <tbody>
<?php
		$iterations = 0;
		foreach ($posts as $post) {
?>

		<tr>
         <td><?php echo LR\Filters::escapeHtmlText($post->title) /* line 23 */ ?></td>
         <td><a href=<?php echo LR\Filters::escapeHtmlAttrUnquoted($this->global->uiControl->link("Admin:editPost", [$post->id])) ?>>Upravit</a> | <a href=<?php
			echo LR\Filters::escapeHtmlAttrUnquoted($this->global->uiControl->link("deletePost!", [$post->id])) ?>>Smazat</a></td>
      	</tr>

<?php
			$iterations++;
		}
?>
	<tbody>
</table><?php
	}

}
