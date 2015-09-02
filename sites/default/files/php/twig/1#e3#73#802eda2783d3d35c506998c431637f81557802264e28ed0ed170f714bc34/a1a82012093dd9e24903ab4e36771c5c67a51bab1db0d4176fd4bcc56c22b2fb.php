<?php

/* core/themes/classy/templates/dataset/item-list--search-results.html.twig */
class __TwigTemplate_e373802eda2783d3d35c506998c431637f81557802264e28ed0ed170f714bc34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("item-list.html.twig", "core/themes/classy/templates/dataset/item-list--search-results.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "item-list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 24
        $context["classes"] = array(0 => "search-results", 1 => ($this->getAttribute(        // line 26
(isset($context["context"]) ? $context["context"] : null), "plugin", array()) . "-results"));
        // line 29
        $context["attributes"] = $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/dataset/item-list--search-results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,  27 => 29,  25 => 26,  24 => 24,  11 => 1,);
    }
}
