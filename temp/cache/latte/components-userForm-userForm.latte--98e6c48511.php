<?php
// source: /home/radek/MEGA/projects/blog/app/components/userForm/userForm.latte

use Latte\Runtime as LR;

class Template98e6c48511 extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
		/* line 1 */ $_tmp = $this->global->uiControl->getComponent("userForm");
		if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(NULL, FALSE);
		$_tmp->render();
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
