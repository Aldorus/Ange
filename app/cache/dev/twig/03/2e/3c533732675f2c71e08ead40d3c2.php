<?php

/* AngeAngeBundle:Home:indexEtu.html.twig */
class __TwigTemplate_032e3c533732675f2c71e08ead40d3c2 extends Twig_Template
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
\tCompteur de vos absences : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getContext($context, "nbAbsence"), "html", null, true);
        echo "<br/><hr/><br/>
\tAbsences de vos professeurs : <br/>
\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "absencesProf"));
        foreach ($context['_seq'] as $context["_key"] => $context["absenceProf"]) {
            // line 11
            echo "\t\t\t Prof : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "absenceProf"), "idUtilisateur"), "username"), "html", null, true);
            echo ", pour le cours : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "absenceProf"), "idCours"), "label"), "html", null, true);
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['absenceProf'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 13
        echo "\t
";
    }

    public function getTemplateName()
    {
        return "AngeAngeBundle:Home:indexEtu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
