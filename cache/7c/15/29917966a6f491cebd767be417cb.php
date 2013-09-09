<?php

/* home.twig */
class __TwigTemplate_7c1529917966a6f491cebd767be417cb extends Twig_Template
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
        echo "<img src=\"https://2.gravatar.com/avatar/f1013ce08855c8ba858feb7827585ad2?s=135\" alt=\"Graphic depicting nordbjerg\" title=\"The face of nordbjerg\" style=\"float: left; margin: 5px 5px 0 0\" />
<b>Hi, I'm Oliver.</b> I'm a 17 year old all-around developer from Roskilde, Denmark.<br /><br />

I'm an oddball by day, but by night I double as a mad scientist. I love pushing boundaries and researching things. I haven't done anything wild yet, but the day will come, I promise.<br /><br />

I am a contributor to <i class=\"icon-github-sign\"></i> <a href=\"https://github.com/nordbjerg\" title=\"nordbjerg's GitHub\" rel=\"nofollow\">open source</a> and I use my <i class=\"icon-twitter\"></i> <a href=\"https://twitter.com/nordbjerg_\" title=\"nordbjerg's Twitter\" rel=\"nofollow\">Twitter</a> more than my Facebook.
";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}