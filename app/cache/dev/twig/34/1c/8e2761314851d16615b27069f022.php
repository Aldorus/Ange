<?php

/* AngeAngeBundle:Note:etudiant.html.twig */
class __TwigTemplate_341c8e2761314851d16615b27069f022 extends Twig_Template
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
        echo "<div class=\"breadcrumb\">
\t<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AngeAngeBundle_home"), "html", null, true);
        echo "\">Accueil</a> -> Note
</div>

<h1>Liste des notes</h1>
";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 11
            echo "\tVotre note : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), 0, array(), "array"), "getValeur", array(), "method"), "html", null, true);
            echo ", la moyenne de la classe : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), 1, array(), "array"), "html", null, true);
            echo ", pour la matière : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), 0, array(), "array"), "idDevoir"), "idMatiere"), "html", null, true);
            echo "<br/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 13
        echo "
";
    }

    public function getTemplateName()
    {
        return "AngeAngeBundle:Note:etudiant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
