<?php

/* {# inline_template_start #}<img src="{{ field_image_link__uri }}" width=100/> */
class __TwigTemplate_8f41c0151a43b81e28d335ac610fd03e32238e873d7d6c9d1f668112dd40d804 extends Twig_Template
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
        $__internal_3ac4c85dab40807f7d10a25d219d33ef21f00204de90dd7fdea70602f9d4b24d = $this->env->getExtension("native_profiler");
        $__internal_3ac4c85dab40807f7d10a25d219d33ef21f00204de90dd7fdea70602f9d4b24d->enter($__internal_3ac4c85dab40807f7d10a25d219d33ef21f00204de90dd7fdea70602f9d4b24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<img src=\"{{ field_image_link__uri }}\" width=100/>"));

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
        echo "<img src=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_image_link__uri"]) ? $context["field_image_link__uri"] : null), "html", null, true));
        echo "\" width=100/>";
        
        $__internal_3ac4c85dab40807f7d10a25d219d33ef21f00204de90dd7fdea70602f9d4b24d->leave($__internal_3ac4c85dab40807f7d10a25d219d33ef21f00204de90dd7fdea70602f9d4b24d_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<img src=\"{{ field_image_link__uri }}\" width=100/>";
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
/* {# inline_template_start #}<img src="{{ field_image_link__uri }}" width=100/>*/
