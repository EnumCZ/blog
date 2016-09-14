<?php
// source: /home/radek/MEGA/projects/blog/app/AdminModule/templates/Admin/categories.latte

use Latte\Runtime as LR;

class Template4c7109c87d extends Latte\Runtime\Template
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
		if (isset($this->params['category'])) trigger_error('Variable $category overwritten in foreach on line 20');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockTitle($_args)
	{
?>	Kategorie
<?php
	}


	function blockContent($_args)
	{
		extract($_args);
?>
<h1>Kategorie</h1>

<a href=<?php echo LR\Filters::escapeHtmlAttrUnquoted($this->global->uiControl->link("Admin:addCategory")) ?>>Přidat kategorii</a>

<table class = "table">
   <thead>
      <tr>
         <th>Jméno</th>
         <th>Popis</th>
         <th>Akce</th>
      </tr>
   </thead>

   <tbody>
<?php
		$iterations = 0;
		foreach ($categories as $category) {
?>

		<tr>
         <td><?php echo LR\Filters::escapeHtmlText($category->name) /* line 23 */ ?></td>
         <td><?php echo LR\Filters::escapeHtmlText($category->description) /* line 24 */ ?></td>
         <td><a href=<?php echo LR\Filters::escapeHtmlAttrUnquoted($this->global->uiControl->link("editCategory", [$category->id])) ?>>Upravit</a> | <a href=<?php
			echo LR\Filters::escapeHtmlAttrUnquoted($this->global->uiControl->link("deleteCategory!", [$category->id])) ?>>Smazat</a></td>
      	</tr>

<?php
			$iterations++;
		}
?>
	<tbody>
</table><?php
	}

}
