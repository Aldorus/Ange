<?php

/* AngeAngeBundle:Note:etudiant.html.twig */
class __TwigTemplate_6a79f3bbafdc21d41cd11e4eeea5ce91 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"breadcrumb\">
\t<a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AngeAngeBundle_home"), "html", null, true);
        echo "\">Accueil</a> -> Note
</div>

<h1>Liste des notes</h1>
";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 7
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
