FROM httpd:2.4.43

WORKDIR /usr/local/apache2/htdocs

CMD rm -rf .

COPY src/ .

CMD service apache2 start