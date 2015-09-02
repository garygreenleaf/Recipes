<?php

/* core/themes/classy/templates/views/views-view-rss.html.twig */
class __TwigTemplate_269014a17507850028c4d64e0e3322a9d6b678b0705bec88382a20ce5ed2bac5 extends Twig_Template
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
        // line 18
        echo "<?xml version=\"1.0\" encoding=\"utf-8\" ?>
<rss version=\"2.0\" xml:base=\"";
        // line 19
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        echo "\"";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["namespaces"]) ? $context["namespaces"] : null), "html", null, true);
        echo ">
  <channel>
    <title>";
        // line 21
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>
    <link>";
        // line 22
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        echo "</link>
    <description>";
        // line 23
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
        echo "</description>
    <language>";
        // line 24
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["langcode"]) ? $context["langcode"] : null), "html", null, true);
        echo "</language>
    ";
        // line 25
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["channel_elements"]) ? $context["channel_elements"] : null), "html", null, true);
        echo "
    ";
        // line 26
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["items"]) ? $context["items"] : null), "html", null, true);
        echo "
  </channel>
</rss>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/views/views-view-rss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 26,  45 => 25,  41 => 24,  37 => 23,  33 => 22,  29 => 21,  22 => 19,  19 => 18,);
    }
}
