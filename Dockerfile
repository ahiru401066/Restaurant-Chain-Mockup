# PHP公式の軽量バージョン
FROM php:8.2-cli

RUN apt update && \
    apt-get install -y unzip curl
#composerインストール
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# CMD ["bash"]