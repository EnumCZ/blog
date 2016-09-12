<?php
// source: /home/radek/MEGA/projects/blog/app/presenters/templates/Admin/users.latte

use Latte\Runtime as LR;

class Templateef643afc1d extends Latte\Runtime\Template
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
		if (isset($this->params['usr'])) trigger_error('Variable $usr overwritten in foreach on line 9');
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

<?php
		$iterations = 0;
		foreach ($users as $usr) {
?>
	<p>
		<a href=<?php echo LR\Filters::escapeHtmlAttrUnquoted($this->global->uiControl->link("Admin:editUser", [$usr->id])) ?>><?php
			echo LR\Filters::escapeHtmlText($usr->username) /* line 11 */ ?></a>
	</p>
<?php
			$iterations++;
		}
?>

<h1>Přidat uživatele</h1>
<?php
		/* line 16 */ $_tmp = $this->global->uiControl->getComponent("registerForm");
		if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(NULL, FALSE);
		$_tmp->render();
		
	}

}
