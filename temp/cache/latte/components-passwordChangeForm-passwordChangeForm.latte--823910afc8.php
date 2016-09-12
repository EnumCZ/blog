<?php
// source: /home/radek/MEGA/projects/blog/app/components/passwordChangeForm/passwordChangeForm.latte

use Latte\Runtime as LR;

class Template823910afc8 extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
		/* line 1 */
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $this->global->formsStack[] = $this->global->uiControl["passwordChangeForm"], ['class' => "form-group"]);
?>

    <?php if ($_label = end($this->global->formsStack)["old_password"]->getLabel()) echo $_label ?>

    <?php echo end($this->global->formsStack)["old_password"]->getControl()->addAttributes(['class' => "form-control"]) /* line 3 */ ?>

    <?php if ($_label = end($this->global->formsStack)["new_password"]->getLabel()) echo $_label ?>

    <?php echo end($this->global->formsStack)["new_password"]->getControl()->addAttributes(['class' => "form-control"]) /* line 5 */ ?>

    <?php if ($_label = end($this->global->formsStack)["new_password_verify"]->getLabel()) echo $_label ?>

    <?php echo end($this->global->formsStack)["new_password_verify"]->getControl()->addAttributes(['class' => "form-control"]) /* line 7 */ ?>

    <?php echo end($this->global->formsStack)["send"]->getControl()->addAttributes(['class' => "btn btn-primary"]) /* line 8 */ ?>

<?php
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack));
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
