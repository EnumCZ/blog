<?php
// source: /home/radek/MEGA/projects/blog/app/components/registerForm/registerForm.latte

use Latte\Runtime as LR;

class Template1e9e69f8ec extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
		/* line 1 */
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $this->global->formsStack[] = $this->global->uiControl["registerForm"], ['class' => "form-group"]);
?>

    <?php if ($_label = end($this->global->formsStack)["username"]->getLabel()) echo $_label ?>

    <?php echo end($this->global->formsStack)["username"]->getControl()->addAttributes(['class' => "form-control"]) /* line 3 */ ?>

    <?php if ($_label = end($this->global->formsStack)["role"]->getLabel()) echo $_label ?>

    <?php echo end($this->global->formsStack)["role"]->getControl()->addAttributes(['class' => "form-control"]) /* line 5 */ ?>

    <?php if ($_label = end($this->global->formsStack)["password"]->getLabel()) echo $_label ?>

    <?php echo end($this->global->formsStack)["password"]->getControl()->addAttributes(['class' => "form-control"]) /* line 7 */ ?>

    <?php if ($_label = end($this->global->formsStack)["password_verify"]->getLabel()) echo $_label ?>

    <?php echo end($this->global->formsStack)["password_verify"]->getControl()->addAttributes(['class' => "form-control"]) /* line 9 */ ?>

    <?php echo end($this->global->formsStack)["send"]->getControl()->addAttributes(['class' => "btn btn-primary"]) /* line 10 */ ?>

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
