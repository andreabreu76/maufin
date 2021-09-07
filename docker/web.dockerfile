FROM nginx:stable

RUN apt update && apt -y upgrade

COPY ./conf/vhost.conf /etc/nginx/conf.d/default.conf

RUN rm -rf /var/lib/apt/lists/*