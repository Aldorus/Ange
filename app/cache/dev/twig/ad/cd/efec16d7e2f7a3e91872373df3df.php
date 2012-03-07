<?php

/* AngeAngeBundle::layoutEtu.html.twig */
class __TwigTemplate_adcdefec16d7e2f7a3e91872373df3df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" media=\"screen\" href=\"style/style.css\">
    </head>
    <body>
    \t<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profil"), "html", null, true);
        echo "\">Mon profil</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact"), "html", null, true);
        echo "\">Contact</a>
    \t<div class=\"menu\">
    \t\t<a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AngeAngeBundle_home"), "html", null, true);
        echo "\">Accueil</a> <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("note_etu"), "html", null, true);
        echo "\">Notes</a>
    \t</div>
    \t<div class=\"content\">
    \t\t";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        </div>
    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Ange";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "        \t";
    }

    public function getTemplateName()
    {
        return "AngeAngeBundle::layoutEtu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
