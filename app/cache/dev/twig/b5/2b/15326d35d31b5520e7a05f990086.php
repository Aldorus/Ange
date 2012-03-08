<?php

/* AngeAngeBundle::layoutAdmin.html.twig */
class __TwigTemplate_b52b15326d35d31b5520e7a05f990086 extends Twig_Template
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

        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "
    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Ange";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "        ";
    }

    public function getTemplateName()
    {
        return "AngeAngeBundle::layoutAdmin.html.twig";
    }

}
