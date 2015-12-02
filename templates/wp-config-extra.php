<?php
{% for key, value in wordpress_extra_wpconfig.items() -%}
define('{{ key }}', {{ value }});
{% endfor %}
