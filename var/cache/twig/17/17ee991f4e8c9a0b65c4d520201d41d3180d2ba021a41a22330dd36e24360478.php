<?php

/* index.html.twig */
class __TwigTemplate_fcd2bc07b60cf397377434a97e7f1118864029dc54a725aed9d40ab7ed70eb7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <a class=\"button is-primary\" href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_task");
        echo "\">
        <span>Add new task</span>
        <span class=\"icon is-small\">
          <i class=\"fas fa-plus\"></i>
        </span>
    </a>

    <table class=\"table full-width\">
        <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 21
        if (array_key_exists("tasks", $context)) {
            // line 22
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                // line 23
                echo "                <tr>
                    <th>";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "title", array()), "html", null, true);
                echo "</th>
                    <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "description", array()), "html", null, true);
                echo "</td>
                    <td>
                        <form action=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_task", array("taskId" => twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "id", array()))), "html", null, true);
                echo "\" method=\"post\">
                            <input type=\"submit\" class=\"button is-danger\" value=\"Delete\">
                        </form>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "        ";
        }
        // line 34
        echo "
        </tbody>
    </table>

    A default list is generated when there is not any task available.

";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 34,  84 => 33,  72 => 27,  67 => 25,  63 => 24,  60 => 23,  55 => 22,  53 => 21,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html.twig", "/Applications/MAMP/htdocs/toDoList/templates/index.html.twig");
    }
}
