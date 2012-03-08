<?php

/* AngeAngeBundle:UtilisateurCours:edit.html.twig */
class __TwigTemplate_80fe3c81b56ead3ed3dc3c60d830ce0c extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>UtilisateurCours edit</h1>

<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("utilisateurcours_update", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "edit_form"));
        echo ">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "edit_form"));
        echo "
    <p>
        <button type=\"submit\">Edit</button>
    </p>
</form>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("utilisateurcours"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("utilisateurcours_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 18
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "delete_form"));
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "AngeAngeBundle:UtilisateurCours:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
