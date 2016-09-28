<?php
// source: /home/radek/MEGA/projects/blog/app/modules/Frontend/templates/Homepage/CV.latte

use Latte\Runtime as LR;

class Templateaaa924eaac extends Latte\Runtime\Template
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
?>	Můj životopis
<?php
	}


	function blockContent($_args)
	{
		extract($_args);
?>

<h1>Životopis</h1>

<h2>Osobní informace</h2>

<p>
	<b>Datum narození:</b> 21.3.1995<br>
	<b>Trvalé bydliště:</b> J. Suka 26, 695 01 Hodonín<br>
	<b>Email:</b> friedl505@gmail.com<br>
	<b>Telefon:</b> +420 778 065 933
</p>

<h2>Pracovní zkušenosti</h2>
<p>Bez pracovních zkušeností<p>

<h2>Vzdělání</h2>

<p>Nejvyšší dosažené vzdělání: <b>středoškolské s maturitou</b></p>

<ul>
	<li><b>2011 – 2015</b> MěSOŠ Klobouky u Brna, obor Informační technologie</li>
	<li><b>2015 – 2016</b> Masarykova univerzita, obor informatika, nedokončeno</li>
</ul>

<h2>Jazyky</h2>
<ul>
	<li><b>Čeština</b> - mateřský jazyk</li>
	<li><b>Angličtina</b> - aktivně</li>
</ul>

<h2>IT a programování</h2>
<h3>Programovací jazyky</h3>
<ul>
	<li><b>PHP</b> - Nette</li>
	<li><b>Python</b></li>
</ul>

<h3>Databáze</h3>
<ul>
	<li><b>MySQL</b></li>
	<li><b>Doctrine</b></li>
</ul>

<h3>Operační systémy</h3>
<ul>
	<li><b>Windows</b> - pokročilá znalost</li>
	<li><b>Linux</b> - uživatelská znalost</li>
</ul>

<h2>Zájmy</h2>
<p>Programování, Čtení knih, sledování filmů, PC hry.</p><?php
	}

}
