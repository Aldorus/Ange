<?php

/* AngeAngeBundle:UtilisateurCours:show.html.twig */
class __TwigTemplate_5bf14bfc4e93a31c3b5b2fdb78795ccb extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>UtilisateurCours</h1>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Present</th>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "present"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Prof</th>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "prof"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Retard</th>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "retard"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("utilisateurcours"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("utilisateurcours_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("utilisateurcours_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 37
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
        return "AngeAngeBundle:UtilisateurCours:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
