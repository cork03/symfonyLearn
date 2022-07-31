FROM nginx:1.22-alpine

# ベストプラクティス的に必要なものだけをインストールする
RUN apk update \
    && apk upgrade \
    && apk --update add logrotate \
    && apk add --no-cache openssl \
      bash
