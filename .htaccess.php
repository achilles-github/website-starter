# Date 6 5 2015

DirectoryIndex index.php
ErrorDocument 404 /assets/error-pages/404.php

RewriteEngine On
RewriteBase /

RewriteCond %{HTTPS} off 
RewriteRule (.*) https://%{HTTP_HOST}%{REQUEST_URI} 

    # Redirect if it begins with www.
RewriteCond %{HTTP_HOST} ^www\.(.*)$
RewriteRule ^ http://%1%{REQUEST_URI} [R=301,L]

	# Remove enter code here.php; use THE_REQUEST to prevent infinite loops
	# By puting the L-flag here, the request gets redirected immediately
RewriteCond %{THE_REQUEST} ^GET\ (.*)\.php\ HTTP
RewriteRule (.*)\.php$ $1 [R=301,L]

    # Remove /index
    # By puting the L-flag here, the request gets redirected immediately
    # The trailing slash is removed in a next request, so be efficient and dont put it on there at all
RewriteRule (.*)/index$ $1 [R=301,L]

    # Add .php to access file, but don't redirect
    # On some hosts RewriteCond %{REQUEST_FILENAME}.php -f will be true, even if
    # no such file exists. Be safe and add an extra condition
    # There is no point in escaping a dot in a string
RewriteCond %{REQUEST_FILENAME}.php -f
RewriteCond %{REQUEST_URI} !(/|\.php)$
RewriteRule (.*) $1.php [L]

    # Change the sitemap extension from .php to .xml
RewriteRule ^sitemap.xml(.*)$ /sitemap.php?$1

    # Leverage Browser Caching
    # 480 weeks
<FilesMatch "\.(ico|pdf|flv|jpg|jpeg|png|gif|js|css|swf)$">
    Header set Cache-Control "max-age=290304000, public"
</FilesMatch>

    # 2 DAYS
<FilesMatch "\.(xml|txt)$">
    Header set Cache-Control "max-age=172800, public, must-revalidate"
</FilesMatch>

    # 2 HOURS
<FilesMatch "\.(html|htm)$">
    Header set Cache-Control "max-age=7200, must-revalidate"
</FilesMatch>

<IfModule mod_deflate.c>
    #The following line is enough for .js and .css
AddOutputFilter DEFLATE js css
AddOutputFilterByType DEFLATE text/plain text/xml application/xhtml+xml text/css application/xml application/rss+xml application/atom_xml application/x-javascript application/x-httpd-php application/x-httpd-fastphp text/html

    #The following lines are to avoid bugs with some browsers
BrowserMatch ^Mozilla/4 gzip-only-text/html
BrowserMatch ^Mozilla/4\.0[678] no-gzip
BrowserMatch \bMSIE !no-gzip !gzip-only-text/html
</IfModule>