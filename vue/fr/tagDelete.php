		<h1>Supprimer <?php echo $tag->name(); ?></h1>
		
		<div class="alert alert-warning">
			<p>Vous êtes sur le point de supprimer un mot-clé appelé "<?php echo $tag->name(); ?>". Si vous le supprimez, vous ne pourrez <strong>PAS</strong> le récupérer.<br>Êtes vous sur de vouloir le supprimer ?</p>
			<div class="text-right">
				<a href="<?php echo PREFIX_LINK_LANG; ?>tag/<?php echo $tag->ID(); ?>/<?php echo stringToUrl($tag->name()); ?>/" class="btn btn-default">Annuler</a>
				<form role="form" method="post" action="<?php echo PREFIX_LINK_LANG; ?>tag/<?php echo $tag->ID(); ?>/<?php echo stringToUrl($tag->name()); ?>/delete/" class="display-inline">
					<input type="hidden" aria-hidden="true" name="confirmDelete" value="{{token}}">
					<button type="submit" role="button" class="btn btn-danger">Supprimer <span class="glyphicon glyphicon-remove"></span></button>
				</form>
			</div>
		</div>
