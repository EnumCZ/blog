<?php
// source: /home/radek/MEGA/projects/blog/app/AdminModule/templates/Admin/editUser.latte

use Latte\Runtime as LR;

class Template2cb2406008 extends Latte\Runtime\Template
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
?>	Upravit uživatele
<?php
	}


	function blockContent($_args)
	{
		extract($_args);
?>
<h1>Informace o uživateli</h1>

<b>Jméno: </b> <?php echo LR\Filters::escapeHtmlText($user_info->username) /* line 8 */ ?> <br>
<b>Role: </b> <?php echo LR\Filters::escapeHtmlText($user_info->role) /* line 9 */ ?>


<hr>

<h1>Změnit heslo</h1>
<?php
		/* line 14 */ $_tmp = $this->global->uiControl->getComponent("passwordChangeForm");
		if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(NULL, FALSE);
		$_tmp->render();
		
	}

}
