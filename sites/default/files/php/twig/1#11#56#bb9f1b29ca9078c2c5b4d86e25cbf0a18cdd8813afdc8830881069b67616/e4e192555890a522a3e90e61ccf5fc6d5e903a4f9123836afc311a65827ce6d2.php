<?php

/* {# inline_template_start #} ({{ nid }}) */
class __TwigTemplate_1156bb9f1b29ca9078c2c5b4d86e25cbf0a18cdd8813afdc8830881069b67616 extends Twig_Template
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
        echo " (";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["nid"]) ? $context["nid"] : null), "html", null, true);
        echo ")";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #} ({{ nid }})";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
