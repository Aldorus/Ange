<?php

/* AngeAngeBundle:Utilisateur:show.html.twig */
class __TwigTemplate_9d41e1a71a23085956c66ec97b1c6991 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>Utilisateur</h1>

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
            <th>Nom</th>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nom"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Prenom</th>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "prenom"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Login</th>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "login"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Password</th>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "password"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Adresse</th>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "adresse"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Cp</th>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "cp"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Ville</th>
            <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "ville"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Telephone</th>
            <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "telephone"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Mail</th>
            <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "mail"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Dateinscription</th>
            <td>";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateInscription"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("utilisateur"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("utilisateur_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("utilisateur_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 65
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
        return "AngeAngeBundle:Utilisateur:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
