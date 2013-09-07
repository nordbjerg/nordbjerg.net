<?php
$module = 'code';
include('includes/header.tpl.php');

$repos = json_decode(curl_get("https://api.github.com/users/nordbjerg/repos?sort=updated"));
$ignore = ['Digitalocean-PHP-class', 'CVR-INFO', 'CPR-PHP'];

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
This is a list of my projects pulled directly from GitHub. They are sorted in descending order after the most recent updated.<br /><br />

You can donate to me via <i class="icon-btc"></i>itcoin address 13hRKYkHNbKx76JfCwVANRYXHziuG2yuyJ
<?php
foreach($repos as $repo):
	if(in_array($repo->name, $ignore)) continue;
	$languages = json_decode(curl_get($repo->languages_url), true);
	?>
	<div class="project">
		<div class="header">
			<h3 class="title">
				<a href="<?php echo $repo->html_url; ?>"><?php echo $repo->name; ?></a> 
				<?php if($repo->fork): ?><i class="icon-code-fork"></i><?php endif; ?>
			</h3>
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
