<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* library/tarnishedspirit.html.twig */
class __TwigTemplate_9eac4b9bf01e5ee1e7619c3ba33310f3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div style=\"position: relative; height: 15px; width: 100%;\">  <a style=\"float: right;\" href=\"?subtopic=creatures&race=terramite\">next <img src=\"images/arrow_right.gif\" width=\"15\" height=\"11\" border=\"0\"/></a>  <a style=\"position: absolute;\" href=\"?subtopic=creatures&race=tarantula\"><img src=\"images/arrow_left.gif\" width=\"15\" height=\"11\" border=\"0\"/> previous</a>  <div style=\"position: absolute; width: 80%; margin-left: 10%; margin-right: 10%; text-align: center;\"><a href=\"?subtopic=creatures\"><img src=\"images/arrow_up.gif\" width=\"11\" height=\"15\" border=\"0\"/> back</a></div></div><div style=\"position: relative; top: 25px; clear: both; \"><div style=\"height: 64px; margin-bottom: 5px;\">  <h2 style=\"float: right;\">Tarnished Spirits</h2>  <img src=\"images/library/tarnishedspirit.gif\"/></div><div style=\"margin-bottom: 35px; clear: both;\">  <p>Tarnished spirits are foul ghosts, tainted by nameless crimes they committed in life that do not permit them to rest in peace. They are feeble, sickly things that stalk dark and doomed places, trying to find victims to whisper their evil deeds to and feeding off their life force. Though not very strong, they seek to harm adventurers in their mean, petty ways, and will stalk them until slain. Tarnished spirits relish in the gloom of crypts, graveyards and other places of death, although they are often driven out to the borders by stronger undead creatures, where they linger and wait for prey. </p>  <p>Tarnished Spirits have 150 hitpoints. They are immune to death, earth and physical damage and cannot be paralyzed. These creatures can neither be summoned nor convinced.</p>  <p>Tarnished Spirits yield 120 experience points. They carry morning stars, shadow herbs and sometimes other items with them.</p>  </div></div>";
    }

    public function getTemplateName()
    {
        return "library/tarnishedspirit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "library/tarnishedspirit.html.twig", "/var/www/html/system/templates/library/tarnishedspirit.html.twig");
    }
}
