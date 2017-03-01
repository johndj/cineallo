<?php

/* core/modules/system/templates/feed-icon.html.twig */
class __TwigTemplate_01133d014573da97f25d7bf434b6ff6cc2f72ef97e1e9b3c9cde49b79e47a164 extends Twig_Template
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
        $__internal_0972e1b2b0f2e915d140ad58ad061da8edf60383a7c35714e2d61f2c83dd3db6 = $this->env->getExtension("native_profiler");
        $__internal_0972e1b2b0f2e915d140ad58ad061da8edf60383a7c35714e2d61f2c83dd3db6->enter($__internal_0972e1b2b0f2e915d140ad58ad061da8edf60383a7c35714e2d61f2c83dd3db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/modules/system/templates/feed-icon.html.twig"));

        $tags = array();
        $filters = array("t" => 16);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 15
        echo "<a href=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
        echo "\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "feed-icon"), "method"), "html", null, true));
        echo ">
  ";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Subscribe to @title", array("@title" => (isset($context["title"]) ? $context["title"] : null)))));
        echo "
</a>
";
        
        $__internal_0972e1b2b0f2e915d140ad58ad061da8edf60383a7c35714e2d61f2c83dd3db6->leave($__internal_0972e1b2b0f2e915d140ad58ad061da8edf60383a7c35714e2d61f2c83dd3db6_prof);

    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/feed-icon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 16,  46 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a feed icon.*/
/*  **/
/*  * Available variables:*/
/*  * - url: An internal system path or a fully qualified external URL of the feed.*/
/*  * - attributes: Remaining HTML attributes for the feed link.*/
/*  *   - title: A descriptive title of the feed link.*/
/*  *   - class: HTML classes to be applied to the feed link.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <a href="{{ url }}"{{ attributes.addClass('feed-icon') }}>*/
/*   {{ 'Subscribe to @title'|t({'@title': title}) }}*/
/* </a>*/
/* */
