<div class="articles">
		<? foreach($articles as $article): ?>
			<div class="article">
				<h2><?=$article['title']?></h2>	
				<a href="?c=article&id=<?=$article['id_article']?>">Read more</a>
			</div>
            <hr>
		<? endforeach; ?>
	</div>