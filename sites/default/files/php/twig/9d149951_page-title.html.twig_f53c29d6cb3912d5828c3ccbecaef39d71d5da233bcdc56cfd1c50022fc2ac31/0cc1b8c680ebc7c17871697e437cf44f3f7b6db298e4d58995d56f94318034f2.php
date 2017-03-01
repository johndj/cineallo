<?php

/* themes/contrib/bootstrap/templates/system/page-title.html.twig */
class __TwigTemplate_7fa95aa4cac26ef65404e9ebcf0219bdd6e4621da5d14783286d4df74a308198 extends Twig_Template
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
        $__internal_d22f4c0b092f3545881aa0acfa4f29bf09b964a7814b0c5108bf866d8a7538f7 = $this->env->getExtension("native_profiler");
        $__internal_d22f4c0b092f3545881aa0acfa4f29bf09b964a7814b0c5108bf866d8a7538f7->enter($__internal_d22f4c0b092f3545881aa0acfa4f29bf09b964a7814b0c5108bf866d8a7538f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/contrib/bootstrap/templates/system/page-title.html.twig"));

        $tags = array("if" => 19);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
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

        // line 19
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 20
            echo "  <h1";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "page-header"), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h1>
";
        }
        
        $__internal_d22f4c0b092f3545881aa0acfa4f29bf09b964a7814b0c5108bf866d8a7538f7->leave($__internal_d22f4c0b092f3545881aa0acfa4f29bf09b964a7814b0c5108bf866d8a7538f7_prof);

    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/system/page-title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 20,  46 => 19,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for page titles.*/
/*  **/
/*  * Available variables:*/
/*  * - title_attributes: HTML attributes for the page title element.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title: The page title, for use in the actual content.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  **/
/*  * @ingroup templates*/
/*  **/
/*  * @see template_preprocess_page_title()*/
/*  *//* */
/* #}*/
/* {% if title %}*/
/*   <h1{{ title_attributes.addClass('page-header') }}>{{ title }}</h1>*/
/* {% endif %}*/
/* */
