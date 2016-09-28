<?php
// source: /home/radek/MEGA/projects/blog/app/modules/Frontend/templates/Sign/in.latte

use Latte\Runtime as LR;

class Template9e6c24f746 extends Latte\Runtime\Template
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
?>	Přihlásit
<?php
	}


	function blockContent($_args)
	{
		extract($_args);
?>

<h1>Přihlásit</h1>

<?php
		/* line 9 */ $_tmp = $this->global->uiControl->getComponent("loginForm");
		if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(NULL, FALSE);
		$_tmp->render();
		
	}

}
