<?php
include('oauth/token.php');

function curl_get($url) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERPWD, github_personal_token().':x-oauth-basic');
    $result = curl_exec($ch);

    curl_close($ch);
    return $result;
}
?>
<!DOCTYPE html>
<html>
    <head>
    	<!-- meta tags !-->
    	<title>nordbjerg</title>
    	<meta charset="utf-8" />
    	<!-- stylesheets !-->
    	<link rel="stylesheet" type="text/css" href="/assets/css/common.css" />
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    </head>
    <body>
        <div id="main">
            <h1 id="logo">oliver nordbjerg</h1>
            <nav>
                <ul>
                    <?php
                    $navigation = [
                        "home" => [ "dest" => "/", "module" => "home" ],
                        "blog" => [ "dest" => "/blog.php", "module" => "blog" ],
                        "code" => [ "dest" => "/code.php", "module" => "code" ],
                        "resume" => [ "dest" => "/resume.php", "module" => "resume" ]
                    ];

                    foreach($navigation as $txt => $elm):
                        $classes = $elm['module'];

                        if((isset($module) && $module == $elm['module'])
                           || (!isset($module) && $elm['module'] == 'home')):
                            $classes .= ' current';
                        endif;
                    ?>
                    <li class="<?php echo $classes; ?>">
                        <a href="<?php echo $elm['dest']; ?>"><?php echo $txt; ?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <div style="clear: both"></div>
            </nav>
            <div id="content">