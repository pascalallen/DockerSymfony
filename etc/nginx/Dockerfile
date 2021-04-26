FROM nginx:latest

ENV VIRTUAL_HOST="dockersymfony.test"
ENV APP_PUBLIC="/var/www/app/public"
ENV PROXY_PASS="dockersymfony-fpm:9000"

COPY ./conf/site.conf.template /etc/nginx/conf.d/site.conf.template

RUN rm /etc/nginx/nginx.conf
COPY ./conf/nginx.conf /etc/nginx/nginx.conf

COPY ./entrypoint.sh /bin/entrypoint.sh
RUN chmod +x /bin/entrypoint.sh

RUN useradd -ms /bin/bash pascalallen

CMD ["/bin/entrypoint.sh"]
