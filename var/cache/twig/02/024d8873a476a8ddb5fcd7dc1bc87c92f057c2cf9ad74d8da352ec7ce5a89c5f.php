<?php

/* add_task.html.twig */
class __TwigTemplate_cb357815c60962b8f5f132556278882ce1f3a6fd87716b091aceceb1b6760eae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "add_task.html.twig", 1);
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
<form action=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_task_post_form");
        echo "\" method=\"post\">

    ";
        // line 7
        if (array_key_exists("errors", $context)) {
            // line 8
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 9
                echo "            <div class=\"notification is-danger\">
                ";
                // line 10
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "    ";
        }
        // line 14
        echo "

    <div class=\"field\">
        <div class=\"control\">
            <input class=\"input\" type=\"text\" placeholder=\"Title\" name=\"title\">
        </div>
    </div>

    <div class=\"field\">
        <div class=\"control\">
            <input class=\"input\" type=\"text\" placeholder=\"Description\" name=\"description\">
        </div>
    </div>
    <input type=\"submit\" class=\"button is-info\" value=\"Add\">
</form>

";
    }

    public function getTemplateName()
    {
        return "add_task.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  58 => 13,  49 => 10,  46 => 9,  41 => 8,  39 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "add_task.html.twig", "/Applications/MAMP/htdocs/toDoList/templates/add_task.html.twig");
    }
}
