####################################################################################
# VERSION v0.0.1
# AUTHOR:         Leonardo Santos <leonardofaria00@gmail.com>
# DESCRIPTION:    Image CentOS with PHP 7.3 and httpd 2.4
#
# TO_BUILD:       docker build --pull --rm -f "Dockerfile" -t httpd-base:latest "."
# TO_RUN:         docker run --rm -it  -p 80:80/tcp httpd-base:latest
#
# Dockerfile de construção do container WebApp utilizado pelo MD
#
# Container preparado e configurado para uso em desenvolvimento e testes
####################################################################################


# TODO
FROM centos:7.7.1908

# Instalando repositório PHP
RUN yum -y --setopt=tsflags=nodocs update
RUN yum -y install \
    epel-release yum-utils \
    http://rpms.remirepo.net/enterprise/remi-release-7.rpm \
    && yum-config-manager --enable remi-php73

# Instalando pacotes httpd e php
RUN yum -y --setopt=tsflags=nodocs install \
    httpd \
    wget curl jq cron \
    php php-fpm php-cli php-mysqlnd php-zip php-devel \
    php-gd php-mbstring php-curl php-xml php-pear php-bcmath php-json \
    && rm -rf /tmp/* \
    && rm -rf /var/cache/yum/* \
    && rm -rf /run/httpd/* /tmp/httpd* \
    && yum clean all

# Copiando arquivos de configuração do PHP
COPY config/php.ini /etc/php.d/custom.ini

# Copiando arquivos do projeto para o document root
COPY app/ /var/www/html

# Adicionando aplicação
WORKDIR /var/www/html

# Criando volume para document root
VOLUME /var/www/html

##################### FIM DA INSTALAÇÃO #####################

# Expondo a porta web
EXPOSE 80

# Iniciando projeto
CMD [ "/usr/sbin/httpd", "-D", "FOREGROUND" ]
