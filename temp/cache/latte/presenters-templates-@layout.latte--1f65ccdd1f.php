<?php
// source: /home/radek/MEGA/projects/blog/app/presenters/templates/@layout.latte

use Latte\Runtime as LR;

class Template1f65ccdd1f extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php
		$this->renderBlock('title', $this->params, 'html');
?> | Radek Friedl</title>
    <!-- CHANGE THIS TITLE FOR EACH PAGE -->

    <!-- Bootstrap -->
   
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-   BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>

  </head>

  <body>

    <!-- Default Bootstrap Navbar -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href=<?php echo LR\Filters::escapeHtmlAttrUnquoted($this->global->uiControl->link("Homepage:default")) ?>>Radek Friedl</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="/">Home</a></li>
            <li><a href=<?php echo LR\Filters::escapeHtmlAttrUnquoted($this->global->uiControl->link("Post:archive")) ?>>Archív</a></li>
            <li><a href="/about">O mně</a></li>
            <li><a href="/cv">CV</a></li>
            <li><?php
		/* line 51 */
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $this->global->formsStack[] = $this->global->uiControl["searchForm"], ['class' => "navbar-form navbar-left"]);
?>

             <?php echo end($this->global->formsStack)["word"]->getControl()->addAttributes(['class' => "form-control"]) /* line 52 */ ?>

             <?php echo end($this->global->formsStack)["send"]->getControl()->addAttributes(['class' => "btn btn-default"]) /* line 53 */ ?>

             <?php
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack));
?></li>
          </ul>
<?php
		if (($user->isLoggedIn())) {
?>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href=<?php echo LR\Filters::escapeHtmlAttrUnquoted($this->global->uiControl->link("Admin:Admin:posts")) ?>>Články</a></li>
                <li><a href=<?php echo LR\Filters::escapeHtmlAttrUnquoted($this->global->uiControl->link("Admin:Admin:users")) ?>>Uživatelé</a></li>
                <li><a href=<?php echo LR\Filters::escapeHtmlAttrUnquoted($this->global->uiControl->link("Admin:Admin:categories")) ?>>Kategorie</a></li>
                <li role="separator" class="divider"></li>
                <li><a href=<?php echo LR\Filters::escapeHtmlAttrUnquoted($this->global->uiControl->link("Sign:out")) ?>>Odhlásit</a></li>
              </ul>
            </li>
          </ul>
<?php
		}
?>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>

    <div class="container">
      <!-- end of header .row -->

<?php
		$this->renderBlock('content', $this->params, 'html');
?>
     

    </div>
    <!-- end of .container -->

  </body>

</html><?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
