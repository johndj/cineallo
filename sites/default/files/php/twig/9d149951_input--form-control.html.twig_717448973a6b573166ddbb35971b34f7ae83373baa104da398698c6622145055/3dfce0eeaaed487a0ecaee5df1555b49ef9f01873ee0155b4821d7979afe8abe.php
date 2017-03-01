<?php

/* themes/contrib/bootstrap/templates/input/input--form-control.html.twig */
class __TwigTemplate_bf50b1d5b19fe9c183ceba72843d245bbbe82fc5f8a96d84353660182160b089 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("input.html.twig", "themes/contrib/bootstrap/templates/input/input--form-control.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "input.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_887e7616b2ed0f6abc7740a4706d51ffb10f2e7409845dce0fbc006ddbec9978 = $this->env->getExtension("native_profiler");
        $__internal_887e7616b2ed0f6abc7740a4706d51ffb10f2e7409845dce0fbc006ddbec9978->enter($__internal_887e7616b2ed0f6abc7740a4706d51ffb10f2e7409845dce0fbc006ddbec9978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/contrib/bootstrap/templates/input/input--form-control.html.twig"));

        $tags = array("spaceless" => 23, "set" => 25);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('spaceless', 'set'),
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

        // line 23
        ob_start();
        // line 25
        $context["classes"] = array(0 => "form-control");
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_887e7616b2ed0f6abc7740a4706d51ffb10f2e7409845dce0fbc006ddbec9978->leave($__internal_887e7616b2ed0f6abc7740a4706d51ffb10f2e7409845dce0fbc006ddbec9978_prof);

    }

    // line 29
    public function block_input($context, array $blocks = array())
    {
        $__internal_247da72b3f92a1ece74700046a2c4b221df75f701af784041d9a1f78e917c08b = $this->env->getExtension("native_profiler");
        $__internal_247da72b3f92a1ece74700046a2c4b221df75f701af784041d9a1f78e917c08b->enter($__internal_247da72b3f92a1ece74700046a2c4b221df75f701af784041d9a1f78e917c08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "input"));

        // line 30
        echo "    <input";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo " />
  ";
        
        $__internal_247da72b3f92a1ece74700046a2c4b221df75f701af784041d9a1f78e917c08b->leave($__internal_247da72b3f92a1ece74700046a2c4b221df75f701af784041d9a1f78e917c08b_prof);

    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/input/input--form-control.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 30,  64 => 29,  57 => 1,  54 => 25,  52 => 23,  11 => 1,);
    }
}
/* {% extends "input.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for an 'input__textfield' #type form element.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: A list of HTML attributes for the input element.*/
/*  * - children: Optional additional rendered elements.*/
/*  * - icon: An icon.*/
/*  * - input_group: Flag to display as an input group.*/
/*  * - icon_position: Where an icon should be displayed.*/
/*  * - prefix: Markup to display before the input element.*/
/*  * - suffix: Markup to display after the input element.*/
/*  * - type: The type of input.*/
/*  **/
/*  * @ingroup templates*/
/*  **/
/*  * @see \Drupal\bootstrap\Plugin\Preprocess\Input*/
/*  * @see template_preprocess_input()*/
/*  *//* */
/* #}*/
/* {% spaceless %}*/
/*   {%*/
/*     set classes = [*/
/*       'form-control',*/
/*     ]*/
/*   %}*/
/*   {% block input %}*/
/*     <input{{ attributes.addClass(classes) }} />*/
/*   {% endblock %}*/
/* {% endspaceless %}*/
/* */
