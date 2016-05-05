#!/bin/bash
mysqldump -u {{ wordpress_dbuser }} --password="{{ wordpress_password }}" {{ wordpress_dbname }} 
