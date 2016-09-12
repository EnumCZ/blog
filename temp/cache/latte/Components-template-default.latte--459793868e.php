<?php
// source: /home/radek/MEGA/projects/blog/vendor/ipub/visual-paginator/src/IPub/VisualPaginator/Components/template/default.latte

use Latte\Runtime as LR;

class Template459793868e extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
		if ($paginator->pageCount > 1) {
?>
<div class="pagination">
	<ul>
<?php
			if ($paginator->isFirst()) {
?>
		<li><a>«</a></li>
<?php
			}
			else {
				?>		<li><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link($handle, ['page' => $paginator->page - 1])) ?>"<?php
				if ($_tmp = array_filter([$useAjax ? 'ajax' : NULL])) echo ' class="', LR\Filters::escapeHtmlAttr(implode(" ", array_unique($_tmp))), '"' ?>>«</a></li>
<?php
			}
?>

<?php
			$iterations = 0;
			foreach ($iterator = $this->global->its[] = new LR\CachingIterator($steps) as $step) {
				if ($step == $paginator->page) {
					?>			<li class="active"><a><?php echo LR\Filters::escapeHtmlText($step) /* line 18 */ ?></a></li>
<?php
				}
				else {
					?>			<li><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link($handle, ['page' => $step])) ?>"<?php
					if ($_tmp = array_filter([$useAjax ? 'ajax' : NULL])) echo ' class="', LR\Filters::escapeHtmlAttr(implode(" ", array_unique($_tmp))), '"' ?>><?php
					echo LR\Filters::escapeHtmlText($step) /* line 20 */ ?></a></li>
<?php
				}
				?>		<?php
				if ($iterator->nextValue > $step + 1) {
					?><li class="disabled"><a>…</a></li><?php
				}
?>

<?php
				$iterations++;
			}
			array_pop($this->global->its);
			$iterator = end($this->global->its);
?>

<?php
			if ($paginator->isLast()) {
?>
		<li><a>»</a></li>
<?php
			}
			else {
				?>		<li><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link($handle, ['page' => $paginator->page + 1])) ?>"<?php
				if ($_tmp = array_filter([$useAjax ? 'ajax' : NULL])) echo ' class="', LR\Filters::escapeHtmlAttr(implode(" ", array_unique($_tmp))), '"' ?>>»</a></li>
<?php
			}
?>
	</ul>
</div>
<?php
		}
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (isset($this->params['step'])) trigger_error('Variable $step overwritten in foreach on line 16');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
