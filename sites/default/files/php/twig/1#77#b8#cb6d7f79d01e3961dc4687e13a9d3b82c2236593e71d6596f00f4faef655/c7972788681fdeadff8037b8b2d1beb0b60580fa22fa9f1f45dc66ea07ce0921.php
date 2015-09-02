<?php

/* core/themes/classy/templates/content/taxonomy-term.html.twig */
class __TwigTemplate_77b8cb6d7f79d01e3961dc4687e13a9d3b82c2236593e71d6596f00f4faef655 extends Twig_Template
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
        // line 27
        $context["classes"] = array(0 => "taxonomy-term", 1 => ("vocabulary-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 29
(isset($context["term"]) ? $context["term"] : null), "bundle", array()))));
        // line 32
        echo "<div";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "setAttribute", array(0 => "id", 1 => ("taxonomy-term-" . $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "id", array()))), "method"), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">
  ";
        // line 33
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
  ";
        // line 34
        if ( !(isset($context["page"]) ? $context["page"] : null)) {
            // line 35
            echo "    <h2><a href=\"";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "</a></h2>
  ";
        }
        // line 37
        echo "  ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "
  <div class=\"content\">
    ";
        // line 39
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/content/taxonomy-term.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 39,  41 => 37,  33 => 35,  31 => 34,  27 => 33,  22 => 32,  20 => 29,  19 => 27,);
    }
}
