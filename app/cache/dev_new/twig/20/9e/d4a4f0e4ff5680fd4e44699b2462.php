<?php

/* AngeAngeBundle:Utilisateur:profil.html.twig */
class __TwigTemplate_209ed4a4f0e4ff5680fd4e44699b2462 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<h1>Consultation de son profil</h1>
";
        // line 4
        echo twig_escape_filter($this->env, $this->getContext($context, "user"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "AngeAngeBundle:Utilisateur:profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
