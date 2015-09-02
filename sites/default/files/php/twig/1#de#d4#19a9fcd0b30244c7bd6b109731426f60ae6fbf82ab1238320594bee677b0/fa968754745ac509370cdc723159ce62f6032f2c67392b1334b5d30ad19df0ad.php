<?php

/* core/themes/classy/templates/views/views-view-row-rss.html.twig */
class __TwigTemplate_ded419a9fcd0b30244c7bd6b109731426f60ae6fbf82ab1238320594bee677b0 extends Twig_Template
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
        echo "<item>
  <title>";
        // line 19
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>
  <link>";
        // line 20
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        echo "</link>
  <description>";
        // line 21
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
        echo "</description>
  ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["item_elements"]) ? $context["item_elements"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            echo "<";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "key", array()), "html", null, true);
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true);
            // line 24
            if ($this->getAttribute($context["item"], "value", array())) {
                // line 25
                echo ">";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "value", array()), "html", null, true);
                echo "</";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "key", array()), "html", null, true);
                echo ">
    ";
            } else {
                // line 27
                echo $this->env->getExtension('drupal_core')->renderVar(" />");
                echo "
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</item>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/views/views-view-row-rss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 30,  52 => 27,  44 => 25,  42 => 24,  38 => 23,  34 => 22,  30 => 21,  26 => 20,  22 => 19,  19 => 18,);
    }
}
