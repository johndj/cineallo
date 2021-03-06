<?php

/* modules/contrib/video_embed_field/templates/video-embed-iframe.html.twig */
class __TwigTemplate_afa4d91cdcb76892597e71c100ac8948b0687bdd9bd96d53f7538994e22460b2 extends Twig_Template
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
        $__internal_ab1bec7e736aa22835d7c15921ca4c51444ac3c990529d0a8a0d2dd5db1a5c30 = $this->env->getExtension("native_profiler");
        $__internal_ab1bec7e736aa22835d7c15921ca4c51444ac3c990529d0a8a0d2dd5db1a5c30->enter($__internal_ab1bec7e736aa22835d7c15921ca4c51444ac3c990529d0a8a0d2dd5db1a5c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/video_embed_field/templates/video-embed-iframe.html.twig"));

        $tags = array("if" => 7);
        $filters = array("url_encode" => 7);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('url_encode'),
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

        // line 7
        echo "<iframe";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        if ( !twig_test_empty((isset($context["url"]) ? $context["url"] : null))) {
            echo " src=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            if ( !twig_test_empty((isset($context["query"]) ? $context["query"] : null))) {
                echo "?";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_urlencode_filter((isset($context["query"]) ? $context["query"] : null)), "html", null, true));
            }
            if ( !twig_test_empty((isset($context["fragment"]) ? $context["fragment"] : null))) {
                echo "#";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["fragment"]) ? $context["fragment"] : null), "html", null, true));
            }
            echo "\"";
        }
        echo "></iframe>
";
        
        $__internal_ab1bec7e736aa22835d7c15921ca4c51444ac3c990529d0a8a0d2dd5db1a5c30->leave($__internal_ab1bec7e736aa22835d7c15921ca4c51444ac3c990529d0a8a0d2dd5db1a5c30_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/video_embed_field/templates/video-embed-iframe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Display an iframe with alterable components.*/
/*  *//* */
/* #}*/
/* <iframe{{ attributes }}{% if url is not empty %} src="{{ url }}{% if query is not empty %}?{{ query | url_encode }}{% endif %}{% if fragment is not empty %}#{{ fragment }}{% endif %}"{% endif %}></iframe>*/
/* */
