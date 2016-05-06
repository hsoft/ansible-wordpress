#!/bin/bash
mysql -u {{ wordpress_dbuser }} --password="{{ wordpress_password }}" -D {{ wordpress_dbname }} 
