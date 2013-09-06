<?php
$module = 'code';
include('includes/header.tpl.php');

$repos = json_decode(curl_get("https://api.github.com/users/nordbjerg/repos"));

$n_repos = $n_forks = 0;
foreach($repos as $repo):
	if($repo->fork):
		$n_forks++;
	else:
		$n_repos++;
	endif;
endforeach;
?>
<h2>Code <span style="float: right"><?php echo $n_repos; ?> repos, <?php echo $n_forks; ?> forks</span></h2>
<?php
foreach($repos as $repo):
	if($repo->fork) continue;

	$languages = json_decode(curl_get($repo->languages_url), true);
?>
<div class="project">
	<div class="header">
		<h3 class="title"><a href="<?php echo $repo->html_url; ?>"><?php echo $repo->name; ?></a></h3>
		<?php foreach($languages as $lang => $n): ?>
			<span class="lang <?php echo strtolower($lang); ?>"><?php echo strtolower($lang); ?></span>
		<?php endforeach; ?>
	</div>
	<div class="description"><?php echo $repo->description; ?></div>
</div>
<?php
endforeach;
include('includes/footer.tpl.php');
?>