<?php

/* {# inline_template_start #}<a href="node/{{ nid }}" class="link-top-film" ><img src=" {{ field_image_link__uri }}" width=185 height=250 /></a> */
class __TwigTemplate_268bda7f1d3d04ca016ecad61181fadd2cfbbcfca68c95bbb1b62c22a90a0424 extends Twig_Template
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
        $__internal_2956074466433a887f4a76f4b57490449f320373da5947c70ae3979747c29702 = $this->env->getExtension("native_profiler");
        $__internal_2956074466433a887f4a76f4b57490449f320373da5947c70ae3979747c29702->enter($__internal_2956074466433a887f4a76f4b57490449f320373da5947c70ae3979747c29702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<a href=\"node/{{ nid }}\" class=\"link-top-film\" ><img src=\" {{ field_image_link__uri }}\" width=185 height=250 /></a>"));

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

        // line 1
        echo "<a href=\"node/";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["nid"]) ? $context["nid"] : null), "html", null, true));
        echo "\" class=\"link-top-film\" ><img src=\" ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_image_link__uri"]) ? $context["field_image_link__uri"] : null), "html", null, true));
        echo "\" width=185 height=250 /></a>";
        
        $__internal_2956074466433a887f4a76f4b57490449f320373da5947c70ae3979747c29702->leave($__internal_2956074466433a887f4a76f4b57490449f320373da5947c70ae3979747c29702_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<a href=\"node/{{ nid }}\" class=\"link-top-film\" ><img src=\" {{ field_image_link__uri }}\" width=185 height=250 /></a>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<a href="node/{{ nid }}" class="link-top-film" ><img src=" {{ field_image_link__uri }}" width=185 height=250 /></a>*/
