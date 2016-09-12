<?php
// source: /home/radek/MEGA/projects/blog/app/components/postForm/postForm.latte

use Latte\Runtime as LR;

class Templated3ccb14c52 extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
		/* line 1 */
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $this->global->formsStack[] = $this->global->uiControl["postForm"], ['class' => "form-group"]);
?>

    <?php if ($_label = end($this->global->formsStack)["title"]->getLabel()) echo $_label ?>

    <?php echo end($this->global->formsStack)["title"]->getControl()->addAttributes(['class' => "form-control"]) /* line 3 */ ?>

    <?php if ($_label = end($this->global->formsStack)["category"]->getLabel()) echo $_label ?>

    <?php echo end($this->global->formsStack)["category"]->getControl()->addAttributes(['class' => "form-control"]) /* line 5 */ ?>

    <?php if ($_label = end($this->global->formsStack)["body"]->getLabel()) echo $_label ?>

    <?php echo end($this->global->formsStack)["body"]->getControl()->addAttributes(['class' => "form-control"]) /* line 7 */ ?>

    <?php if ($_label = end($this->global->formsStack)["disable_comments"]->getLabel()) echo $_label ?>

    <?php echo end($this->global->formsStack)["disable_comments"]->getControl()->addAttributes(['class' => "form-control"]) /* line 9 */ ?><br>
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
