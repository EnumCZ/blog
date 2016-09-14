<?php
// source: /home/radek/MEGA/projects/blog/app/AdminModule/templates/Admin/users.latte

use Latte\Runtime as LR;

class Template7c1a310a94 extends Latte\Runtime\Template
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
		if (isset($this->params['usr'])) trigger_error('Variable $usr overwritten in foreach on line 21');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockTitle($_args)
	{
?>	Uživatelé
<?php
	}


	function blockContent($_args)
	{
		extract($_args);
?>

<h1>Uživatelé</h1>

<a href=<?php echo LR\Filters::escapeHtmlAttrUnquoted($this->global->uiControl->link("Admin:addUser")) ?>>Přidat uživatele</a>

<table class = "table">
   <thead>
      <tr>
         <th>Jméno</th>
         <th>Role</th>
         <th>Akce</th>
      </tr>
   </thead>

   <tbody>
<?php
		$iterations = 0;
		foreach ($users as $usr) {
?>

		<tr>
         <td><?php echo LR\Filters::escapeHtmlText($usr->username) /* line 24 */ ?></td>
         <td><?php echo LR\Filters::escapeHtmlText($usr->role) /* line 25 */ ?></td>
         <td><a href=<?php echo LR\Filters::escapeHtmlAttrUnquoted($this->global->uiControl->link("Admin:editUser", [$usr->id])) ?>>Upravit</a> | <a href=<?php
			echo LR\Filters::escapeHtmlAttrUnquoted($this->global->uiControl->link("deleteUser!", [$usr->id])) ?>>Smazat</a></td>
      	</tr>

<?php
			$iterations++;
		}
?>
	<tbody>
</table><?php
	}

}
