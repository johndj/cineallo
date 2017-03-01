<?php

/* {# inline_template_start #}<a href="node/{{ nid }}" class="link-top-film" ><img  src="{{ field_image_link__uri }}" width=185 height=250/></a> */
class __TwigTemplate_ea8dc380815f3b28f65c9868e52220cb050203c1975e73594f530546c719e9eb extends Twig_Template
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
        $__internal_05e9407f068f3f3bb75e78d6357ed5157b1974b1c3c84385344650da55e7267b = $this->env->getExtension("native_profiler");
        $__internal_05e9407f068f3f3bb75e78d6357ed5157b1974b1c3c84385344650da55e7267b->enter($__internal_05e9407f068f3f3bb75e78d6357ed5157b1974b1c3c84385344650da55e7267b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<a href=\"node/{{ nid }}\" class=\"link-top-film\" ><img  src=\"{{ field_image_link__uri }}\" width=185 height=250/></a>"));

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
        echo "\" class=\"link-top-film\" ><img  src=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_image_link__uri"]) ? $context["field_image_link__uri"] : null), "html", null, true));
        echo "\" width=185 height=250/></a>";
        
        $__internal_05e9407f068f3f3bb75e78d6357ed5157b1974b1c3c84385344650da55e7267b->leave($__internal_05e9407f068f3f3bb75e78d6357ed5157b1974b1c3c84385344650da55e7267b_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<a href=\"node/{{ nid }}\" class=\"link-top-film\" ><img  src=\"{{ field_image_link__uri }}\" width=185 height=250/></a>";
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
/* {# inline_template_start #}<a href="node/{{ nid }}" class="link-top-film" ><img  src="{{ field_image_link__uri }}" width=185 height=250/></a>*/
