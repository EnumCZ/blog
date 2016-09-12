<?php
// source: /home/radek/MEGA/projects/blog/app/components/categoryForm/categoryForm.latte

use Latte\Runtime as LR;

class Template5603cd50aa extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
		/* line 1 */
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $this->global->formsStack[] = $this->global->uiControl["categoryForm"], ['class' => "form-group"]);
?>

    <?php if ($_label = end($this->global->formsStack)["name"]->getLabel()) echo $_label ?>

    <?php echo end($this->global->formsStack)["name"]->getControl()->addAttributes(['class' => "form-control"]) /* line 3 */ ?>

    <?php if ($_label = end($this->global->formsStack)["description"]->getLabel()) echo $_label ?>

    <?php echo end($this->global->formsStack)["description"]->getControl()->addAttributes(['class' => "form-control"]) /* line 5 */ ?>

    <?php echo end($this->global->formsStack)["send"]->getControl()->addAttributes(['class' => "btn btn-primary"]) /* line 6 */ ?>

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
