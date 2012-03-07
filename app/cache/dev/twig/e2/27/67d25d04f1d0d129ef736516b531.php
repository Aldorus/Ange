<?php

/* AngeAngeBundle:Utilisateur:contact.html.twig */
class __TwigTemplate_e22767d25d04f1d0d129ef736516b531 extends Twig_Template
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
        echo "<h1>Contact</h1>
\t<form action=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("utilisateur_envoi_mail"), "html", null, true);
        echo "\" method=\"POST\">
\t\tChoisissez une personne &agrave; contacter :
\t\t<select name=\"profEmail\">
\t\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "profs"));
        foreach ($context['_seq'] as $context["_key"] => $context["prof"]) {
            // line 8
            echo "\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "prof"), "email"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "prof"), "username"), "html", null, true);
            echo "</option>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prof'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 10
        echo "\t\t</select>
\t\t<input type=\"submit\" value=\"Envoyer un mail\"/>
\t</form>
";
    }

    public function getTemplateName()
    {
        return "AngeAngeBundle:Utilisateur:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
