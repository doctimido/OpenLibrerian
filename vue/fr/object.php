		<h1 data-id-object="<?php echo $object->ID(); ?>"><?php
			
			if( $isAdmin ){
				$name = $object->name();
				$last = strrpos($name, '.');
				$ext = strrchr($name, '.');
				$name = substr($name, 0, $last);
				
				echo '<span class="editable">' . $name . '</span>' . $ext . ' <small data-toggle="tooltip" data-placement="top" class="glyphicon glyphicon-info-sign" title="Double cliquez sur les informantions a éditer."></small>';
			}
			else {
				echo $object->name();
			}
		?></h1>
		
		<?php
			if( $isAdmin ){
				echo '<p class="pull-right"><button class="btn btn-info" id="addTagBtn">Ajouter un mot-clé</button></p>';
			}
			
		?>
		<p class="tagList"><?php
			
			$tags = $object->tags();
			foreach( $tags as $tag ) {
				echo '<a class="tagIcon" href="' . PREFIX_LINK_LANG . 'tag/' . $tag->ID() . '/' . stringToUrl( $tag->name() ) . '/" data-id="' . $tag->ID() . '">' . $tag->name() . '</a>';
				
				if( $isAdmin ){
					echo '<span class="glyphicon glyphicon-remove-sign" data-delete="' . $tag->ID() . '"></span>';
				}
			}
			
		?></p>
		
		
		<p class="description"><?php echo $object->description(); ?></p>
		
		<?php
			if( $isAdmin ){
				?>
					<form role="form" method="post" action="<?php echo PREFIX_LINK_LANG; ?>object/<?php echo $object->ID(); ?>/<?php echo stringToUrl($object->name()); ?>/delete/" class="pull-right">
						<input type="hidden" aria-hidden="true" name="token" value="{{token}}">
						<button type="submit" role="button" class="btn btn-danger">Supprimer <span class="glyphicon glyphicon-remove"></span></button>
					</form>
				<?php
			}
		?>
		
		<p class="text-center"><a href="<?php echo PREFIX_LINK_LANG; ?>download/<?php echo $object->ID(); ?>/<?php echo urlencode($object->name()); ?>" class="btn btn-lg btn-primary">Télécharger <span class="glyphicon glyphicon-download"></span></a></p>
		
		<?php
			if( $isAdmin ){
				?>
				

				<div class="modal fade" id="addTagModal" tabindex="-1" role="dialog" aria-labelledby="addTag" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fermer</span></button>
								<h4 class="modal-title">Ajouter un mot-clé</h4>
							</div>
							<div class="modal-body">
								<form action="#">
									<div class="form-group">
										<input type="text" class="form-control" id="addTagInput" placeholder="Mot-clé" title="Mot-clé" list="tagsList" autocomplete="off">
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
								<button type="button" class="btn btn-primary" id="btnAddTag">Enregistrer</button>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
				
				
				
				<datalist id="tagsList">
				</datalist>
				
				<?php
			}
			
		?>
		
		
		