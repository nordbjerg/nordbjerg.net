<?php

/* base.twig */
class __TwigTemplate_8cccb96d8f8bca61b92155415856ac52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
    \t<!-- meta tags !-->
    \t<title>nordbjerg</title>
    \t<meta charset=\"utf-8\" />
    \t<!-- stylesheets !-->
    \t<link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/common.css\" />
\t\t<link href=\"//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css\" rel=\"stylesheet\">
    </head>
    <body>
        <div id=\"main\">
            <h1 id=\"logo\">oliver nordbjerg</h1>
            <nav>
                <ul>
                ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["navigation"]) ? $context["navigation"] : null));
        foreach ($context['_seq'] as $context["txt"] => $context["elm"]) {
            // line 17
            echo "                    <li class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elm"]) ? $context["elm"] : null), "module"), "html", null, true);
            echo "\">
                        <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elm"]) ? $context["elm"] : null), "dest"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["txt"]) ? $context["txt"] : null), "html", null, true);
            echo "</a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['txt'], $context['elm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                </ul>
                <div style=\"clear: both\"></div>
            </nav>
            <div id=\"content\">
                ";
        // line 25
        $this->displayBlock('content', $context, $blocks);
        // line 26
        echo "            </div>
        </div>
        
        <!-- scripts !-->
        <script type=\"text/javascript\">
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        
        ga('create', 'UA-43822402-1', 'nordbjerg.net');
        ga('send', 'pageview');
        </script>
    </body>
</html>";
    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 25,  65 => 26,  63 => 25,  57 => 21,  46 => 18,  41 => 17,  37 => 16,  20 => 1,  31 => 4,  28 => 3,);
    }
}
