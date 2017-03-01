<?php

/* {# inline_template_start #}un film de {{ field_realisateur }} */
class __TwigTemplate_d9624f694bb38f9c9b0683211fa6ed0703f231d9947ec02be1962c644f4865e0 extends Twig_Template
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
        $__internal_db6c972a8bda18d9ffcf191e364683fc2e743ebd1cf9d6091543279b3667adef = $this->env->getExtension("native_profiler");
        $__internal_db6c972a8bda18d9ffcf191e364683fc2e743ebd1cf9d6091543279b3667adef->enter($__internal_db6c972a8bda18d9ffcf191e364683fc2e743ebd1cf9d6091543279b3667adef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}un film de {{ field_realisateur }}"));

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
        echo "un film de ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_realisateur"]) ? $context["field_realisateur"] : null), "html", null, true));
        
        $__internal_db6c972a8bda18d9ffcf191e364683fc2e743ebd1cf9d6091543279b3667adef->leave($__internal_db6c972a8bda18d9ffcf191e364683fc2e743ebd1cf9d6091543279b3667adef_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}un film de {{ field_realisateur }}";
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
/* {# inline_template_start #}un film de {{ field_realisateur }}*/
