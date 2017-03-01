<?php

/* themes/contrib/bootstrap/templates/block/block--local-tasks-block.html.twig */
class __TwigTemplate_f4ab7bac0ccaf14c52a3dc1e8c6f8a376f020bde1e7adf818a3a7f933b9c10cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block--bare.html.twig", "themes/contrib/bootstrap/templates/block/block--local-tasks-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block--bare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aeb0fd7cdf50c67453c21f393409846740c486b54b7b7a28fc6cb99fc6579b75 = $this->env->getExtension("native_profiler");
        $__internal_aeb0fd7cdf50c67453c21f393409846740c486b54b7b7a28fc6cb99fc6579b75->enter($__internal_aeb0fd7cdf50c67453c21f393409846740c486b54b7b7a28fc6cb99fc6579b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/contrib/bootstrap/templates/block/block--local-tasks-block.html.twig"));

        $tags = array("if" => 11);
        $filters = array("t" => 12);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aeb0fd7cdf50c67453c21f393409846740c486b54b7b7a28fc6cb99fc6579b75->leave($__internal_aeb0fd7cdf50c67453c21f393409846740c486b54b7b7a28fc6cb99fc6579b75_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_18a8a4e935ca8b71af2fdfec238fa41a386ba7abea9267448b8c0b6375c3ccf7 = $this->env->getExtension("native_profiler");
        $__internal_18a8a4e935ca8b71af2fdfec238fa41a386ba7abea9267448b8c0b6375c3ccf7->enter($__internal_18a8a4e935ca8b71af2fdfec238fa41a386ba7abea9267448b8c0b6375c3ccf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "  ";
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 12
            echo "    <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Tabs")));
            echo "\">
      ";
            // line 13
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
    </nav>
  ";
        }
        
        $__internal_18a8a4e935ca8b71af2fdfec238fa41a386ba7abea9267448b8c0b6375c3ccf7->leave($__internal_18a8a4e935ca8b71af2fdfec238fa41a386ba7abea9267448b8c0b6375c3ccf7_prof);

    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/block/block--local-tasks-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 13,  67 => 12,  64 => 11,  58 => 10,  11 => 1,);
    }
}
/* {% extends "block--bare.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for tabs.*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* {% block content %}*/
/*   {% if content %}*/
/*     <nav class="tabs" role="navigation" aria-label="{{ 'Tabs'|t }}">*/
/*       {{ content }}*/
/*     </nav>*/
/*   {% endif %}*/
/* {% endblock %}*/
/* */
