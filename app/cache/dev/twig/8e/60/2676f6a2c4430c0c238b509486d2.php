<?php

/* AngeAngeBundle:Home:index.html.twig */
class __TwigTemplate_8e602676f6a2c4430c0c238b509486d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AngeAngeBundle::layoutEtu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Home";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\tCours de la semaine (planning)
\t
\t<h2>Info (right)</h2>
";
    }

    public function getTemplateName()
    {
        return "AngeAngeBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
