<?php
define('DB_NAME', '{{ wordpress_dbname }}');
define('DB_USER', '{{ wordpress_dbuser }}');
define('DB_PASSWORD', '{{ wordpress_password }}');
define('DB_HOST', 'localhost');
define('WP_CONTENT_DIR', '{{ wordpress_content_root }}');
{% for key, value in wordpress_extra_wpconfig.items() -%}
define('{{ key }}', {{ value }});
{% endfor %}
?>
