<?php

/* themes/contrib/bootstrap/templates/block/block--system.html.twig */
class __TwigTemplate_b943af2334f11493e9d8b5d6b79234143637c762f17579084a98dd0b0ca4ff99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("block--bare.html.twig", "themes/contrib/bootstrap/templates/block/block--system.html.twig", 9);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "block--bare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36751a9e1df9ed7ff0dc7487c14f55787b21e48fa546ca4015e0ad04aa4e271f = $this->env->getExtension("native_profiler");
        $__internal_36751a9e1df9ed7ff0dc7487c14f55787b21e48fa546ca4015e0ad04aa4e271f->enter($__internal_36751a9e1df9ed7ff0dc7487c14f55787b21e48fa546ca4015e0ad04aa4e271f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/contrib/bootstrap/templates/block/block--system.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36751a9e1df9ed7ff0dc7487c14f55787b21e48fa546ca4015e0ad04aa4e271f->leave($__internal_36751a9e1df9ed7ff0dc7487c14f55787b21e48fa546ca4015e0ad04aa4e271f_prof);

    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/block/block--system.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 9,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for system blocks.*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* {% extends "block--bare.html.twig" %}*/
/* */
