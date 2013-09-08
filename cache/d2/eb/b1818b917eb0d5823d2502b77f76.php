<?php

/* code.twig */
class __TwigTemplate_d2ebb1818b917eb0d5823d2502b77f76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<h2>Code</h2>
This is a list of my projects pulled directly from GitHub. They are sorted in descending order after the most recent updated.<br /><br />

You can donate to me via <i class=\"icon-btc\"></i>itcoin address 13hRKYkHNbKx76JfCwVANRYXHziuG2yuyJ

";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["repos"]) ? $context["repos"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["repo"]) {
            // line 10
            echo "<div class=\"project\">
\t<div class=\"header\">
\t\t<h3 class=\"title\">
\t\t\t<a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repo"]) ? $context["repo"] : null), "html_url"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repo"]) ? $context["repo"] : null), "name"), "html", null, true);
            echo "</a>
\t\t\t";
            // line 14
            if ($this->getAttribute((isset($context["repo"]) ? $context["repo"] : null), "fork")) {
                // line 15
                echo "\t\t\t\t<i class=\"icon-code-fork\"></i>
\t\t\t";
            }
            // line 17
            echo "\t\t</h3>
\t\t";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["langs"]) ? $context["langs"] : null), $this->getAttribute((isset($context["repo"]) ? $context["repo"] : null), "name"), array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 19
                echo "\t\t<span class=\"lang ";
                echo twig_escape_filter($this->env, (isset($context["lang"]) ? $context["lang"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["lang"]) ? $context["lang"] : null), "html", null, true);
                echo "</span>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "\t</div>
\t<div class=\"description\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repo"]) ? $context["repo"] : null), "description"), "html", null, true);
            echo "</div>
</div>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 25
            echo "\tSomething went terribly wrong.
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "code.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 25,  81 => 22,  78 => 21,  67 => 19,  63 => 18,  60 => 17,  56 => 15,  54 => 14,  48 => 13,  43 => 10,  38 => 9,  31 => 4,  28 => 3,);
    }
}
