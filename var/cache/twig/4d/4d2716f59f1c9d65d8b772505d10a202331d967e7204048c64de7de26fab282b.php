<?php

/* layout.html.twig */
class __TwigTemplate_9523f2ebdad2dfaed46d2a9e7ad3de0d6db898aed96f006a5f8858526494bbd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html class=\"is-light-grey\">
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo " - My Silex Application</title>

        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"/toDoList/node_modules/bulma/css/bulma.css\" rel=\"stylesheet\" type=\"text/css\" />

        <script type=\"text/javascript\">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </head>
    <body  >
        <section class=\"hero is-success\">
            <div class=\"hero-body\">
                <div class=\"container\">
                    <h1 class=\"title\">
                        To Do List
                    </h1>
                    <h2 class=\"subtitle\">
                        Loic Audiger : Source code quality showcase
                    </h2>
                </div>
            </div>
        </section>

        <div class=\"content is-light-grey\" >
            <div class=\"columns\">
                <div class=\"column is-6 is-offset-3 box push-top\">
                    ";
        // line 38
        $this->displayBlock('content', $context, $blocks);
        // line 39
        echo "                </div>
            </div>
        </div>
    </body>

    <script defer src=\"https://use.fontawesome.com/releases/v5.0.6/js/all.js\"></script>

</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "";
    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 38,  80 => 4,  68 => 39,  66 => 38,  31 => 6,  26 => 4,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html.twig", "/Applications/MAMP/htdocs/toDoList/templates/layout.html.twig");
    }
}
