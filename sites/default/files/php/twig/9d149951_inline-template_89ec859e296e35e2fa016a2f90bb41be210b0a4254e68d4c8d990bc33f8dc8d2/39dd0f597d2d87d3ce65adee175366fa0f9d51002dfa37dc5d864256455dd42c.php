<?php

/* {# inline_template_start #}<img src="{{ field_image_actualite__uri }}" width=350 height=150 />
 */
class __TwigTemplate_e2e8468c35b708c6444ce5ea3dd16a747c2aa63302f2f8572c88ecdf360cfd45 extends Twig_Template
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
        $__internal_fe1e2a7f2ff621094120f0c840dc77dbeb96e591b7ffd4e6e853a5aa202311d7 = $this->env->getExtension("native_profiler");
        $__internal_fe1e2a7f2ff621094120f0c840dc77dbeb96e591b7ffd4e6e853a5aa202311d7->enter($__internal_fe1e2a7f2ff621094120f0c840dc77dbeb96e591b7ffd4e6e853a5aa202311d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<img src=\"{{ field_image_actualite__uri }}\" width=350 height=150 />
"));

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
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_image_actualite__uri"]) ? $context["field_image_actualite__uri"] : null), "html", null, true));
        echo "\" width=350 height=150 />
";
        
        $__internal_fe1e2a7f2ff621094120f0c840dc77dbeb96e591b7ffd4e6e853a5aa202311d7->leave($__internal_fe1e2a7f2ff621094120f0c840dc77dbeb96e591b7ffd4e6e853a5aa202311d7_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<img src=\"{{ field_image_actualite__uri }}\" width=350 height=150 />
";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 1,);
    }
}
/* {# inline_template_start #}<img src="{{ field_image_actualite__uri }}" width=350 height=150 />*/
/* */
