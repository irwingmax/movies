<?php

/* index.twig */
class __TwigTemplate_01efcd7c785f5068a18afbf29568171d76a9ef93166da8b67aae51001dc59bbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello World ";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo " !!";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.twig", "/Users/irwing/projects/movies/views/index.twig");
    }
}
